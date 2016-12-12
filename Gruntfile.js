/*!
 * eMAG Apps UI KIT
 * Copyright 2011-2016 eMAG.
 * Licensed under MIT License
 */
var devTasks = require('./grunt/build.js');
var prodTasks = require('./grunt/build-prod');
var linterTasks = require('./grunt/linters');
var commonTasks = require('./grunt/common');

module.exports = function initGruntTasks(grunt) {
  require('time-grunt')(grunt);

  // Project configuration.
  grunt.initConfig(Object.assign(commonTasks, linterTasks, devTasks, prodTasks,  {

    // Metadata.
    pkg: grunt.file.readJSON('package.json'),
    banner: '/*!\n' +
    ' * eMAG Apps UI KIT v<%= pkg.version %>' +
    ' * Copyright 2001-<%= grunt.template.today("yyyy") %> <%= pkg.author %>\n' +
    ' * Licensed under the <%= pkg.license %> license\n' +
    ' */\n'
  }));

  /**
   * ------------------- Development tasks -------------------
   */
  // CSS styles dev task - transpile less
  grunt.registerTask('styles', [
    'less:frontend',
    'less:frontend_dark'
  ]);

  // CSS plugin styles task - transpile less
  grunt.registerTask('plugin_styles', [
    'less:plugins'
  ]);

  // JS plugin scripts prod task - concat
  grunt.registerTask('scripts', [
    'concat:frontend'
  ]);

  // JS plugin scripts prod task - concat
  grunt.registerTask('plugin_scripts', [
    'concat:jq_grid',
    'concat:fancytree',
    'concat:chosen'
  ]);

  // Main dev task
  grunt.registerTask('build', [
    'bs-init',
    'watch'
  ]);

  /**
   * ------------------- Production tasks -------------------
   */

  // CSS styles prod task - transpile less, autoprefix, comb, minify
  grunt.registerTask('styles:prod', [
    'less:frontend',
    'less:frontend_dark',
    'autoprefixer:frontend',
    'autoprefixer:frontend_dark',
    'csscomb:frontend',
    'cssmin:frontend',
    'cssmin:frontend_dark'
  ]);

  // CSS plugin styles task - transpile less, autoprefix, comb, minify
  grunt.registerTask('plugin_styles:prod', [
    'less:plugins',
    'cssmin:plugins',
    'less:jquery',
    'cssmin:jquery'
  ]);

  // JS scripts prod task - concat, minify
  grunt.registerTask('scripts:prod', [
    'concat:frontend',
    'uglify:frontend'
  ]);


  // JS plugin scripts prod task - concat, minify
  grunt.registerTask('plugin_scripts:prod', [
    'concat:jq_grid',
    'concat:fancytree',
    'uglify:plugins',
    'uglify:jquery'
  ]);

  // Main prod tasks
  grunt.registerTask('build:prod', [
    'styles:prod',
    'plugin_styles:prod',
    'scripts:prod',
    'plugin_scripts:prod'
  ]);

  /**
   * ------------------- Events -------------------
   */
  grunt.event.on('watch', function setChangedFile(action, filepath) {
    grunt.config('changedFile', filepath);
  });
};
