var grunt = require('grunt');

grunt.loadNpmTasks('grunt-php2html');
grunt.loadNpmTasks('grunt-contrib-less');
grunt.loadNpmTasks('grunt-contrib-concat');

// Convert php to html and use pretify for it
grunt.registerTask('convert_demo', [
  'php2html'
]);

// Both dev and prod tasks
module.exports = {
  php2html: {
    default: {
      options: {
        htmlhint: {
          'doctype-first': false
        },
        processLinks: true,
        process: function replacePhpExtensionFromAnchors(response, callback) {
          var content = response.replace(new RegExp('.php', 'g'), '.html');
          callback(content);
        }
      },
      files: [
        {
          expand: true,
          cwd: 'demo/',
          src: ['*.php'],
          dest: 'demo/',
          ext: '.html'
        }
      ]
    }
  },
  // Task configuration:
  // Compiles the .less files into a readable .css file.
  less: {
    // The main stylesheet (main_style.css)
    frontend: {
      options: {
        strictMath: true,
        sourceMap: true,
        outputSourceFiles: true,
        sourceMapURL: 'main_style.css.map',
        sourceMapFilename: '<%= pkg.dist_styles %>/main_style.css.map',
        banner: '<%= banner %>'
      },
      src: '<%= pkg.data_styles %>/base/bootstrap.less',
      dest: '<%= pkg.dist_styles %>/main_style.css'
    },
    // The dark theme stylesheet (main_style_dark.css)
    frontend_dark: {
      options: {
        strictMath: true,
        sourceMap: true,
        outputSourceFiles: true,
        sourceMapURL: 'main_style_dark.css.map',
        sourceMapFilename: '<%= pkg.dist_styles %>/main_style_dark.css.map',
        banner: '<%= banner %>'
      },
      src: '<%= pkg.data_styles %>/base/dark/bootstrap_dark.less',
      dest: '<%= pkg.dist_styles %>/main_style_dark.css'
    },
    plugins: {
      options: {
        strictMath: false,
        sourceMap: false
      },
      files: {
        '<%= pkg.dist_plugins %>/datetimepicker/bootstrap-datetimepicker.4.17.37.css': '<%= pkg.data_plugins %>/datetimepicker/less/bootstrap-datetimepicker.4.17.37.less',
        '<%= pkg.dist_plugins %>/daterangepicker/daterangepicker.css': '<%= pkg.data_plugins %>/daterangepicker/less/daterangepicker.less',
        '<%= pkg.dist_plugins %>/chosen/jQuery.chosen-1.4.2.css': '<%= pkg.data_plugins %>/chosen/less/jQuery.chosen-1.4.2.min.less',
        '<%= pkg.dist_plugins %>/selectize/selectize-0.12.0.css': '<%= pkg.data_plugins %>/selectize/less/selectize.bootstrap3.less',
        '<%= pkg.dist_plugins %>/css3spinners/css3-spinners.1.2.2.css': '<%= pkg.data_plugins %>/css3spinners/less/css3-spinners.less',
        '<%= pkg.dist_plugins %>/jqgrid/ui.jqgrid.css': '<%= pkg.data_plugins %>/jqgrid/less/jqgrid.custom.less',
        '<%= pkg.dist_plugins %>/dropzone/dropzone.css': '<%= pkg.data_plugins %>/dropzone/less/dropzone.less',
        '<%= pkg.dist_plugins %>/magnific/magnific.css': '<%= pkg.data_plugins %>/magnific/less/magnific.less',
        '<%= pkg.dist_plugins %>/drop/drop.css': '<%= pkg.data_plugins %>/drop/less/drop.less',
        '<%= pkg.dist_plugins %>/summernote/summernote.css': '<%= pkg.data_plugins %>/summernote/less/summernote.less',
        '<%= pkg.dist_plugins %>/fancytree/fancytree.css': '<%= pkg.data_plugins %>/fancytree/less/ui.fancytree.less',
        '<%= pkg.dist_plugins %>/prism/prism.css': '<%= pkg.data_plugins %>/prism/less/prism.less',
        '<%= pkg.dist_plugins %>/jquery-custom-scrollbar/jquery-custom-scrollbar-0.5.5.css': '<%= pkg.data_plugins %>/jquery-custom-scrollbar/less/jquery-custom-scrollbar-0.5.5.custom.less'
      }
    },
    jquery: {
      options: {
        strictMath: true,
        sourceMap: false
      },
      src: '<%= pkg.data_styles %>/lib/jquery_ui/less/all.less',
      dest: '<%= pkg.dist_styles %>/lib/jquery-ui-custom.1.11.4.css'
    }
  },
  concat: {
    options: {
      stripBanners: false
    },
    frontend: {
      src: [
        '<%= pkg.data_scripts%>/base/custom/mod_photonTranslations.js',
        '<%= pkg.data_plugins %>/nprogress/js/nprogress.js',
        '<%= pkg.data_scripts %>/base/util.bs4.js',
        '<%= pkg.data_scripts %>/base/transition.js',
        '<%= pkg.data_scripts %>/base/alert.js',
        '<%= pkg.data_scripts %>/base/button.js',
        '<%= pkg.data_scripts %>/base/carousel.js',
        '<%= pkg.data_scripts %>/base/collapse.js',
        '<%= pkg.data_scripts %>/base/dropdown.js',
        '<%= pkg.data_scripts %>/base/modal.js',
        '<%= pkg.data_scripts %>/base/tooltip.bs4.js',
        '<%= pkg.data_scripts %>/base/popover.bs4.js',
        '<%= pkg.data_scripts %>/base/scrollspy.js',
        '<%= pkg.data_scripts %>/base/tab.js',
        '<%= pkg.data_scripts %>/base/affix.js',
        '<%= pkg.data_scripts %>/base/custom/mod_sidebar.js',
        '<%= pkg.data_scripts %>/base/custom/mod_photonDataFormatter.js',
        '<%= pkg.data_plugins%>/notify/js/bootstrap-notify.js',
        '<%= pkg.data_plugins%>/blockui/js/jQuery.blockui.2.70.0.js',
        '<%= pkg.data_scripts %>/base/custom/mod_photonModal.js',
        '<%= pkg.data_scripts %>/base/custom/mod_customInput.js',
        '<%= pkg.data_scripts %>/base/custom/mod_tooltip.js',
        '<%= pkg.data_scripts %>/base/custom/mod_popover.js',
        '<%= pkg.data_plugins %>/jquery-custom-scrollbar/js/jquery.custom-scrollbar.js',
        '<%= pkg.data_scripts %>/base/custom/custom-setup.js'
      ],
      dest: '<%= pkg.dist_scripts %>/main_script.js'
    },
    fancytree: {
      src: [
        '<%= pkg.data_plugins %>/fancytree/js/jquery.fancytree.js',
        '<%= pkg.data_plugins %>/fancytree/js/jquery.fancytree.filter.js',
        '<%= pkg.data_scripts %>/base/custom/mod_photonFancytree.js'
      ],
      dest: '<%= pkg.dist_plugins%>/fancytree/fancytree.js'
    },
    chosen: {
      src: [
        '<%= pkg.data_plugins %>/chosen/js/chosen.jquery.js',
        '<%= pkg.data_plugins %>/chosen/js/chosen.ajax.js'
      ],
      dest: '<%= pkg.dist_plugins %>/chosen/jQuery.chosen-1.4.2.js'
    },
    jq_grid: {
      src: [
        '<%= pkg.data_plugins %>/jqgrid/js/grid.base.js',
        '<%= pkg.data_plugins %>/jqgrid/js/grid.celledit.js',
        '<%= pkg.data_plugins %>/jqgrid/js/grid.common.js',
        '<%= pkg.data_plugins %>/jqgrid/js/grid.filter.js',
        '<%= pkg.data_plugins %>/jqgrid/js/grid.formedit.js',
        '<%= pkg.data_plugins %>/jqgrid/js/grid.grouping.js',
        '<%= pkg.data_plugins %>/jqgrid/js/grid.import.js',
        '<%= pkg.data_plugins %>/jqgrid/js/grid.inlinedit.js',
        '<%= pkg.data_plugins %>/jqgrid/js/grid.jqueryui.js',
        '<%= pkg.data_plugins %>/jqgrid/js/grid.pivot.js',
        '<%= pkg.data_plugins %>/jqgrid/js/grid.subgrid.js',
        '<%= pkg.data_plugins %>/jqgrid/js/grid.treegrid.js',
        '<%= pkg.data_plugins %>/jqgrid/js/jqDnR.js',
        '<%= pkg.data_plugins %>/jqgrid/js/jqModal.js',
        '<%= pkg.data_plugins %>/jqgrid/js/jquery.fmatter.js',
        '<%= pkg.data_plugins %>/jqgrid/js/jquery.jqGrid.js',
        '<%= pkg.data_scripts%>/base/custom/mod_photonJqGrid.js'
      ],
      dest: '<%= pkg.dist_plugins%>/jqgrid/jquery.jqGrid.js'
    }
  }
};
