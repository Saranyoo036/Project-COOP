module.exports = function(grunt) {
    grunt.initConfig({
		sass: {
			options: {
                includePaths: ['node_modules/bootstrap-sass/assets/stylesheets']
            },
            dist: {
				options: {
					outputStyle: 'compressed'
				},
                files: [{
					expand: true,
					cwd: 'assets/sass', /*root folder for styles*/
					src: 'main.scss', /* file path which have to be converted into css after the root folder*/
					dest: 'assets/css/',/* css file path where the converted files have to be placed*/
					ext: '.css' /*file extention for converted files*/
				}]
            }
        },
        
        uglify: {
          my_target: {
            files: {
               'Assets/bundles/libscripts.bundle.js': ['assets/js/jquery-2.1.4.min.js','assets/js/bootstrap.min.js','assets/js/material.min'], /* main js*/
               
               'Assets/bundles/vendorscripts.bundle.js': ['assets/js/wow.min.js','assets/js/jquery.magnific-popup.min.js','assets/js/jquery.scrollTo-min.js'], /* coman js*/
                             
                           
              }
            }
        }
    });
    grunt.loadNpmTasks("grunt-sass");
    grunt.loadNpmTasks('grunt-contrib-uglify');
    
    grunt.registerTask("buildcss", ["sass"]);
    grunt.registerTask("buildjs", ["uglify"]);
};

