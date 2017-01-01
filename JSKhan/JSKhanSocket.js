const JSKhanSocket = {
		receber: function(name, call){
			for(var i = 0; i < 100000; i++){
				setTimeout(function(){
					$.ajax({
						url: "JSKhan/JSKhanSocket.php",
						method: 'post',
						data: {nome: name, tp: 'receber'},
						success: function(re){
								var ret = JSON.parse(re);
								if(ret[0] != 'naoexiste'){
									call(ret);
								}else{
									console.log('Nao Existe o Socket');
								}
						}
	 		 		});
				}, 5000 * i);
			}
		},
		enviar: function(name, dat, cbk){
			for(var i = 0; i == 0; i++){
				setTimeout(function(){
					$.ajax({
						url: "JSKhan/JSKhanSocket.php",
						method: 'post',
						data: {da: dat, s: name, tp: 'enviar'},
						success: function(r){
							if(typeof cbk == 'function') cbk(r);
						}
	 		 		});
				}, 1000 * i);
			}
		}
	};