<?php 

date_default_timezone_set('America/Sao_Paulo');

class Site {

	// CONST HOST = "127.0.0.1";
	// CONST USER = "root";
	// CONST PASS = "";
	// CONST DB   = "llamaaqu_master";

	CONST HOST = "mysql873.umbler.com:41890";
	CONST USER = "lucas1";
	CONST PASS = "lucas88006949";
	CONST DB   = "llamaaqu_master";


	public $con;
	private $url;


	public function __construct() {

		$this->conexao();
		$this->session();

	}


	protected function conexao() {


		$this->con = mysqli_connect(self::HOST, self::USER, self::PASS, self::DB);


		if (!$this->con) {header("location: sem_conexao.php");}

	}

	protected function session() {

		if (session_status() !== PHP_SESSION_ACTIVE) {
			
			session_start();

		}

		$this->url = $_SERVER["REQUEST_URI"];

		if (isset($_GET['tk'])){
			$token = $_GET['tk'];
		}


		// if (!isset($_SESSION['logado']) || $_SESSION['logado'] <> true) {

		// 	if ($this->url == "/login.php" || $this->url == "/cadastro.php" || $this->url == "/index.php" || $this->url == "/sobre.php" || $this->url == "/contato.php" || $this->url == "/send_email.php" || $this->url == "/reset_senha.php?tk=".$token) {

		// 	} else {

		// 		$_SESSION['logado'] = false;
		// 		header("location: /index.php");

		// 	}

		// } elseif (isset($_SESSION['logado']) and $_SESSION['logado'] == true) {

		// 	if ($this->url == "/login.php" || $this->url == "/cadastro.php") {

		// 		header("location: /perfil.php");

		// 	}

		// }

	}


}


?>
