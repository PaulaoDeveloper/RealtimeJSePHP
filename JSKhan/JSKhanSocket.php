<?php  

	if(isset($_REQUEST['tp']) && $_REQUEST['tp'] == 'enviar' && file_exists('sockets/'.base64_encode($_REQUEST['s']).'.php')){
		$array = $_REQUEST['da'];
		$data = '';
		foreach ($array as $key => $value) {
			$data .= $value.' ';
		}
		file_put_contents('sockets/'.base64_encode($_REQUEST['s']).'.php',file_get_contents('sockets/'.base64_encode($_REQUEST['s']).'.php').$data);
		echo 'sucesso';
	} else if(isset($_REQUEST['tp']) && $_REQUEST['tp'] == 'enviar'){
		$array = $_REQUEST['da'];
		$data = '';
		foreach ($array as $key => $value) {
			$data .= $value.' ';
		}
		file_put_contents('sockets/'.base64_encode($_REQUEST['s']).'.php', $data);
		echo 'sucesso';
	}

	if(isset($_REQUEST['tp']) && $_REQUEST['tp'] == 'receber'){
		if(!file_exists('sockets/'.base64_encode($_REQUEST['nome']).'.php')){
			$array = array('naoexiste');
			echo json_encode($array);
		}else{
			$array = explode(' ', file_get_contents('sockets/'.base64_encode($_REQUEST['nome']).'.php'));
			unset($array[count($array) - 1]);
			echo json_encode($array);
		}
	}

?>