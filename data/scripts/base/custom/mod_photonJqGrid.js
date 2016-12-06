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
                var _this = this;
                var records = jQuery(_this).jqGrid('getGridParam', 'records');
                var tableId = gridOpts.table.slice(1);

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
                var _this = this;
                var jqGridOverlay = _getJqGridOverlay();
                //Make overlay background active
                jqGridOverlay.addClass('custom-overlay');

                if (gridOpts.stickyButtons && !gridOpts.stickyButtonsInitialized) {
                    _initStickyOnJqGrid(gridOpts);
                    gridOpts.stickyButtonsInitialized = true;
                } else if (gridOpts.stickyButtons) {
                    $(document.body).trigger("sticky_kit:recalc");
                }


                var $jqgridContainer = $('#' + $(_this).attr('aria-labelledby'));
                var records = jQuery(_this).jqGrid('getGridParam', 'records');


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
                        title: 'Choose columns',
                        saveBtnLabel: 'Save',
                        cancelBtnLabel: 'Cancel'
                    };
                    var opts = $.extend(defaultOptions, gridOpts.columnChooserOptions);
                    var self = this;

                    var modalId = self[0].id + '_modal';
                    var selectContainer = '<div class="form-group" id="colchooser_' + self[0].p.id + '">' +
                        '<select multiple="multiple" class="form-control" id="select_' + self[0].p.id + '">' +
                        '</select>' +
                        '</div>';
                    var $body = $('body');
                    var $modal = _getColumnChooserModal();
                    _initColumnChooserEvents();

                    function _initColumnChooserEvents() {
                        $body.off('click', '.col-ch-save-btn');
                        $body.on('click','.col-ch-save-btn', function() {
                            var colModel = self.jqGrid('getGridParam', 'colModel');
                            var select = $('#select_' + self[0].p.id);

                            select.find('option').each(function(i) {
                                if (this.selected) {
                                    self.jqGrid('showCol', colModel[this.value].name);
                                } else {
                                    self.jqGrid('hideCol', colModel[this.value].name);
                                }
                            });
                            photonResizeGrid();
                        });
                        $(window).on(self[0].id + '.column.chooser.show', function() {
                            $modal.show();
                            hideBodyOverlayer();
                            activateDraggableForModal($('#' + modalId));
                            _insertOptionValuesToModal();
                        });
                        $(window).on(self[0].id + '.column.chooser.hide', function() {
                            $modal.hide();
                        });
                    }

                    function _getColumnChooserModal() {

                        return new PhotonModal({
                            id: modalId,
                            title: opts.title,
                            content: selectContainer,
                            size: 'small',
                            type: 'preview',
                            recreateOnShow: false,
                            buttons: {
                                save: {
                                    label: opts.saveBtnLabel,
                                    class: 'btn-success col-ch-save-btn',
                                    icon: 'fa fa-check',
                                    closeModal: true
                                },
                                cancel: {
                                    label: opts.cancelBtnLabel,
                                    class: 'col-ch-cancel-btn',
                                    icon: 'fa fa-times',
                                    closeModal: true
                                }
                            }});
                    }

                    function _insertOptionValuesToModal() {
                        var select = $('#select_' + self[0].p.id);
                        var colModel = self.jqGrid('getGridParam', 'colModel');
                        var colNames = self.jqGrid('getGridParam', 'colNames');
                        var colMap = {}, fixedCols = [];
                        select.empty();
                        $.each(colModel, function(i) {
                            colMap[this.name] = i;
                            if (this.hidedlg) {
                                if (!this.hidden) {
                                    fixedCols.push(i);
                                }
                                return;
                            }
                            select.append("<option value='" + i + "' " + (this.hidden? "" : "selected='selected'") + ">" + colNames[i] + "</option>");
                        });
                    }
                }
            });
        }

        function _movePgSelbox($jqgridContainer){
            $jqgridContainer.find('.ui-pg-selbox').appendTo($jqgridContainer.find('.ui-pg-selbox-container span').eq(0));
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