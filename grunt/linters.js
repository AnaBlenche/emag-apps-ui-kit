var grunt = require('grunt');

grunt.loadNpmTasks('grunt-lesshint');
grunt.loadNpmTasks('gruntify-eslint');

// Linters
module.exports = {
  lesshint: {
    src: [ '<%= changedFile %>' ]
  },
  eslint: {
    src: ['<%= changedFile %>']
  }
};
