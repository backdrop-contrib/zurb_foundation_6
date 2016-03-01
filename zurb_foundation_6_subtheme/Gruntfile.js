module.exports = function (grunt) {

  // Config...
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {
      scripts: {
        options: {
          livereload:true
        },
        files: ['./js/**/*.js'],
        tasks: ['jshint']
      },
      css: {
        files: ['./sass/**/*.scss'],
        tasks: ['sass:dev'],
        options: {
          spawn: false,
          livereload:true
        }
      },
      livereload: {
        options: {
          livereload:true
        },
        files:[
          './css/**/*.css',
        ]
      }
    },
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'js/src/**/*.js',
        '!js/scripts.gen.js'
      ]
    },
    uglify: {
      prod: {
        options: {
          mangle: true,
          compress: true
        },
        files: {
          'js/scripts.gen.js': ['js/scripts.js']
        }
      }
    },

    autoprefixer: {
         options: {
             browsers: ['last 2 versions', 'ie >= 8', 'iOS >= 6', 'Android >= 4']
          },
          dist: {
             files: {
              './css/your-custom.css': './css/your-custom.css'
              }
         },
    },

    cssbeautifier: {
      global: {
        files: {
          src: ['./css/your-custom.css']
        },
        options: {
          indent: '  ',
          openbrace: 'end-of-line',
          autosemicolon: false
        }
      }
    },

  stripCssComments: {
      global: {
        files: [{
          expand: true,
          src: ['./css/your-custom.css']
        }]
      }
    },

    sass: {
      options: {

      },
      prod: {
        options: {
        outputStyle: 'compressed',
        require: 'susy',
        includePaths: require('node-bourbon').includePaths,
        includePaths: require('node-neat').includePaths
        },
        files: {
          './css/your-custom.css': './sass/style.scss',
        }
      },
      dev: {
        options: {
          outputStyle: 'expanded',
          require: 'susy',
          includePaths: require('node-bourbon').includePaths,
          includePaths: require('node-neat').includePaths
        },
        files: {
          './css/your-custom.css': './sass/style.scss',
        }
      }
    }
  });
  // Load tasks...
  grunt.loadNpmTasks('grunt-open');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-cssbeautifier');
  grunt.loadNpmTasks('grunt-strip-css-comments');
  // Task aliases and tasks
  grunt.registerTask('prod', [
    'uglify:prod',
    'sass:prod'
  ]);
  // Default task.
  grunt.registerTask("default", ["watch", "autoprefixer", "sass:dev", "jshint", "stripCssComments", "cssbeautifier"]);
};


