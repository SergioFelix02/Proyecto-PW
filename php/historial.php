<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-catalogos.css">
    <script src="https://kit.fontawesome.com/d62b608a4d.js" crossorigin="anonymous"></script> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <title>Historial</title>
    <link rel="icon" href="../img/icon.ico">
</head>
<body>

  <h2 style="text-align: center;"><i class="fa-solid fa-clock-rotate-left"></i> Historial</h2>
    <div class="row">  
    <?php
      include("connection.php");
      $conexion = mysqli_connect($server,$user,$pass,$bd)or die(mysql_error);
      $contador = 0;
      $query = "select * from libros where leerdespues = 1";
      $resultado = $conexion->query($query);
      while($row = $resultado->fetch_assoc()){
        if ($contador >= 5){
          $contador = 0;
          ?>   
          </div>
          <div class="row">  
          <?php  
        }
        $contador += 1;
        ?>  
            <div class="book block">
                <i id="f1" class="fa-solid fa-heart favorite favoriteActive" style="font-size:20px"></i>
                <p style="cursor:pointer;font-weight:bold"> <?php echo "Puntuacion: " . $row['puntuacion'] . " "; ?><i class="fa-solid fa-star"></i> </p>
                <img class="portada" src="<?php echo($row['foto']);?>"/>
                <h4><?php echo $row['nombre']; ?></h4>
                <p style="cursor:pointer;font-weight:bold"> <?php echo $row['autor']; ?> </p>
                <h4><?php echo $row['categoria']; ?></h4>
            </div>   
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
</body>
</html>