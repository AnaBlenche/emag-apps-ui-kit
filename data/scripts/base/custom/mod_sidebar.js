/* ========================================================================
 * Photon Admin: mod_sidebar.js v1.0.0
 *
 * ========================================================================
 * Copyright 2011-2016 eMAG, Inc.
 * Licensed under MIT
 * ======================================================================== */

+function ($) {

    $(document).on('ready', function () {
        /**
         * Jquery objects for sidebar
         * @type {*|HTMLElement}
         */
        var toggleNavBtn = $('#toggle-nav-btn');
        var sidebarJqObj = $('#sidebar');
        var toggleSidebarBtnJqObj = $('#toggle-sidebar-btn');
        /**
         * CSS Classes that trigger the submenu collapse
         * @type {string}
         */
        var menuItemHasChildrenCssClass = '.menu-item-has-children';

        var SCREEN_XS_MAX = 767;

        /**
         * Sidebar elements
         * @event click
         */
        sidebarJqObj.on('click', menuItemHasChildrenCssClass + ' > a, ' + menuItemHasChildrenCssClass + ' .menu-item-data > a', function (e) {
            e.preventDefault();
            var element = $(this).closest(menuItemHasChildrenCssClass);

            if (element.hasClass('active')) {
                element.removeClass('active');
                element.find(menuItemHasChildrenCssClass).removeClass('active');
            }
            else {
                element.parent().find(menuItemHasChildrenCssClass).removeClass('active');
                element.addClass('active');
            }
        });
        /**
         * Collapse sidebar using the dedicated button from the bottom (Only on desktop/tablet)
         * @event click
         */
        sidebarJqObj.on('click', '#toggle-sidebar-size-btn', function (e) {
            e.preventDefault();

            var $sidebarInner = $('#sidebar .sidebar-inner');

            $(this).find('.menu-icon').toggleClass('fa-arrow-right fa-arrow-left');
            if(sidebarJqObj.hasClass('sidebar-min')) {
                sidebarJqObj.removeClass('sidebar-min');
                $(window).trigger('maximize.photon.sidebar');
                setCookie('sidebarStatus', 'open');

                $sidebarInner.css('height', '');
            } else {
                sidebarJqObj.addClass('sidebar-min');
                $(window).trigger('minimize.photon.sidebar');
                setCookie('sidebarStatus', 'close');

                updateSidebarHeight();
            }
            updateScrollbar();
        });
        /**
         * Open/Close sidebar by using the "#toggle-sidebar-btn" button from the main navigation (Only on mobile)
         * @event click
         */
        $(document).on('click', '#toggle-sidebar-btn', function (e) {
            e.preventDefault();
            $(this).toggleClass('btn-primary');

            if(sidebarJqObj.hasClass('open')) {
                sidebarJqObj.removeClass('open');
                $(window).trigger('close.photon.sidebar');
            } else {
                sidebarJqObj.addClass('open');
                $(window).trigger('open.photon.sidebar');
            }

            if(toggleNavBtn.hasClass('btn-primary')) {
                toggleNavBtn.toggleClass('btn-primary');
                toggleNavBtn.find('i.fa').toggleClass('fa-chevron-down fa-chevron-up');
            }
            $('#main-nav').collapse('hide');
        });
        /**
         * Close sidebar on mobile when click out of sidebar
         * @event click
         */
        $(document).on('click', function (e) {
            if (!$(e.target).closest('#sidebar, #toggle-sidebar-btn').length) {
                sidebarJqObj.removeClass('open');
                if(toggleSidebarBtnJqObj.hasClass('btn-primary')){
                    toggleSidebarBtnJqObj.removeClass('btn-primary');
                }
            }
        });

        var sidebarStatus = getCookie('sidebarStatus');

        if (sidebarStatus == '') {
            setCookie('sidebarStatus', 'open');
        } else {
            if (sidebarStatus == 'close' && window.innerWidth > SCREEN_XS_MAX) {
                sidebarJqObj.addClass('sidebar-min');
                sidebarJqObj.find('#toggle-sidebar-size-btn .menu-icon').removeClass('fa-arrow-left').addClass('fa-arrow-right');
            }
        }

        $(window).on('resize', function () {
            var sidebarStatus = getCookie('sidebarStatus');
            var $sidebarInner = $('#sidebar .sidebar-inner');

            if (sidebarStatus == 'close' && window.innerWidth > SCREEN_XS_MAX) {
                sidebarJqObj.addClass('sidebar-min');
                sidebarJqObj.find('#toggle-sidebar-size-btn .menu-icon').removeClass('fa-arrow-left').addClass('fa-arrow-right');
                updateSidebarHeight();
            } else {
                sidebarJqObj.removeClass('sidebar-min');
                sidebarJqObj.find('#toggle-sidebar-size-btn .menu-icon').removeClass('fa-arrow-right').addClass('fa-arrow-left');
                $sidebarInner.css('height', '');
            }
        })
    });
}(jQuery);