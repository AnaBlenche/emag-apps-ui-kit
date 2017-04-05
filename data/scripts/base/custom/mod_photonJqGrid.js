/**
 * Created by george.vlada on 20.04.2016.
 */
(function(window, $) {
    "use strict";

    function PhotonJqGrid(parameters) {

        var $this = this;

        var customCallbacks = {
            'mergeGridComplete': 'gridComplete',
            'mergeLoadComplete': 'loadComplete',
            'mergeOnPaging': 'onPaging'
        };

        var defaultParams = {
            //For options details check here: http://www.trirand.com/jqgridwiki/doku.php?id=wiki:options
            table: '#grid-table',
            pager: '#grid-pager',
            loadtext: '<div class="loader-dots dark"><div class="sk-bounce1"></div><div class="sk-bounce2"></div><div class="sk-bounce3"></div></div>',
            datatype: 'json',
            mtype: 'POST',
            colmenu : {
                sortasc : "Sort Ascending",
                sortdesc : "Sort Descending",
                columns : "Columns",
                filter : "Filter",
                grouping : "Group By",
                ungrouping : "Ungroup",
                searchTitle : "Get items with value that:",
                freeze : "Freeze",
                unfreeze : "Unfreeze",
                reorder : "Move to reorder"
            },

            sortable: true,
            viewrecords: true,
            multiSort: true,
            rowNum: 100,
            rowList: [1, 2, 5, 10, 20, 75, 100],
            multiselect: false,
            multiboxonly: true,
            styleUI : 'fontAwesome',
            iconSet: 'fontAwesome',

            shrinkToFit: true,
            autoResizing: { compact: true },
            autowidth: true,
            width: 'auto',
            height: '100%',

            stickyButtons: false,

            mergeOnPaging: true,
            useAutocompleteRow: false,
            onPaging: function() {
                var jqGridOverlay = _getJqGridOverlay();
                jqGridOverlay.addClass('custom-overlay');
            },

            mergeLoadComplete: true,
            loadComplete: function () {
                var jqGridOverlay = _getJqGridOverlay();
                var tableIdSelector = gridOpts.table;
                var tableId = tableIdSelector.slice(1);
                var records = $(tableIdSelector).jqGrid('getGridParam', 'records');

                var $jqgridContainer = $('#' + $(tableIdSelector).attr('aria-labelledby'));
                _updateRecords($jqgridContainer, records);

                //Display no records message.
                var noRecordsMessage = photonTranslations.listing[photonPageLang].noResults;

                var emptyMessage = $(
                    '<div class="custom-jqgrid-messages-'+ tableId +' custom-jqgrid-no-records-'+ tableId +' alert alert-info">' +
                    '<i class="fa fa-info-circle"></i> ' +
                    noRecordsMessage +
                    '</div>'
                );

                if (records == 0) {
                    $('.custom-jqgrid-messages-' + tableId).remove();
                    $('#' + tableId).parent().append(emptyMessage);
                    $('#gbox_'+ tableId +' .ui-jqgrid-pager').addClass('hide');
                } else {
                    $('#gbox_'+ tableId +' .ui-jqgrid-pager').removeClass('hide');
                    $('#'+ tableId ).removeClass('hide');
                    $('.custom-jqgrid-messages-' + tableId).remove();
                }
                jqGridOverlay.removeClass('custom-overlay');
            },
            mergeGridComplete: true,
            gridComplete: function() {
                var tableId = gridOpts.table;
                var jqGridOverlay = _getJqGridOverlay();
                //Make overlay background active
                jqGridOverlay.addClass('custom-overlay');

                if (gridOpts.stickyButtons && !gridOpts.stickyButtonsInitialized) {
                    _initStickyOnJqGrid(gridOpts);
                    gridOpts.stickyButtonsInitialized = true;
                } else if (gridOpts.stickyButtons) {
                    $(document.body).trigger("sticky_kit:recalc");
                }

                var $jqgridContainer = $('#' + $(tableId).attr('aria-labelledby'));
                var records = jQuery(tableId).jqGrid('getGridParam', 'records');

                if(!$jqgridContainer.find('.ui-pg-selbox-container').length){
                    _createContainerForPgSelbox($jqgridContainer,records);
                    _movePgSelbox($jqgridContainer);
                }
            },
            caption: null,
            useCustomColumnChooser: false,
            columnChooserOptions: {}
        };

        var gridOpts = $.extend({}, defaultParams, parameters || {});
        gridOpts.caption = null;
        gridOpts.altRows = null;

        function _initStickyOnJqGrid(gridOpts){
            var tableId = '#gbox_'+ gridOpts.table.slice(1);
            var $tableHead = $(tableId + ' .ui-jqgrid-hdiv');
            var $tableBody = $(tableId + ' .ui-jqgrid-bdiv');

            _addClassForStickElements(tableId);
            initPhotonStick(tableId);

            $(window).on("sticky_kit:stick", function() {
                $tableHead.scrollLeft($tableBody.scrollLeft());
            }).on("sticky_kit:unstick", function() {
                $tableHead.scrollLeft($tableBody.scrollLeft());
            })
        }

        function _addClassForStickElements(tableId){
            $(tableId +' .ui-jqgrid-hdiv').addClass('stick');
        }

        function _getJqGridOverlay()
        {
            var table = gridOpts.table;
            return $("#lui_" + table.substr(1));
        }

        for(var mergeCallbackOption in customCallbacks) {
            if(gridOpts[mergeCallbackOption] && customCallbacks.hasOwnProperty(mergeCallbackOption) && _hasCustomCallback(mergeCallbackOption, customCallbacks[mergeCallbackOption])) {
                _mergeCustomCallback(customCallbacks[mergeCallbackOption]);
            }
        }

        function _initCustomColumnChooser() {

            $.jgrid.extend({
                columnChooser: function() {

                    var defaultOptions = {
                        selectAllCheckboxLabel: 'Select all',
                        saveBtnLabel: 'Done',
                        cancelBtnLabel: 'Cancel',
                        actionButton: ''
                    };
                    var opts = $.extend(defaultOptions, gridOpts.columnChooserOptions);
                    var self = this;

                    var dropId = self[0].id + '_drop_jsc';
                    var drop;

                    var $body = $('body');
                    var $button = $(opts.actionButton);

                    _initDrop($button);

                    _initColumnChooserEvents();

                    function _initColumnChooserEvents() {
                        $body.on('input', '#' + dropId + ' .jsc-search', function() {
                            var searchString = $(this).val().toLowerCase();

                            $('#' + dropId + ' .dd-jsc-checkbox-all-columns .checkbox .jsc-col-name').each(function (i) {
                                var $this = $(this);
                                var colName = $this.html();

                                if (colName.toLowerCase().indexOf(searchString) === -1) {
                                    $this.parents('.checkbox').parent().addClass('hide');
                                } else {
                                    $this.parents('.checkbox').parent().removeClass('hide');
                                }
                            });
                        });

                        $body.on('click', '#' + dropId + ' .jsc-checkbox-all', function() {
                            if (this.checked) {
                                $('#' + dropId + ' .jsc-search').val('');
                                $('#' + dropId + ' .dd-jsc-checkbox-all-columns li').removeClass('hide');
                                $('#' + dropId + ' .jsc-checkbox').prop('checked', true);
                            } else {
                                $('#' + dropId + ' .jsc-checkbox').prop('checked', false);
                            }
                        });

                        $body.on('click', '#' + dropId + ' .jsc-checkbox', function() {
                            if (!this.checked) {
                                $('#' + dropId + ' .jsc-checkbox-all').prop('checked', false);
                            }
                        });

                        $body.off('click', '#' + dropId + ' .btn-jsc-save-btn');
                        $body.off('click', '#' + dropId + ' .btn-jsc-cancel-btn');

                        $body.on('click', '#' + dropId + ' .btn-jsc-save-btn', function() {
                            var colModel = self.jqGrid('getGridParam', 'colModel');

                            $('#' + dropId + ' .dd-jsc-checkbox-all-columns .jsc-checkbox').each(function (i) {
                                if (this.checked) {
                                    self.jqGrid('showCol', colModel[this.value].name);
                                } else {
                                    self.jqGrid('hideCol', colModel[this.value].name);
                                }
                            });
                            photonResizeGrid();
                            drop.close();
                        });

                        $body.on('click', '#' + dropId + ' .btn-jsc-cancel-btn', function() {
                            var colModel = self.jqGrid('getGridParam', 'colModel');
                            $.each(colModel, function (i) {
                                $('#' + dropId + ' .jsc-checkbox[value="' + i + '"]').prop('checked', !this.hidden);
                            });
                            drop.close();
                        });
                    }

                    function _initDrop($button) {
                        drop = new Drop({
                            target: $button[0],
                            classes: 'drop-actions',
                            content: '<div id="' + dropId + '">' +
                                    '<ul class="dropdown-menu dropdown-default dd-jqgrid-select-columns dd-jsc-one-item">' +
                                        '<li>' +
                                            '<input type="text" class="form-control jsc-search" placeholder="Search">' +
                                        '</li>' +
                                    '</ul>' +
                                    '<ul class="dropdown-menu dropdown-default dd-jqgrid-select-columns dd-jsc-checkbox dd-jsc-one-item">' +
                                        '<li>' +
                                            '<div class="checkbox"><label><input type="checkbox" class="form-checkbox-control jsc-checkbox-all" value="" checked=""> (' + opts.selectAllCheckboxLabel +')</label></div>' +
                                        '</li>' +
                                    '</ul>' +
                                    '<ul class="dropdown-menu dropdown-default dd-jqgrid-select-columns dd-jsc-checkbox dd-jsc-checkbox-all-columns">' +
                                        _getColumnsCheckboxes() +
                                    '</ul>' +
                                    '<ul class="dropdown-menu dropdown-default dd-jqgrid-select-columns dd-jsc-buttons">' +
                                        '<li>' +
                                            '<button type="button" class="btn btn-default btn-jsc-cancel-btn">' + opts.cancelBtnLabel + '</button> ' +
                                            '<button type="button" class="btn btn-primary btn-jsc-save-btn pull-right">' + opts.saveBtnLabel + '</button>' +
                                        '</li>' +
                                    '</ul>' +
                                '</div>',
                            position: 'bottom right',
                            openOn: 'click',
                            constrainToWindow: true,
                            constrainToScrollParent: false,
                            tetherOptions: {
                                offset: '-5px 0'
                            }
                        });
                    }

                    function _getColumnsCheckboxes() {
                        var columnsCheckboxes = '';
                        var colModel = self.jqGrid('getGridParam', 'colModel');
                        var colNames = self.jqGrid('getGridParam', 'colNames');

                        $.each(colModel, function(i) {
                            columnsCheckboxes += '<li><div class="checkbox"><label><input type="checkbox" class="form-checkbox-control jsc-checkbox" value="' + i + '"' + (this.hidden? '' : 'checked="checked"') + '> <span class="jsc-col-name">' + colNames[i] + '</span></label></div></li>';
                        });

                        return columnsCheckboxes;
                    }
                }
            });
        }

        function _movePgSelbox($jqgridContainer){
            $.each( $jqgridContainer.find('.ui-pg-selbox'), function() {
                var $selbox = $(this);
                $selbox.appendTo($selbox.closest('.ui-pager-control').find('.ui-pg-selbox-container span').eq(0))
            });
        }

        function _createContainerForPgSelbox($jqgridContainer, records) {
            $jqgridContainer.find('.ui-pager-control').append(
                '<div class="ui-pg-selbox-container">' +
                photonTranslations.listing[photonPageLang].view +
                '<span></span>' +
                photonTranslations.listing[photonPageLang].of +
                ' <span class="no-items">' +
                records +
                '</span> ' +
                photonTranslations.listing[photonPageLang].items +
                '</div>'
            );
        }

        function _updateRecords($jqgridContainer, records){
            $jqgridContainer.find('.ui-pager-control .no-items').html(records);
        }

        this.init = function () {
            $this.grid = $(gridOpts.table).jqGrid(gridOpts);
            var jqGridOverlay = _getJqGridOverlay();
            //The overlay class should be added if data is added through ajax
            if(gridOpts.datatype && gridOpts.datatype !== 'jsonstring') {
                jqGridOverlay.removeClass('ui-overlay').addClass('custom-overlay');
            }
            if(gridOpts.useCustomColumnChooser) {
                _initCustomColumnChooser();
            }
            if(gridOpts.useAutocompleteRow) {
                $($this.grid).parents('.ui-jqgrid-bdiv:first').addClass('reset-overflow');
                $($this.grid).parents('.ui-jqgrid-view:first').removeClass('table-responsive');
            }
        };

        function _mergeCustomCallback(callback) {
            var defaultCallback = defaultParams[callback];
            var customCallback = parameters[callback];
            gridOpts[callback] = function () {
                defaultCallback();
                customCallback(gridOpts.table);
            }
        }

        function _hasCustomCallback(mergeCallbackOption, callback) {
            return gridOpts[mergeCallbackOption] && typeof (parameters) !== 'undefined' && typeof(parameters[callback]) !== 'undefined';
        }
    }


    function photonAddGridError(message, gridId){
        if(gridId == undefined || gridId == ''){
            gridId = 'grid-table';
        }
        var customMessage = $(
            '<div class="custom-jqgrid-messages-'+ gridId +' custom-errors-'+ gridId +' alert alert-danger no-margin">' +
            '<i class="fa fa-exclamation-circle"></i>' +
            message +
            '</div>'
        );

        $('.custom-jqgrid-messages-' + gridId).remove();
        $('#' + gridId).parent().prepend(customMessage);
        $('#' + gridId).addClass('hide');
        $('#gbox_'+ gridId +' .ui-jqgrid-pager').addClass('hide');
    }

    function photonResizeGrid() {

        if ($('.ui-jqgrid table').length <= 0) {
            return false;
        }

        var resize = function (index, grid) {
            var width = $(grid).first().parent().width();
            $(grid).find('table').setGridWidth(width);
        };

        setTimeout(function () {
            $('.ui-jqgrid').each(function(index, value) {
                resize(index, value);
            });

        }, 0);

        return true;
    }

    //---- Events ----
    var $window = $(window);
    //Resize grid
    $window.on('resize', function () {
        photonResizeGrid();
    });

    //Resize after show collapse panel
    $window.on("show.bs.collapse", function(){
        $window.trigger('resize');
    });

    //Resize after closing or opening menu
    $('#toggle-sidebar-size-btn').on('click', function () {
        $window.trigger('resize');
    });

    //----  Public access to functions ----
    window.PhotonJqGrid = PhotonJqGrid;
    window.photonAddGridError = photonAddGridError;
    window.photonResizeGrid = photonResizeGrid;

}(window, jQuery));