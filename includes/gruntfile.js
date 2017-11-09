module.exports = function(grunt) {
	require('jit-grunt') (grunt);
	grunt.initConfig({
		sass: {
			dist: {
				files: {
					'../css/style.css': '../sass/style.scss'
				}
			}
		},
		watch: {
			sass: {
				files: ['./../sass/*.scss'],
				tasks: ['sass']
			},
			php: {
				files: ['./../*.php']
			},
			html: {
				files: ['./..*.html']
			},
			javascript: {
				files: ['./../app.js']
			},
			options: {
				livereload: true,
				spawn: false
			}
		},
	});

		grunt.registerTask("live-reload", ['watch']);
}
	

