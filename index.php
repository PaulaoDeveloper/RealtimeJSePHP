<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<style>
		*{padding:0;margin:0}body{width:100%;height:100vh;background:#1abc9c;display:flex;justify-content:center;align-items:center;flex-direction:column}.container{width:50%;height:100vh;display:none}.container input{width:48.5%;height:45px;border:none;position:fixed;top:560px;padding-left:20px;font-size:17px;}#msgs{width:100%;height:550px;display:flex;justify-content:flex-end;align-items:center;background:#eee;margin-bottom:70px;}#msgs-body{height:90%;width:100%;overflow-y:scroll;padding-bottom:20px;padding-top:20px;margin-bottom:5px}#msgs-body-m{width:90%;height:auto;background:#008080;color:#fff;border-radius:5px;margin-top:10px;margin-left:20px;padding-left:20px;font-size:17px;display:flex;justify-content:flex-start;align-items:center;font-weight:700;font-family:'Helvetica',sans-serif;overflow-x:hidden}#msgs-body-m img{width:60px;height:100%;border-radius:100%;margin-right:30px;margin-left: 30px;padding-top:15px;}h4{padding-bottom:15px;}@media (max-width: 425px){#msgs{height:80vh}.container input{position:fixed;top:80.5vh;width:100%}#bottom{position:fixed;top:92vh}.container{width:100%}#msgs-body{height:80%}#msgs-body-m{width:85%}}.container-login{width:50%;height:100vh;background:#8e44ad;display:flex;justify-content:center;align-items:center;flex-direction:column}#login-input{width:65%;height:60px;padding-left:15px;border:none;font-size:20px}.icons-escolhe,.icons-escolhe>div{width:65%;height:20vh;display:flex;justify-content:center;align-items:center}.icons-escolhe>div>img{width:33.33%;height:50%;margin-top:20px;border-radius:100%}.container-login button{width:65%;height:65px;border:none;font-size:20px;margin-top:20px}@media (max-width: 425px){.container-login{width: 100%}#bugou{position:absolute;top:10px;}#msgs-body{margin-top:45px}}.gerado{padding-left:0;text-align:center;width:63% !important;background:#2c3e50;color:#ecf0f1;border-radius:3px}button{cursor:pointer}input{cursor:text}#temp{width:100%;font-size:12px !important;height:auto;text-align:right;margin-top:15px;font-weight:bold}#mensa-gem{width:80%;height: auto;margin-top:20px;padding:15px;font-size:17px !important;font-weight: normal !important;}#userm{text-align:center;}#bugou{width:60px;height:60px;position:absolute;left:150px;cursor:pointer;display:none}
	</style>
</head>
<body>
  <img src="http://image.flaticon.com/icons/svg/179/179540.svg" id="bugou"/>
  <audio controls style="display:none">
	<source src="https://pedroh.000webhostapp.com/src/toque.mp3" type="audio/mp3">
</audio>
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
  	<button id="logar">Logar</button><br/>
  	<button id="gerar" style="background:#2980b9;color:#ecf0f1">Gerar Canal</button><br/>
  	<input type="text" id="login-input" class="gerado" style="display:none" disabled>
  </div>

  <div class="container">
	<div id="msgs">
		<div id="msgs-body">
			
		</div>
	</div>
<input type="text" name="" placeholder="Envie sua mensagem">
<div style="width: 100%;height: 45px;background:#2980b9;border-radius:3px;display:flex;justify-content:center;align-items:center;font-size:1.1em;font-family: 'Roboto', sans-serif;color:#fff;cursor:pointer;/* width: inherit; */font-weight: bold;margin-top: -10px" id="bottom">Enviar</div>
</div>
	<script src="JSKhan/jquery.js"></script>
	<script type="text/javascript" src="JSKhan/JSKhanSocket.min.js"></script>
	<script type="text/javascript" src="src/chat.min.js"></script>
</body>
</html>
