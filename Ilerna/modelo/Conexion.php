<?php

class Conexion
{
	private $host;
	private $db;
	private $user;
	private $password;
	private $charset;	
	
  
	
	public function __construct(){		
	    $this->host='localhost';
		$this->db='ilerna';
		$this->user='root';
		$this->password='';
		$this->charset="utf8";
}
	
	
  	function connect(){
		try{				
			$this->conexion_db=new PDO('mysql:host='.$this->host.';dbname='.$this->db,$this->user,$this->password);			
			$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		
			$this->conexion_db->exec("set character set ".$this->charset);
			return($this->conexion_db);
								
		}catch(PDOException $e){
			print_r("Error conexion: ".$e->getMessage());
		}
	}
}

?>