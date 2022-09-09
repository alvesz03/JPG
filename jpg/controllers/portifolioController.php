<?php
class portifolioController extends controller{
	public function index(){
		$dados = array();
		$this->loadTemplate('portifolio', $dados);
	}
}

?>