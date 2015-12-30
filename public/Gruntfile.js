var path          = require('path');
var stylusDir     = 'css/dev';
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
                  'css/dev/style.css',
                  'css/dev/stylus.css'
                  ],
            dest: 'css/prod/styles.css'
        },
        scripts: {
            src: [
                  'js/dev/jquery.sabecarousel.js',//no hay
                  'js/dev/script.js'
                  ],
            dest: 'js/prod/scripts.js'
        }
    },
    cssmin: {
      compress: {
        files: {
          "css/styles.min.css": 'css/prod/styles.css',
          'css/app.min.css':
          [
            'css/prod/app.css',
            'bower_components/foundation/css/normalize.css',
            'css/prod/foundation-opt.css',
            'css/dev/jquery.skidder.css',
            'css/modal.css'
          ],
          'css/main.min.css':
          [
            'css/prod/main.css',
            'bower_components/foundation/css/normalize.css',
            'css/prod/foundation-opt.css',
            'css/dev/sabecarousel.css',
            'css/dev/modal.css'
          ]
        }
      }
    },
            //'bower_components/foundation/js/vendor/jquery.js',
            //'bower_components/foundation/js/vendor/jquery.js',
    uglify: {
      my_target: {
        files: {
          'js/scripts.min.js': 'js/prod/scripts.js',
          'js/js-head.min.js':
          [
            'bower_components/foundation/js/vendor/modernizr.js',
            'bower_components/webcomponentsjs/webcomponents-lite.min.js'
          ],
          'js/app.min.js':
          [
            'bower_components/foundation/js/foundation.min.js',
            'js/dev/imagesloaded.js',
            'js/dev/smartresize.js',
            'js/dev/jquery.skidder.js',
            'js/dev/app.js'
          ],
          'js/main.min.js':
          [
            'bower_components/foundation/js/foundation.min.js',
            'js/dev/jquery.sabecarousel.js',
            'js/dev/main.js'
          ]
        }
      }
    },
    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'images/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'images/prod/'
        }]
      }
    },
    jshint: {
      options: {
        curly: true,
        eqeqeq: false,//true: Prohíbe el uso de == y != y obliga a utilizar === y !==.
        eqnull: true,
        browser: true,
        globals: {
          jQuery: true
        },
      },
      uses_defaults: ['Gruntfile.js', 'js/dev/script.js']
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
    },
    sass: {
      dist: {
        options: {
          style: 'expanded',
          loadPath: ['bower_components/foundation/scss']
        },
        files: {
          'css/prod/main.css': 'scss/main.scss',
          'css/prod/app.css': 'scss/app.scss',
          'css/prod/foundation-opt.css': 'scss/foundation.scss'
        }
      }
    },
	watch: {
		css: {
			files: 'scss/**/*.scss',
			tasks: ['sass'],
			options: {
				livereload: true,
			},
		},
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
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Default task(s).
  grunt.registerTask('concatenando', ['concat']);
  grunt.registerTask('minify', ['cssmin', 'uglify']);
  grunt.registerTask('anterior', ['concatenando', 'sass', 'minify']);
  grunt.registerTask('public', ['sass', 'minify', 'watch']);

};