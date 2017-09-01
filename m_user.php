<?php
include_once 'koneksi.php';
session_start();
class m_user
{
	private $koneksi;
	 function __construct(){
		$this->koneksi= new koneksi();
	}
	function cekLogin($username, $password){
		$sql="SELECT l.namaLevel from user u join level l on u.idLevel=l.idLevel where u.username='{$username}' and u.password='{$password}';";
		if ($jalan=mysql_fetch_array($this->koneksi->executeQuery($sql))) {
		 $result [0] = true;
            $result [1] = $jalan[0];
         
		
	}
}}
?>