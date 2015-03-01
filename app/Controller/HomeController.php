<?php
class HomeController extends AppController{

	public function beforeFilter(){
		return true;
   	}

	function index(){
		$this->layout = 'winners';
	}

	function requisicoes(){
		if($this->request->data['login']['acao'] == 'logar'){
			echo 'entrou aqui';
			echo $this->request->data['login']['login_email'];
		}else{
			echo 'ainda não';
			echo $this->request->data['login']['login_email'];
		}
	}

	function login() {
		$this->layout = 'login';
	}

	function tema(){
		$this->layout = 'winners';
	}

	function teste_arrays(){
		$produtos = array();

		for($cont = 0; $cont<9; $cont++){
			$array = array('Produtos' => array('nome' => 'produto'.$cont , 'id_produto' => $cont*2));
			array_push($produtos, $array);
		}
		print_r($produtos);

		foreach($produtos as $valor){
			echo 'Nome produto: '. $valor['Produtos']['nome'].'<br>';
			echo 'ID_Prod'.$valor['Produtos']['id_produto'].'<br>';
		}
	}
	
	function enviar_email() {
		$dados = $this->request->data('dados');


		// Check for empty fields
		if(empty($dados['name'])  		||
   			empty($dados['email']) 		||
   			empty($dados['message'])	||
   			!filter_var($dados['email'],FILTER_VALIDATE_EMAIL)){
				echo "No arguments Provided!";
				return false;
			   }	
	
		$name = $dados['name'];
		$email_address = $dados['email'];
		$message = $dados['message'];
	
		// Create the email and send the message
		$to = 'winnersdevelopers@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
		$email_subject = "Contato Winners Desenvolvimento";
		$email_body = "Muito Obrigado por nos contactar";
		$headers = "From: noreply@winnersdevelopers.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
		$headers .= "Reply-To: $email_address";	
		mail($to,$email_subject,$email_body,$headers);
		return true;			
	}
}
