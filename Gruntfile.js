var path          = require('path');
var stylusDir     = 'dev/css';
var javascriptDir = 'public/javascript';
var JALP          = 'tu-papa';
/*var error = chalk.bold.red;
    console.log(error('Error!'));*/

module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
        options: {
            stripBanners: true
        },
        styles: {
            src: [
                  'dev/css/style.css',
                  'dev/css/stylus.css'
                  ],
            dest: 'prod/css/styles.css'
        },
        scripts: {
            src: [
                  'dev/js/jquery.sabecarousel.js',
                  'dev/js/script.js'
                  ],
            dest: 'prod/js/scripts.js'
        }
    },
    cssmin: {
      compress: {
        files: {
          "public/css/styles.min.css": 'prod/css/styles.css'
        }
      }
    },        
    uglify: {
      my_target: {
        files: {
          'public/js/scripts.min.js': 'prod/js/scripts.js'
        }
      }
    },
    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'public/images/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'prod/images/'
        }]
      }
    },
    jshint: {
      all: ['Gruntfile.js', 'dev/js/script.js']
    },    
    pagespeed: {
      options: {
        nokey: true,
        url: "https://developers.google.com"
      },
      prod: {
        options: {
          url: "https://developers.google.com/speed/docs/insights/v1/getting_started",
          locale: "en_GB",
          strategy: "desktop",
          threshold: 80
        }
      },
      paths: {
        options: {
          paths: ["/speed/docs/insights/v1/getting_started", "/speed/docs/about"],
          locale: "en_GB",
          strategy: "desktop",
          threshold: 80
        }
      }
    }

  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-pagespeed');

  // Default task(s).
  grunt.registerTask('concatenando', ['concat']);
  grunt.registerTask('minify', ['cssmin', 'uglify']);  
  grunt.registerTask('public', ['concatenando','minify']);

};