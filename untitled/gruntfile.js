module.exports = function(grunt) {


  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'), //read all packages in the json file for details
    uglify: { //specify file names
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'js/main.js', //file you want minimized
        dest: 'prod/main.main.js' //where you want the minimized file to go to
      }
    }
  });


  grunt.loadNpmTasks('grunt-contrib-uglify');


  grunt.registerTask('default', ['uglify']);

};
