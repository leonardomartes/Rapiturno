<?php
	class usuario{
		public function add($id, $nombre, $email, $pass){
			$sql ="INSERT INTO usuario (id, nombre, email, pass) ".
				  "VALUES ('$id', '$nombre', '$email', '$pass')";
			$result = mysql_query($sql)or die(mysql_error());
		}
		public function delete ($id){
			$sql ="DELETE FROM persona WHERE id ='$id'";
			$result = mysql_query($sql)or die(mysql_error());
		}
		public function update($id,$nombre,$sexo){
			$sql = "UPDATE persona SET nombre = '$nombre', sexo='$sexo'".
				   "WHERE id='$id'";
			$result = mysql_query($sql)or die(mysql_error());
		}
		public function search($id){
			$sql = "SELECT nombre, sexo FROM persona WHERE id='$id'";
			$result = mysql_query($sql)or die(mysql_error());
			$fila = mysql_fetch_row($result);
			return($fila);
		}
		public function lis(){
			$sql = "SELECT * FROM persona";
			$result = mysql_query($sql)or die(mysql_error());
			$arr=array();
			while ($fila =  mysql_fetch_row($result)){
				$arr[]=$fila;
			}
			return($arr);
		}
	}
?>