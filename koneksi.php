

	<?php
class koneksi {
    private $db;
private $kon;

    function __construct()
    {
    	$this->kon=mysql_connect("localhost","root","");

        $this->db = mysql_select_db("karyamuda");
    }

    function executeQuery($sql){
        return mysql_query($sql);
    }
    function getData($sql){
        return mysql_fetch_array($sql);
    }
    function setComboBox(){

    }

    function closeConnection(){
        mysqli_close($this->db);
    }
}

	?>
