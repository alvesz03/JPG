<?php
class Core{
	public function run(){
		$url = '/';
		//se existir o get url
		if(isset($_GET['url'])){
			$url .= $_GET['url'];
		}
		//inicio do tratamento da $url
		//Se o envio não estiver vazio e for diferente de '/'
		$params = array();
		if(!empty($url) && $url != '/'){
		//explode para separar os dados pela /
			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && !empty($url[0])){
				$currentAction = $url[0];
				array_shift($url);
			}else{
				$currentAction = 'index';
			}
			if(count($url) > 0){
				$params = $url;
			}
		}else{
			$currentController = 'homeController';
			$currentAction = 'index';
		}
		//verificar existencia do controller
if(!file_exists('controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)){
	$currentController = 'notfoundController';
	$currentAction = 'index';
}
		
		$c = new $currentController();
		call_user_func_array(array($c, $currentAction), $params);
	}
}

?>