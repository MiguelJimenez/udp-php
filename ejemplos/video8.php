<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>-jQuery básico</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<style>
		body 
		{
			background: grey;
		}
	</style>
	<script>
		$(document).ready(function(){
			$(".boton").on("click",function() {
				alert(1);
			});
		});
	</script>
</head>
<body>
	<button class="boton">Pulsa</button>
	
</body>
</html>