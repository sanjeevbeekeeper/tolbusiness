module.exports = function(grunt){
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // sass
        sass: {
            dist: {
                files: {
                    'lib/css/main.min.css' : 'lib/sass/main.scss'
                    },
                options: {
                    style: 'compressed' // nested, compact, compressed, expanded
                    }
                },
            },

        // watch
        watch: {
            // watching sass files
            sass: {
                files: 'lib/sass/**/*.scss', // Using globbing pattern
                tasks: 'sass'  // task name
                }
            },

        });
    grunt.registerTask('default');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', 'watch'); // using watch as a default
    };
