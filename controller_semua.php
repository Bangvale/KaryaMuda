<?php
include_once 'koneksi.php';

class controller_semua{
	private $auth;
	function __construct(){
		$this->auth= new session();
	}

	function login(){
	if (isset($_GET['auth'])) {
		if ($_GET['auth'] == 'login') {
        $auth->login();
    }}
	
    }
}
$a = new controller_semua();
$a->login();
?>