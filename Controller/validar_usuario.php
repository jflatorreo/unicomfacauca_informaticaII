<?php
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ALL);
require('../Model/db.php');
$db = new db();


if($_POST["username"] != "" && $_POST["password"] != "")
{

	$username = $_POST["username"];
	//$password = md5($_POST['password']);
	$password = $_POST['password'];
	$query='SELECT id, nombre_real, username, password, rol FROM Usuarios WHERE username=\''.$username.'\'';

	$result = $db->db->query($query);


	if($row = $result->fetch_array() ){
		if($row["password"] == $password){
			setcookie('k_username', $username , time()+ (365 * 24 * 60 * 60));
			$_SESSION["k_id"] = $row['id'];
			$_SESSION["k_username"] = $row['username'];

			$_SESSION["rol"]=$row['rol'];
			$_SESSION["nombre_real"] = $row['nombre_real'];

			echo 'ingreso exitoso';
		}else{
			die("Password incorrecto");
		}
	//}else{
	//	die("Usuario no registrado");
	//	}
	}else{
		die("Username no existente en la base de datos");
	}
	$result->free_result();
}else{
	die("Debe especificar un username y password");
}
$db->db->close();
?>
