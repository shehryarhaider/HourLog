$(document).ready(function(){
	
	$('#download').click(function(e){

		$.generateFile({
			filename	: 'custom.css',
			content		: $('textarea').val(),
			script		: 'download.php'
		});
		e.preventDefault();
	});
	
	$('#downloadPage').click(function(e){

		$.generateFile({
			filename	: 'page.php',
			content		: $('html').php(),
			script		: 'download.php'
		});
		e.preventDefault();
	});
	
});