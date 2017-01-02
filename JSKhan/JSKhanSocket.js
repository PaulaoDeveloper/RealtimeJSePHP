const JSKhanSocket = {
		verifica: function(ob, val, func){
			var obj = $(ob).html();
			if(obj.indexOf(val) == -1){
				func();
			}
		},
		receber: function(name, call){
			for(var i = 0; i < 14400; i++){
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
				}, 2000 * i);
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