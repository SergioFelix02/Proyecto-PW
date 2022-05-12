<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-favoritos.css">
    <script src="https://kit.fontawesome.com/d62b608a4d.js" crossorigin="anonymous"></script>    <!--Esto debe ir para los íconos-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="icon" href="../img/icon.ico">
  </head>
<body>
  <header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu"><i class="fa-solid fa-bars"></i></i></label>
		</div>
			<div class="logo">
				<h1></h1>
			</div>
			<nav class="menu">
				<a href="../index.html">Inicio</a>
				<a href="#">Carrito</a>
				<a href="../html/login.html">Iniciar Sesion</a>
			</nav>
		</div>
	</header>

  <div class="capa"></div>
  <input type="checkbox" id="btn-menu">
  <div class="container-menu">
    <div class="cont-menu">
      <nav>
        <a href="../index.html"><i class="fa-solid fa-house"></i> Inicio</a>
        <a href="../html/micuenta.html"><i class="fa-solid fa-user"></i> Mi Cuenta</a>
        <a href="../html/categorias.html"><i class="fa-solid fa-book"></i> Categorías</a>
        <a href="../html/favoritos.html"><i class="fa-solid fa-heart"></i> Mis Favoritos</a>
        <a href="../html/populares.html"><i class="fa-solid fa-fire"></i> Más Populares</a>
        <a href="../html/recienAgregados.html"><i class="fa-solid fa-clock"></i> Recién Agregados</a>
        <a href="../html/mejorVotados.html"><i class="fa-solid fa-thumbs-up"></i> Mejor Votados</a>
        <a href="../html/comentados.html"><i class="fa-solid fa-comment"></i> Más comentados</a>
        <a href="#"><i class="fa-solid fa-sliders"></i></i> Opciones</a>
      </nav>
      <label for="btn-menu"><i class="fa-solid fa-angles-left"></i></label>
    </div>
  </div>
  
  <br><br><br><br>
  <h2 style="text-align: center;"><i class="fa-solid fa-heart"></i> Mis favoritos</h2>
  <div class="row">  
  <?php
    include("conexion.php");
    $conexion = mysqli_connect($server,$user,$pass,$bd)or die(mysql_error);
    $contador = 0;
    $query = "select * from libros";
    $resultado = $conexion->query($query);
    while($row = $resultado->fetch_assoc()){
      if ($contador >= 5){
        $contador = 0;
        
        ?>   
        <div class="row">  
        <?php  
      }
      $contador += 1;
       ?>  
          <div class="book block">
              <i id="f1" class="fa-solid fa-heart favorite favoriteActive" style="font-size:20px"></i>
              <img class="portada" src="<?php echo($row['foto']);?>"/>
              <h4><?php echo $row['nombre']; ?></h4>
              <p style="cursor:pointer;font-weight:bold"> <?php echo $row['autor']; ?> </p>
          </div>    
          <h4><?php echo $contador; ?></h4>

    <?php
    }
    ?>
   </div>
      
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
  <div class="footer">
    <p>Copyright - Todos los derechos reservados</p>
    <p>Siguenos en nuestras redes</p>	
    <p>
      <a href="">Facebook</a>
      <a href="">Instagram</a>
      <a href="">Twitter</a>
    </p>
    </div>
</footer>
</body>
</html>
