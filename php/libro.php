<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-libro.css">
    <script src="https://kit.fontawesome.com/d62b608a4d.js" crossorigin="anonymous"></script> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <title>Libro</title>
    <link rel="icon" href="../img/icon.ico">
</head>
<body>
    <header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu"><i class="fa-solid fa-bars"></i></i></label>
		</div>
			<div class="logo">
				
			</div>
			<nav class="menu">
				<a href="../index.html">Inicio</a>
				<a href="#">Carrito</a>
				<a href="../html/login.html">Iniciar Sesion</a>
			</nav>
		</div>
	</header>
	<div class="capa"></div>
	
	<!--Menu Lateral--------------->
	<input type="checkbox" id="btn-menu">
	<div class="container-menu">
		<div class="cont-menu">
			<nav>
				<a href="../index.html"><i class="fa-solid fa-house"></i> Inicio</a>
				<a href="../html/micuenta.html"><i class="fa-solid fa-user"></i> Mi Cuenta</a>
				<a href="../html/categorias.html"><i class="fa-solid fa-book"></i> Categorías</a>
				<a href="../php/favoritos.php"><i class="fa-solid fa-heart"></i> Mis Favoritos</a>
				<a href="../php/populares.php"><i class="fa-solid fa-fire"></i> Más Populares</a>
				<a href="../php/recienAgregados.php"><i class="fa-solid fa-bolt"></i> Recién Agregados</a>
				<a href="../php/mejorVotados.php"><i class="fa-solid fa-thumbs-up"></i> Mejor Votados</a>
				<a href="../php/comentados.php"><i class="fa-solid fa-comment"></i> Más comentados</a>
				<a href="../html/opciones.html"><i class="fa-solid fa-sliders"></i></i> Opciones</a>
			</nav>
			<label for="btn-menu"><i class="fa-solid fa-angles-left"></i></label>
		</div>
	</div>
	<br><br><br><br>

    <?php
      include("connection.php");
      $conexion = mysqli_connect($server,$user,$pass,$bd)or die(mysql_error);
      $contador = 0;
      $query = "select * from libros where id = 1";
      $resultado = $conexion->query($query);
      if($row = $resultado->fetch_assoc()){
        ?>
        <div class="book-block">
            <div class="div-foto">
                <img class="portada" src="<?php echo($row['foto']);?>"/>
            </div> 
            <div class="div-detalles">
                <i id="f1" class="fa-solid fa-heart favorite favoriteActive" style="font-size:20px"></i>
                <p style="cursor:pointer;font-weight:bold"> <?php echo "Puntuacion: " . $row['puntuacion'] . " "; ?><i class="fa-solid fa-star"></i> </p>
                <h4><?php echo $row['nombre']; ?></h4>
                <p style="cursor:pointer;font-weight:bold"> <?php echo $row['autor']; ?> </p>
                <h4><?php echo $row['categoria']; ?></h4>
            </div> 

        </div> 
      <?php
      }
      ?>

        <script>
          $(document).ready(function(){
             $( ".fa-heart" ).click(function() {
              if($(this).hasClass("favoriteActive")) {
                  $( this ).removeClass( "favoriteActive" );
                  $( this ).addClass( "favoriteInactive" );
                  alert("Eliminado de favoritos.");
              } else {
                  $( this ).removeClass( "favoriteInactive" );
                  $( this ).addClass( "favoriteActive" );
                  alert("Agregado a favoritos.");
              }
           });
       });
       </script>

    <footer>
		<div>
			<p>Copyright © 2022. Todos los derechos reservados</p>
			<p>Siguenos en nuestras redes
				<a href=""><img src="../img/facebook.png"></a>
				<a href=""><img src="../img/instagram.png"></a>
				<a href=""><img src="../img/twitter.png"></a>
			</p>
		</div>
	</footer>
</body>
</html>