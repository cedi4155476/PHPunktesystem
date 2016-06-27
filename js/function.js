$(function() {
	$( "#formular" ).submit(function( event ) {

		event.preventDefault();
		
		$.post( "ajax/table.php", $('#formular').serialize())
			.done(function( data ) {
			$('#content').html(data);
			$('#button').text('Reset');
		});
	});
});