<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		*{
			padding: 0;
			margin: 0;
		}
		body{
			width: 100%;
			height: 100vh;
			background: green;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}
		input{
			width: 50%;
			height: 70px;
			border: none;
			position: fixed;
			top: 592px;
			padding-left: 20px;
			font-size: 20px;
			font-weight: bold;
		}
		#msgs{
			width: 51.5%;
			height: 580px;
			background: red;
			margin-bottom: 70px;
		}
		#msgs-body{
			height: 100%;
			width: 100%;
			overflow-y: scroll;
			display: flex;
			align-items: center;
			padding-bottom: 20px;
			padding-top: 20px;
			flex-direction: column;
		}
		#msgs-body-m{
			width: 100%;
			height: 60px;
			background: blue;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<div id="msgs">
		<div id="msgs-body">
			
		</div>
	</div>
	<input type="text" id="enviar">

	<script src="JSKhan/jquery.js"></script>
	<script type="text/javascript" src="JSKhan/JSKhanSocket.min.js"></script>
	<script>

	var nome = prompt('Qual e seu nome');
	var socket = JSKhanSocket;

	socket.receber('canal do pedro', function(data){
		var d = data['canal do pedro'];
		$.each(d, function(index, value){

			socket.verifica('#msgs-body', value[1], function(){
				$("#msgs-body").append('<div id="msgs-body-m">'+ value[0] +' : '+ value[1] +'</div>');
			});

		});
	});

	$("input[type='text']").on('change', function(){
		if($(this).val().length > 3){
			socket.enviar('canal do pedro', [nome,$(this).val()], function(cb){
				var dtd = (cb == 'sucesso') ? 'Enviado Ao Socket Com Sucesso' : 'Erro ao Enviar Ao Socket';
				console.log(dtd);
			});
		}
	});
	</script>
</body>
</html>