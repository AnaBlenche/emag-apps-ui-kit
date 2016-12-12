/**
 * Sidebar navigation
 */
function initScrollbarForSidebar() {
    $("#sidebar .sidebar-outer").customScrollbar({
        skin: "default-skin",
        hScroll: false,
        updateOnWindowResize: true
    });
}

function updateScrollbar() {
    $("#sidebar .sidebar-outer").customScrollbar("resize", true);
}

function newScrollbarHeight($sidebarInner, $menuItem) {
    return Math.max(
        ((54 * ($sidebarInner.find(' > .menu-item').index($menuItem) + 1)) + $menuItem.find('.sidebar-submenu').outerHeight()),
        $sidebarInner.height()
    );
}

function updateSidebarHeight() {
    var $sidebarInner = $('#sidebar .sidebar-inner');

    $sidebarInner.css('height', '');
    var $sidebarInner = $('#sidebar .sidebar-inner');
    var $firstActiveMenuItem = $('#sidebar .menu-item.active').eq(0);
    var newHeight = newScrollbarHeight($sidebarInner, $firstActiveMenuItem);

    $sidebarInner.height(newHeight);
}

function updateSidebarHeightByMenuItem($menuItem) {
    var $sidebarInner = $('#sidebar .sidebar-inner');

    if ($menuItem.parent().hasClass('sidebar-inner')) {
        $sidebarInner.css('height', '');

        if ($menuItem.hasClass('active')) {
            var newHeight = newScrollbarHeight($sidebarInner, $menuItem);

            $sidebarInner.height(newHeight);
        }
    } else {
        if ($menuItem.hasClass('active')) {
            $sidebarInner.height($sidebarInner.height() + $menuItem.find('.sidebar-submenu').outerHeight());
        } else {
            $sidebarInner.height($sidebarInner.height() - $menuItem.find('.sidebar-submenu').outerHeight());
        }
    }
}

(function ($) {
    /** Function to toggle the navbar minimization */
    $(document).on('click', '#toggle-nav-btn', function (e) {
        e.preventDefault();
        $(this).toggleClass('btn-primary');
        $(this).find('i.fa').toggleClass('fa-chevron-down fa-chevron-up');
    });

    initScrollbarForSidebar();

    $(document).on('click', '.menu-item > a, .menu-item > .menu-item-data > a', function (e) {
        if ($('#sidebar').hasClass('sidebar-min')) {
            var $menuItem = $(this).parents('.menu-item').eq(0);
            updateSidebarHeightByMenuItem($menuItem);
        }

        updateScrollbar();
    });
})(jQuery);

/* Function for displaying notifications */
/* Ex. usage: addNotifications("This is an informational message", "info") */

function addNotification(message,type){
    var notify = $.notify(message, {
        type: type,
        placement: {
            from: "top",
            align: "center"
        },
        offset: {
            y: 100
        },
        animate: {
            enter: 'animations scaleIn',
            exit: 'animations scaleOut'
        }
    });
}

function hideBodyOverlayer() {
    $('.modal-backdrop').addClass('hidden');
}

function activateDraggableForModal($modal) {
    $modal.find('.modal-content:first').draggable({
        containment: 'body',
        cancel : '.modal-body'
    });
}

/* Function for finding the highest z-index */

function findHighestZIndex(elem) {
    var elems = document.getElementsByTagName(elem);
    var highest = 0;
    for (var i = 0; i < elems.length; i++) {
        var zindex = document.defaultView.getComputedStyle(elems[i], null).getPropertyValue("z-index");
        if ((zindex > highest) && (zindex != 'auto')) {
            highest = zindex;
        }
    }
    return highest;
}

/* Function for enabling/disabling a blocking overlay */

function showThisLoader(type, colorClass) {
    type = typeof type !== 'undefined' ? type : "dots";
    colorClass = typeof colorClass !== 'undefined' ? colorClass : 'dark';

    var loader = {
        dots :  '<div class="loader-dots '+ colorClass +'">' +
        '<div class="sk-bounce1"></div>' +
        '<div class="sk-bounce2"></div>' +
        '<div class="sk-bounce3"></div>' +
        '</div>',
        cubeGrid :  '<div class="loader-cube-grid '+ colorClass +'">' +
        '<div class="sk-cube sk-cube1"></div>' +
        '<div class="sk-cube sk-cube2"></div>' +
        '<div class="sk-cube sk-cube3"></div>' +
        '<div class="sk-cube sk-cube4"></div>' +
        '<div class="sk-cube sk-cube5"></div>' +
        '<div class="sk-cube sk-cube6"></div>' +
        '<div class="sk-cube sk-cube7"></div>' +
        '<div class="sk-cube sk-cube8"></div>' +
        '<div class="sk-cube sk-cube9"></div>' +
        '</div>',
        fadingCircle:   '<div class="loader-fading-circle '+ colorClass +'">' +
        '<div class="sk-circle1 sk-circle"></div>' +
        '<div class="sk-circle2 sk-circle"></div>' +
        '<div class="sk-circle3 sk-circle"></div>' +
        '<div class="sk-circle4 sk-circle"></div>' +
        '<div class="sk-circle5 sk-circle"></div>' +
        '<div class="sk-circle6 sk-circle"></div>' +
        '<div class="sk-circle7 sk-circle"></div>' +
        '<div class="sk-circle8 sk-circle"></div>' +
        '<div class="sk-circle9 sk-circle"></div>' +
        '<div class="sk-circle10 sk-circle"></div>' +
        '<div class="sk-circle11 sk-circle"></div>' +
        '<div class="sk-circle12 sk-circle"></div>' +
        '</div>'
    };

    if(loader[type] == undefined) {
        return type;
    } else {
        return loader[type];
    }

};

(function ( $ ) {

    $.fn.blockControl = function(options) {
        var pageOverlay = false;
        var settings = $.extend({
            // These are the defaults.
            loadingIconType: "dots",
            iconColorClass: "dark",
            overlayColor: "#fff",
            target: this
        }, options);

        if(settings.target.selector == "body" || settings.target.selector == "html") {
            var pageOverlay = true;
        }

        function conditionalMessage(settings, pageOverlay){
            if (pageOverlay) {
                return '<div class="lock-center fixed">'+ showThisLoader(settings.loadingIconType, settings.iconColorClass) +'</div>'
            } else {
                return showThisLoader(settings.loadingIconType, settings.iconColorClass)
            }
        }

        $(settings.target).block({
            message: conditionalMessage(settings, pageOverlay),
            css: {
                border: 'none',
                padding: '0',
                backgroundColor: 'transparent',
                '-webkit-border-radius': '0',
                '-moz-border-radius': '0',
                width: "auto"

            },
            overlayCSS:  {
                backgroundColor: settings.overlayColor,
                opacity:         0.6,
                cursor:          'wait'
            },
            baseZ: 2000
        });
    };
}( jQuery ));

(function ( $ ) {

    $.fn.unblockControl = function() {
        $(this).unblock();
    };

}( jQuery ));

(function ( $ ) {

    var browser = window.navigator.appName;
    var browserVersion = navigator.appVersion;
    var browserEngine = navigator.product;
    var platform = navigator.platform;

    console.log("Browser: " + browser + " | Version: " + browserVersion + " | Product: " + browserEngine + " | OS: " + platform);

}( jQuery ));

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return "";
}

function addMoreActions(context) {
    $(context).find('.more-actions').each(function() {
        var drop = new Drop({
            target: $(this)[0],
            classes: 'drop-actions',
            content:    $(this).attr('data-content'),
            position: 'bottom right',
            openOn: 'click',
            constrainToWindow: true,
            constrainToScrollParent: false,
            tetherOptions: {
                offset: '-5px 0'
            }
        });
    });
}