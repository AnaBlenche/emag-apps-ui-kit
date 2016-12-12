var grunt = require('grunt');

grunt.loadNpmTasks('grunt-csscomb');
grunt.loadNpmTasks('grunt-autoprefixer');
grunt.loadNpmTasks('grunt-contrib-cssmin');
grunt.loadNpmTasks('grunt-contrib-uglify');

// Prod tasks
module.exports = {
  // Minifies JS files
  uglify: {
    options: {
      sourceMap: false,
      sourceMapName: '<%= pkg.dist_scripts %>/main_script.min.map',
      banner: '<%= banner %>',
      mangle: {
        except: ['jQuery']
      }
    },
    frontend: {
      files: {
        '<%= pkg.dist_scripts %>/main_script.min.js': ['<%= pkg.dist_scripts %>/main_script.js']
      }
    },
    jquery: {
      files: {
        '<%= pkg.dist_scripts %>/lib/jquery-ui.1.11.4.min.js': '<%= pkg.data_scripts %>/lib/jquery-ui.1.11.4.js'
      }
    },
    plugins: {
      files: {
        '<%= pkg.dist_plugins %>/selectize/selectize-0.12.0.min.js': '<%= pkg.data_plugins %>/selectize/js/selectize.js',
        '<%= pkg.dist_plugins %>/inputlimiter/jQuery.inputlimiter.1.3.1.min.js': '<%= pkg.data_plugins %>/inputLimiter/js/jQuery.inputlimiter.1.3.1.js',
        '<%= pkg.dist_plugins%>/jqgrid/jquery.jqGrid.min.js': '<%= pkg.dist_plugins%>/jqgrid/jquery.jqGrid.js',
        '<%= pkg.dist_plugins%>/stickyKit/stickyKit.min.js': ['<%= pkg.data_plugins%>/stickyKit/js/stickyKit.js', '<%= pkg.data_scripts %>/base/custom/mod_stickyKitWrapper.js'],
        '<%= pkg.dist_plugins%>/countdown/countdown.min.js': ['<%= pkg.data_plugins%>/countdown/js/moment-timezone-with-data.js', '<%= pkg.data_plugins%>/countdown/js/jquery.countdown.js'],
        '<%= pkg.dist_plugins %>/chosen/jQuery.chosen-1.4.2.min.js': '<%= pkg.dist_plugins %>/chosen/jQuery.chosen-1.4.2.js',
        '<%= pkg.dist_plugins %>/dropzone/dropzone.min.js': '<%= pkg.data_plugins %>/dropzone/js/dropzone.js',
        '<%= pkg.dist_plugins %>/magnific/magnific.min.js': '<%= pkg.data_plugins %>/magnific/js/magnific.js',
        '<%= pkg.dist_plugins %>/tether/tether.min.js': '<%= pkg.data_plugins %>/tether/js/tether.1.1.1.js',
        '<%= pkg.dist_plugins %>/drop/drop.min.js': '<%= pkg.data_plugins %>/drop/js/drop.js',
        '<%= pkg.dist_plugins %>/jQueryCookie/jQueryCookie.min.js': '<%= pkg.data_plugins %>/jQueryCookie/js/jquery.cookie.js',
        '<%= pkg.dist_plugins %>/summernote/summernote.min.js': '<%= pkg.data_plugins %>/summernote/js/summernote.js',
        '<%= pkg.dist_plugins %>/fancytree/fancytree.min.js': '<%= pkg.dist_plugins%>/fancytree/fancytree.js',
        '<%= pkg.dist_plugins %>/prism/prism.min.js': '<%= pkg.data_plugins %>/prism/js/prism.js',
        '<%= pkg.dist_plugins %>/jquery-custom-scrollbar /jquery.custom-scrollbar.min.js': '<%= pkg.data_plugins %>/jquery-custom-scrollbar/js/jquery.custom-scrollbar.js',
        '<%= pkg.dist_plugins %>/daterangepicker/daterangepicker.min.js': '<%= pkg.data_plugins %>/daterangepicker/js/daterangepicker.js'
      }
    }
  },
  // Minifies CSS files by overriding them
  cssmin: {
    options: {
      compatibility: 'ie8',
      keepSpecialComments: '*',
      sourceMap: false,
      advanced: false
    },
    frontend: {
      src: '<%= pkg.dist_styles %>/main_style.css',
      dest: '<%= pkg.dist_styles %>/main_style.min.css'
    },
    frontend_dark: {
      src: '<%= pkg.dist_styles %>/main_style_dark.css',
      dest: '<%= pkg.dist_styles %>/main_style_dark.min.css'
    },
    plugins: {
      files: {
        '<%= pkg.dist_plugins %>/datetimepicker/bootstrap-datetimepicker.4.17.37.min.css': '<%= pkg.dist_plugins %>/datetimepicker/bootstrap-datetimepicker.4.17.37.css',
        '<%= pkg.dist_plugins %>/daterangepicker/daterangepicker.min.css': '<%= pkg.dist_plugins %>/daterangepicker/daterangepicker.css',
        '<%= pkg.dist_plugins %>/chosen/jQuery.chosen-1.4.2.min.css': '<%= pkg.dist_plugins %>/chosen/jQuery.chosen-1.4.2.css',
        '<%= pkg.dist_plugins %>/selectize/selectize-0.12.0.min.css': '<%= pkg.dist_plugins %>/selectize/selectize-0.12.0.css',
        '<%= pkg.dist_plugins %>/css3spinners/css3-spinners.1.2.2.min.css': '<%= pkg.dist_plugins %>/css3spinners/css3-spinners.1.2.2.css',
        '<%= pkg.dist_plugins %>/jqgrid/ui.jqgrid.min.css': '<%= pkg.dist_plugins %>/jqgrid/ui.jqgrid.css',
        '<%= pkg.dist_plugins %>/dropzone/dropzone.min.css': '<%= pkg.dist_plugins %>/dropzone/dropzone.css',
        '<%= pkg.dist_plugins %>/magnific/magnific.min.css': '<%= pkg.dist_plugins %>/magnific/magnific.css',
        '<%= pkg.dist_plugins %>/drop/drop.min.css': '<%= pkg.dist_plugins %>/drop/drop.css',
        '<%= pkg.dist_plugins %>/summernote/summernote.min.css': '<%= pkg.dist_plugins %>/summernote/summernote.css',
        '<%= pkg.dist_plugins %>/fancytree/fancytree.min.css': '<%= pkg.dist_plugins %>/fancytree/fancytree.css',
        '<%= pkg.dist_plugins %>/prism/prism.min.css': '<%= pkg.dist_plugins %>/prism/prism.css',
        '<%= pkg.dist_plugins %>/jquery-custom-scrollbar/jquery-custom-scrollbar-0.5.5.min.css': '<%= pkg.dist_plugins %>/jquery-custom-scrollbar/jquery-custom-scrollbar-0.5.5.css'
      }
    },
    jquery: {
      src: '<%= pkg.dist_styles %>/lib/jquery-ui-custom.1.11.4.css',
      dest: '<%= pkg.dist_styles %>/lib/jquery-ui-custom.1.11.4.min.css'
    }
  },
  // Post CSS Autoprefixer - adds browser-specific prefixes to standard CSS properties.
  autoprefixer: {
    options: {
      browsers: ['last 2 versions', 'ie 8', 'ie 9'],
      map: true
    },
    frontend: {
      src: '<%= pkg.dist_styles %>/main_style.css',
      dest: '<%= pkg.dist_styles %>/main_style.css'
    },
    frontend_dark: {
      src: '<%= pkg.dist_styles %>/main_style_dark.css',
      dest: '<%= pkg.dist_styles %>/main_style_dark.css'
    }
  },
  // Rearranges CSS properties in a predefined order (see data/styles/base/.csscomb.json)
  csscomb: {
    options: {
      config: '<%= pkg.data_styles %>/base/.csscomb.json'
    },
    frontend: {
      expand: true,
      cwd: '<%= pkg.dist_styles %>',
      src: ['*.css', '!*.min.css'],
      dest: '<%= pkg.dist_styles %>'
    }
  }
};
