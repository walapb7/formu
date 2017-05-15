<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
<div>
<h2>Requisitos necesarios</h2>
<p>
Puesto: Ejecutiva de Medios. <br /><br />

Descripción del puesto: <br />
- Graduada de carreras de Economía, Administración de Empresas, Mercadeo o afines.<br />
- Experiencia mínima de 2 año.<br />
- Desarrollar y Ejecutar planes y compras de medios.<br />
- Capacidad de Análisis numérico.<br />
- Ágil en negociaciones con medios de comunicación.<br />
- Administrar las inversiones de los medios.<br />
- Atención a los medios de comunicación.<br />
- Desarrollo de planes y presentaciones.<br />
- Buen manejo de presentaciones a clientes (nuevos negocios). <br />
- Dar seguimiento continuo a sus planes. <br /><br />

Si cumplís estos requisitos, animate y aplicá.
</p>
<div id="textoContacto">

		<form id="formulario" name="formRegis" method="post" action="envio.php" >
       <h1>Formuario de Registro</h1>
        <input name="name" placeholder="Nombre completo" class="required" /><br />	    
       	  <input name="mail" placeholder="Correo" class="required" /><br />
 <input type="text" id="edad" name="edad" placeholder="Edad" maxlength="2">
	      <input type="text"  id="tel" name="tel" placeholder="Teléfono" maxlength="9" autocomplete="off"> <br />
	      <select class="form-control error" id="experiencia" name="experiencia">
	        <option value="0">Años de experiencia</option>
	        <option value="1 año">1</option>
	        <option value="2 años">2</option>
	        <option value="3 años">3</option>
	        <option value="4 años">4</option>
	        <option value="Más de 5 años">Más de 5 años</option>
          </select>
	      <br />

		  <textarea id="desc" placeholder="Breve descripción de lo que puede hacer" name="descrip"></textarea><br />
   		  <button class="boton" type="submit" id="boton" value="Enviar" >Enviar</button>
                           
		</form>
        
</div>
</div>
<footer>
	<p>Desarrollado por Wálmaro Antonio Pavón Bravo </p>
</footer>
<!-- Códigos de validación para el formulario -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/jquery.form.js"></script>
<!-- Script que llama a la validación del formulario -->
	<script>
		$(function(){
			$('#formulario').validate({
				submitHandler: function(form) {
				    $(form).ajaxSubmit({
					    url: 'envio.php',
					    success: function() {
					    	
						    
						    $('#formulario').hide();
						    $('#textoContacto').append("<p class='thanks'>Gracias por contactar con nosotros.</p>")
					    }
				    });
			    }
			});         
		});
	</script>
<!-- Fin códigos de validación del formulario -->
</body>
</html>