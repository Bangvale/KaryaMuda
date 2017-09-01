<?php
include_once 'koneksi.php';
include_once 'm_user.php';
session_start();
class session{
	private $kon,$user;
	function __construct(){
		$this->kon=new koneksi();
		$this->user=new m_user();
	}
	function login(){
		$data=$this->user->cekLogin($_POST['username'],$_POST['password']);
if ($data[0]==true) {
	if ($data[1]=='komunitas') {
	 header('location: komunitas_relawan.html');
	 echo "komunitas";
	}
	else if ($data[1]=='') {

	}
	# code...
}
	}
}
?>
