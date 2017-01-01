<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<input type="text" id="enviar">
	<div id="nomes"></div>
	<div id="retornado">
		
	</div>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="JSKhan/JSKhanSocket.js"></script>
	<script>

	
	JSKhanSocket.receber('canal do paulo', function(data){
		$.each(data, function(index, value){
			var div = $("#nomes").html();
			if(div.indexOf(value) == -1){
				$("#nomes").append("<h3>nome " + index + " : " + value + "</h3><br/>");
			}
		});
	});

	$("input[type='text']").on('change', function(){
		if($(this).val().length > 3){
			JSKhanSocket.enviar('canal do paulo', [$(this).val()], function(cb){
				var dtd = (cb == 'sucesso') ? 'Enviado Ao Socket Com Sucesso' : 'Erro ao Enviar Ao Socket';
				$("#retornado").html(dtd);
			});
		}
	});

	</script>
</body>
</html>