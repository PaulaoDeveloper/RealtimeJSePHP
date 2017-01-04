# RealtimeJS with PHP V1  ![alt text](http://media.copernica.com/logos/phpjs-logo.svg "Logo RealtimeJS")
__________________________________________________________
### Demo:  [Site Demo](http://pedroh.000webhostapp.com/)
__________________________________________________________

  1. Baixe o [Zip](https://codeload.github.com/PauloSergioRomaoJunior/RealtimeJSePHP/zip/master) Do Projeto
  2. Extraia o Arquivo Zip Sua Hospedagem
   * Xampp: HTDOCS
   * Wamp: WWW
   
__________________________________________________________

Sempre incluir o arquivo : **JSKhan/JSKhanSocket.min.js**

__________________________________________________________
## Page HTML Example
```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page Example</title>
</head>
<body>
     <script src="JSKhan/jquery.min.js" type="text/javascript"></script>
     <script src="JSKhan/JSKhanSocket.min.js" type="text/javascript"></script>
</body>
</html>
```
__________________________________________________________
## Page JSKhanSocket.min.js Example
```javascript
// O NOME DA VAR SEMPRE TEM QUE SER JSKhanSocket
      var socket = JSKhanSocket;
      
      socket.enviar('nome do socket', dados , function(retorno){
                                             funçao de callback se der certo retorna a mensagem sucesso
      });
      
      socket.receber('nome do socket', function(data){
          var d = data['nome do socket'];
          $.each(d, function(index,value){
             retorna valores do socket em while
             socket.verifica('#id aonde sera inserido os dados para nao repetir', valor pra nao repetir, function(){
                                                                                                        funçao callback para nao repetir os dados                                                                                
             });
          }
      });
```
__________________________________________________________

## Contato
__________________________________________________________
[Facebook](http://facebook.com/PauloRodriguesYT) | [Google Plus](https://plus.google.com/108514517889295797166) | [WhatsApp Grupo](https://chat.whatsapp.com/0BVQ8R1AjeRA056eKKU1ZF)
------------ | ------------- | -------------

__________________________________________________________
