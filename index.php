
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <style>
    #msgs-body-m,.container input{padding-left:20px;font-size:17px}#userm,.gerado{text-align:center}*{padding:0;margin:0}body{width:100%;height:100vh;background:#2c3e50;display:flex;justify-content:center;align-items:center;flex-direction:column}.container{width:50%;height:100vh;display:none}.container input{width:48.5%;height:45px;border:none;position:fixed;top:560px}#msgs{width:100%;height:550px;display:flex;justify-content:flex-end;align-items:center;background:#eee;margin-bottom:70px}#msgs-body{height:90%;width:100%;overflow-y:scroll;padding-bottom:20px;padding-top:20px;margin-bottom:5px;z-index:1}#msgs-body-m{width:90%;height:auto;background:teal;color:#fff;border-radius:5px;margin-top:10px;margin-left:20px;display:flex;justify-content:flex-start;align-items:center;font-weight:700;font-family:Helvetica,sans-serif;overflow-x:hidden}#msgs-body-m img{width:60px;height:100%;border-radius:100%;margin-right:30px;margin-left:30px;padding-top:15px;z-index:1}h4{padding-bottom:15px}@media (max-width:425px){#msgs{height:80vh}.container input{position:fixed;top:80.5vh;width:100%}#bottom{position:fixed;top:92vh}.container{width:100%}#msgs-body{height:80%}#msgs-body-m{width:85%}}.container-login{width:50%;height:100vh;background:#8e44ad;display:flex;justify-content:center;align-items:center;flex-direction:column}#login-input{width:65%;height:60px;padding-left:15px;border:none;font-size:20px}.icons-escolhe,.icons-escolhe>div{width:65%;height:20vh;display:flex;justify-content:center;align-items:center}.icons-escolhe>div>img{width:28%;height:50%;margin-top:20px;border-radius:100%;border:3px solid transparent}.container-login button{width:65%;height:65px;border:none;font-size:20px;margin-top:20px}@media (max-width:425px){.container-login{width:100%}#bugou{position:absolute;top:10px}#msgs-body{margin-top:45px}}.gerado{padding-left:0;width:63%!important;background:#2c3e50;color:#ecf0f1;border-radius:3px}#emojis-all,#menu-bar-1{background:#2980b9;position:absolute}button{cursor:pointer}input{cursor:text}#temp{width:100%;font-size:12px!important;height:auto;text-align:right;margin-top:15px;font-weight:700}#mensa-gem{max-width:80%;width:80%;height:auto;margin-top:20px;padding:15px;font-size:17px!important;font-weight:400!important;word-wrap: break-word;}#bugou{width:60px;height:60px;position:absolute;left:150px;cursor:pointer;display:none}#menu-bar-1{width:80px;height:99vh;left:18.8vw;top:0;display:flex;justify-content:center;align-items:center;flex-direction:column}#emojis-all{width:50%;height:30vh;z-index:3;display:none;top:53vh;flex-direction:column}#layer-1,#layer-2{width:100%;height:50%;display:flex;align-items:center;justify-content:center}#layer-1>div,#layer-2>div{width:10%;height:100%;display:flex;align-items:center;justify-content:center;font-size:x-large;cursor:pointer}@media (max-width:450px){#menu-bar-1 div,#menu-bar-1 img{width:20%!important;height:50%!important}#menu-bar-1{width:100%;position:absolute;z-index:3;height:50px;left:0;display:flex;justify-content:space-around;flex-direction:row}#menu-bar-1 img{margin-top:0!important;display:flex;justify-content:center;align-items:center}#menu-bar-1 div{font-size:x-large!important;justify-content:center;align-items:center;line-height:50%;line-height:230%;text-align:center}#gerar,.gerado{display:none}#logar{width:80%;height:60px;font-size:17px}.icons-escolhe{width:100%;margin-top:10px}#login-input{width:80%}#emojis-all{width:100%;top:50vh}}#user-online-body{width:150px;height:99vh;position:absolute;left:75.5vw;background:#1abc9c;top:0;}#ons{width: 100%;height: 99vh;}#ons-us{height:auto;}#ons-u{height:75px;width:100%;display: flex;justify-content: center;align-items: center;flex-direction: column;margin-top:20px;text-transform: capitalize;font-size: 17px;font-family: 'Helvetica';color:#fff;}#ons-u img{width:40%;height: 65px;border-radius: 100%}#ons-btn{width:100%;height:50px;box-shadow: 0px 1px 2px black;justify-content:center;align-items:center;background:#16a085;display:none;position:absolute;font-size:17px;font-weight:bold;color:#fff;font-family: 'Helvetica'}@media (max-width: 420px){#ons-btn{display:flex;z-index: 3;top:50px;}#ons-us>div:nth-child(1){display:none !important}#user-online-body{position:absolute;z-index:4 !important;width: 100vw !important;left: 0;height: 60vh !important;top:100px;display:none}#ons{height: 60vh !important;overflow-y:scroll}}
  </style>
</head>
<body>
  <script type="text/javascript">if(location.protocol == "https:"){ window.location.href = "http://pedroh.000webhostapp.com/";}</script>
  <img src="http://image.flaticon.com/icons/svg/179/179540.svg" id="bugou"/>
  <audio controls style="display:none">
  <source src="https://pedroh.000webhostapp.com/src/toque.mp3" type="audio/mp3">
  </audio>

  <div id="menu-bar-1"> <div id="emoji" style="width:55%;height:30px;font-size:xx-large;margin-bottom: 30px;cursor:pointer" class="desativado">😃</div><img src="http://image.flaticon.com/icons/svg/149/149302.svg" style="width:50%;height: 40px;cursor: pointer;" id="som" class="ativado"> <img src="http://image.flaticon.com/icons/svg/54/54814.svg" alt="" id="sair" style="width:40%;height: 30px;cursor: pointer;margin-top:20px"> </div>
  <div id="ons-btn">Usuarios On</div>
  <div class="container-login">
    <input type="text" id="login-input" placeholder="Nickname">
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

  <div class="container" style="z-index: 1">
  <div id="msgs">

  <div id="emojis-all"> <div id="layer-1"> <div id="emo">😀</div><div id="emo">😃</div><div id="emo">😄</div><div id="emo">😁</div><div id="emo">😆</div><div id="emo">😅</div><div id="emo">😂</div><div id="emo">🤣</div><div id="emo">😊</div><div id="emo">😎</div></div><div id="layer-2"> <div id="emo">😱</div><div id="emo">💩</div><div id="emo">😻</div><div id="emo">👿</div><div id="emo">😹</div><div id="emo">🎃</div><div id="emo">🙌</div><div id="emo">🤞</div><div id="emo">👽</div><div id="emo">💪</div></div></div>

  <div id="msgs-body">
      
  </div>
  </div>
<input type="text" name="" placeholder="Envie sua mensagem">
<div style="width: 100%;height: 45px;background:#2980b9;border-radius:3px;display:flex;justify-content:center;align-items:center;font-size:1.1em;font-family: 'Roboto', sans-serif;color:#fff;cursor:pointer;/* width: inherit; */font-weight: bold;margin-top: -10px" id="bottom">Enviar</div>
</div>

<div id="user-online-body">
  <div id="ons">
    <div id="ons-us">
      <div style="width:100%;height:70px;background:#16a085;display:flex;color:#ecf0f1;justify-content:center;align-items:center;font-size:30px;font-weight:bold;box-shadow:0px 1px 3px #34495e">Ons</div>
    </div>
  </div>
</div>

  <script src="JSKhan/jquery.js"></script>
  <script type="text/javascript" src="JSKhan/JSKhanSocket.min.js"></script>
  <script type="text/javascript" src="src/chat.js"></script>
</body>
</html>
