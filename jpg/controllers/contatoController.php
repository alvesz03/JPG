<?php
class contatoController extends controller{

    public function index(){
		$dados = array();
		$this->loadTemplate('contato', $dados);
	}

	public function add(){
		$dados = array ();
		if(!empty($_POST['txt_nome'])){
			$nome = strtoupper($_POST['txt_nome']);
			$email = $_POST['txt_email'];
			$mensagem = $_POST['txt_mensagem'];

			$p = new Contato();
			$p->add($nome, $email, $mensagem);
			header('Location: '.BASE_URL. 'contato');
			 $this->loadtemplate('contato', $dados);
		}
	}
}

?>