
module.exports = function(grunt) {
    grunt.loadNpmTasks('grunt-bower-concat');

    grunt.initConfig({
        bower_concat: {
          all: {
            dest: 'web/js/complete.js',
            cssDest: 'web/css/complete.css',    
            dependencies: {
              'underscore': 'jquery',
              'backbone': 'underscore',
              'jquery-mousewheel': 'jquery'
            },
            bowerOptions: {
              relative: false
            }
          }
        }
    });

};