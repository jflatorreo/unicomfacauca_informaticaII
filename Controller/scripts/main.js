$(document).ready(function(){
    
$("#formulario").on("submit", function(e){
	e.preventDefault();
	});

	
		$("#login-btn").on("click", function(e){
                
			e.preventDefault();
			var $form = $(this).closest("form");
				$messageWrapper = $form.find(".form-response");
				url = $form.attr("action");		
				console.log($messageWrapper);

			$messageWrapper.html("");

			$.ajax({
				url: url,
				data: $form.serialize(),
				method: "POST",
				success: function(response){
					switch(response){
						case "ingreso exitoso":
							//$messageWrapper.html(response);
							window.location = "View/calculadora.php";
							break;
						case "Debe especificar un username y password":
							$messageWrapper.html(response);
							break;

						case "Username no existente en la base de datos":
							$messageWrapper.html(response);
							break;

						case "Password incorrecto":
							$messageWrapper.html(response);
							break;
						case "Usuario no registrado":
							$messageWrapper.html(response);
							break;
						
						default:
							$messageWrapper.html("error--> "+response);			
					}
				}
			});
		});
	
    
    });