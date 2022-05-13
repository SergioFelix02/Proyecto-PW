<?php
    $error = false;
	$opt = "";
	if(isset($_POST['btn']) && !empty($_POST['btn'])){
		$opt = $_POST['btn'];
	}

	if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
		$usuario = $_POST['usuario'];
	}else{
		echo "Usuario vacio!<br>";
		$error = true;
	}

	if(isset($_POST['password']) && !empty($_POST['password'])){
		$password = $_POST['password'];
	}else{
		echo "Contraseña vacia!<br>";
		$error = true;
	}

    if(!$error){
		if($opt == 'Iniciar Sesion'){
			iniciarSesion($usuario,$password);
		}else{
			registrar($usuario,$password);
		}
    }

	echo "<p><a href='../html/login.html'> Haz click aquí para volver al formulario </a></p>";

    function registrar($usuario,$password){
		include("connection.php");
		$con = mysqli_connect($server,$user,$pass,$bd);
		if(!$con){
			echo "Error en la conexión a la base datos: " . mysqli_connect_error(); 
		}else{
			$res = mysqli_query($con, "insert into usuarios (usuario,password) values ('$usuario', '$password')");
			if(!$res){
				echo "Error : " . mysqli_error($con);
			}else{
				echo "Registro Exitoso!";
			}
		}
	}

	function iniciarSesion($usuario,$password){
		include("connection.php");
		$con = mysqli_connect($server,$user,$pass,$bd);
		if(!$con){
			echo "Error en la conexión a la base datos: " . mysqli_connect_error(); 
		}else{
			$conexion = mysqli_connect($server,$user,$pass,$bd)or die(mysql_error);
			$query = "select * from usuarios where usuario='$usuario' and password='$password'";
			$resultado = mysqli_query($conexion,$query);
			$filas = mysqli_num_rows($resultado);
			if($filas){
				echo 'Usuario y Clave Correctos!';
				header("Location: ../index.html");
			}else{
				echo 'Usuario o contraseña incorrectos.';
			}
			mysqli_free_result($resultado);
			mysqli_close($conexion);
		}
	}
?>
