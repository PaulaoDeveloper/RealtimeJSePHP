<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<style>
		*{padding:0;margin:0}body{width:100%;height:100vh;background:#1abc9c;display:flex;justify-content:center;align-items:center;flex-direction:column}.container{width:50%;height:100vh;display:none}.container input{width:48.5%;height:45px;border:none;position:fixed;top:560px;padding-left:20px;font-size:20px;font-weight:700}#msgs{width:100%;height:550px;display:flex;justify-content:flex-end;align-items:center;background:#e74c3c;margin-bottom:70px;border-top-left-radius:5px;border-top-right-radius:5px}#msgs-body{height:90%;width:100%;overflow-y:scroll;text-align:center;padding-bottom:20px;padding-top:20px;margin-bottom:5px}#msgs-body-m{width:90%;height:60px;background:#2980b9;border-radius:5px;margin-top:10px;margin-left:20px;padding-left:20px;font-size:17px;display:flex;justify-content:flex-start;align-items:center;text-transform:capitalize;font-weight:700;font-family:'Helvetica',sans-serif}#msgs-body-m img{width:60px;height:100%;border-radius:100%;margin-right:30px}@media (max-width: 425px){#msgs{height:80vh}.container input{position:fixed;top:80vh;width:100%}#bottom{position:fixed;top:92vh}.container{width:100%}#msgs-body{height:80%}#msgs-body-m{width:85%}}.container-login{width:50%;height:100vh;background:#8e44ad;display:flex;justify-content:center;align-items:center;flex-direction:column}#login-input{width:65%;height:60px;padding-left:15px;border:none;font-size:20px}.icons-escolhe,.icons-escolhe>div{width:65%;height:20vh;display:flex;justify-content:center;align-items:center}.icons-escolhe>div>img{width:33.33%;height:50%;margin-top:20px;border-radius:100%}.container-login button{width:65%;height:65px;border:none;font-size:20px;margin-top:20px}
	</style>
</head>
<body>

  <div class="container-login">
  	<input type="text" id="login-input">
  	<div class="icons-escolhe">
  	 <div class="mulheres">
  		<img src="http://image.flaticon.com/icons/svg/163/163809.svg" alt="">
  		<img src="http://image.flaticon.com/icons/svg/163/163847.svg" alt="">
  		<img src="http://image.flaticon.com/icons/svg/163/163813.svg" alt="">
  	</div>
  	<div class="homens">
  		<img src="http://image.flaticon.com/icons/svg/163/163801.svg" alt="">
  		<img src="http://image.flaticon.com/icons/svg/163/163814.svg" alt="">
  		<img src="http://image.flaticon.com/icons/svg/163/163812.svg" alt="">
  	</div>
  	</div>
  	<button id="logar">Logar</button>
  </div>

  <div class="container">
	<div id="msgs">
		<div id="msgs-body">
			
		</div>
	</div>
<input type="text" name="">
<div style="width: 100%;height: 45px;background:#2980b9;border-radius:3px;display:flex;justify-content:center;align-items:center;font-size:1.1em;font-family: 'Roboto', sans-serif;color:#fff;cursor:pointer;/* width: inherit; */font-weight: bold;margin-top: -10px" id="bottom">Enviar</div>
</div>
	<script src="JSKhan/jquery.js"></script>
	<script type="text/javascript" src="JSKhan/JSKhanSocket.min.js"></script>
	<script>
	var nome, img;
	$('body>div.container-login>div>div>img').on('click', function(){
		if(typeof img == 'undefined'){
			img = $(this).attr('src');
			$(this).css('border','3px solid blue');
		}
	});
	$('#logar').on('click', function(){
		if($('.container-login>input').val().length > 2){
			nome = $('body>div.container-login>input').val();
			$('body>div.container-login').hide();
			$('body>div.container').show();
		}
	});
	/*var nome = prompt('Qual e seu nome');
	if(nome.length <= 2){
		nome = prompt('Opaa o nome é Ogrigatorio Amigo !');
	}*/
	var socket = JSKhanSocket;
	socket.receber('canal do pedro', function(data){
		var d = data['canal do pedro'];
		$.each(d, function(index, value){
			socket.verifica('#msgs-body', value[1], function(){
				$("#msgs-body").append('<div id="msgs-body-m"><img src="'+value[2]+'"/>'+ value[0] +' : '+ value[1] +'</div>');
				$("#msgs-body").animate({scrollTop: $('#msgs-body')[0].scrollHeight}, 500);
			});
		});
	});
	$("#bottom").on('click', function(){
		if($(".container>input").val().length > 3){
			var antiFlood = $("#msgs-body").html();
			if(antiFlood.indexOf($(".container>input").val()) == -1){
				socket.enviar('canal do pedro', [nome,$(".container>input").val(), img], function(cb){
				var dtd = (cb == 'sucesso') ? 'Enviado Ao Socket Com Sucesso' : 'Erro ao Enviar Ao Socket';
				console.log(dtd);
				$(".container>input").val('');
				});}else{
				$(".container>input").val('');
				console.log("Anti Flood");
				$(".container>input").attr('placeholder','Opaa , Sem Flood !');}}});
	</script>
</body>
</html>