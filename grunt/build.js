var grunt = require('grunt');
var browserSync = require('browser-sync');
var uiKitName = require('./../package.json').name;

grunt.loadNpmTasks('grunt-browser-sync');
grunt.loadNpmTasks('grunt-contrib-watch');

grunt.registerTask('bs-init', function initBrowserSync() {
  browserSync({
    notify: true,
    watchTask: true,
    injectChanges: true,
    server: {
      baseDir: ['./', './demo', './dist'],
      index: 'index.html'
    },
    middleware: function requestMiddleware(req, res, next) {
      if (req.url.indexOf('emag-apps-ui-kit')) {
        req.url = req.url.replace('/' + uiKitName, '');
      }
      return next();
    }
  });
});

// Dev tasks
module.exports = {
  watch: {
    php: {
      files: ['<%= pkg.demo %>/**/*.php'],
      tasks: ['php2html'],
      options: {
        nospawn: true
      }
    },
    styles: {
      files: ['<%= pkg.data_styles %>/**/*.less'],
      tasks: ['styles', 'lesshint'],
      options: {
        nospawn: true
      }
    },
    plugin_styles: {
      files: ['<%= pkg.data_plugins %>/**/*.less'],
      tasks: ['plugin_styles', 'lesshint'],
      options: {
        nospawn: true
      }
    },
    scripts: {
      files: ['<%= pkg.data_scripts %>/**/*.js'],
      tasks: ['scripts', 'eslint'],
      options: {
        nospawn: true
      }
    },
    plugin_scripts: {
      files: ['<%= pkg.data_plugins %>/**/*.js', '<%= pkg.data_scripts %>/**/*.js'],
      tasks: ['plugin_scripts', 'eslint'],
      options: {
        nospawn: true
      }
    }
  }
};
