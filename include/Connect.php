<?php
	class connect
	{
		private $_db;
		
		const DSN = 'mysql:host=localhost;dbname=usbye486_AppliPari';
		const USER = 'usbye486_Pari';
		const PSW = 'minisylk';
				
		//***********************************************
		//cconstructeur de la classe
		//***********************************************
		public function __construct() 
      		{
        	   // Connection au serveur
				try {
					// Options de connection encodage UFT8
					$options = array(
						PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
						PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
						PDO::ATTR_PERSISTENT => true 
					);
				$this->db = new PDO( self::DSN, self::USER, self::PSW, $options );
				} catch ( Exception $e ) {
					echo "Connection à MySQL impossible : ", $e->getMessage();die();
				}
			}
		
		public function getPDO() { return $this->db; }
		
		//***********************************************
		//fonction qui permet la fermeture d'une base
		//***********************************************
		private function deconnexion()
		{
			mysql_close($this->id);
			
		}
		
	}
?>