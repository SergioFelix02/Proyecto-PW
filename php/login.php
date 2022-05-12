<?php
    $error = false;
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    if(!$error)
    {
        registrar($usuario,$password);
    }

    function registrar($usuario,$password)
	{
		//permite incluir el codigo de otros programas
		include("connection.php");

		//con esta función conectamos a la base de datos
		$con = mysqli_connect($server,$user,$pass,$bd);

		if(!$con)
		{
			//mysqli_connect_error regresa el mensaje de error.
			echo "Error en la conexión a la base datos: " . mysqli_connect_error(); 
		}
		else
		{
			//sentencia que se ejecutará en la base de datos.
			$res = mysqli_query($con, "insert into usuarios (usuario,password) values ('$usuario', '$password')");

			if(!$res)
			{
				//mysqli_error regresa una cadena con el error.
				echo "Error : " . mysqli_error($con);
			}
			else
			{
				echo "Registro Exitoso!";
			}
		}
	}
?>
