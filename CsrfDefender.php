<?php 

class CsrfDefender
{
	public function __construct()
	{
		//si la session n'a pas déjà été démarrée, on la démarre
		if (session_status() !== PHP_SESSION_ACTIVE){
			session_start();
		}
	}

	//affiche le champs de formulaire contenant le token
	public function showCsrfTokenField()
	{
		$token = $this->generateNewToken();
		echo '<input type="hidden" name="csrf_token" value="' . $token . '">';
	}

	//s'assure que le token reçu depuis le formulaire est valide
	//retourne true si valide, false sinon
	public function validateReceivedToken()
	{
		if(empty($_POST['csrf_token'])){
			return false;
		}
		if($_POST['csrf_token'] === $this->getTokenFromSession()){
			return true;
		}
		return false;
	}

	//génère un nouveau token et le retourne
	// random_bytes(32) en PHP7
	private function generateNewToken()
	{
		$token = bin2hex(random_bytes(32));
		$this->saveTokenInSession($token);
		return $token;
	}

	//récupère le token stocké dans la session et le retourne
	//retourne null si aucun token n'était présent
	private function getTokenFromSession()
	{
		if (!empty($_SESSION['csrf_token'])){
			return $_SESSION['csrf_token'];
		}

		return null;
	}

	//stocke le token dans la session
	private function saveTokenInSession($token)
	{
		$_SESSION['csrf_token'] = $token;
	}
}