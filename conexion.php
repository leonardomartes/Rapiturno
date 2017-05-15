<?php
	class conexion{
		//Estableciendo conexion
		private $link;
		public function conectar(){
			$this->link = mysql_connect('localhost:8080','root','usbw')
			or die("No se pudo conectar".mysql_error()); 
			mysql_select_db('rapiturno')
			or die("No se pudo seleccionar la base de datos");
		}
		//Cerrando conexion
		public function desconectar(){
			mysql_close($this->link);
	    }
	}
?>