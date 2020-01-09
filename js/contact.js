
$( "#enviar" ).click(function() {

// Get the form.
var form = $('#contact-form');

// Get the messages div.
var formMessages = $('.form-message');

// Set up an event listener for the contact form.
$(form).submit(function(e) {
	// Stop the browser from submitting the form.
	e.preventDefault();


	//cubrimos el formulario para que cargue el envio de correo
	function quitarLoader() {
		$("#cover").fadeOut(500);
	}

	$("#cover").fadeIn(500);
	setTimeout(quitarLoader, 3000);

	// Serialize the form data.
	var formData = $(form).serialize();

	// Submit the form using AJAX.
	$.ajax({
		type: 'POST',
		url: $(form).attr('action'),
		data: formData
	})
	.done(function(response) {
		// Make sure that the formMessages div has the 'success' class.
		$(formMessages).removeClass('error');
		$(formMessages).addClass('success');
		
		
		// Set the message text.
		$(formMessages).text(response);
		$("#form-message-response").css("font-weight","bold");
		$("#form-message-response").css("color", "green");

		// Clear the form.
		$('#contact-form input,#contact-form textarea').val('');
	})
	.fail(function(data) {
		// Make sure that the formMessages div has the 'error' class.
		$(formMessages).removeClass('success');
		$(formMessages).addClass('error');
		
		$("#form-message-response").css("font-weight","bold");
		$("#form-message-response").css("color", "red");

		// Set the message text.
		if (data.responseText !== ''){
			console.log('pase por el if del fail');
			$(formMessages).text(data.responseText);
	
			$("#form-message-response").css("font-weight","bold");
			$("#form-message-response").css("color", "red");
		} else {
			$(formMessages).text('Oops! ha ocurrido un error y no se ha podido enviar, refresca el navegador e intentalo nuevamente.');
		}
	});
});


});

