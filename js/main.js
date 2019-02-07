jQuery(document).on('submit','#formlg',function(event){
	event.preventDefault();
	
	jQuery.ajax({
		url: 'Main_app/login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('.botonlg').val('Validando...');
		}
	})
	.done(function(respuesta){
		console.log(respuesta);
		if(!respuesta.error){
			if(respuesta.tipo == 1){
				location.href = 'main_app/';
				
			}else if(respuesta.tipo == '2'){
				location.href = 'main_app/';

			}
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error'.slideDown(slow));
			},3000);
		$('.botonlg').val('Iniciar Sesión');		
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function() {
		console.log("complete");
	});
});