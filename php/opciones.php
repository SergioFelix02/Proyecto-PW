<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-catalogos.css">
    <script src="https://kit.fontawesome.com/d62b608a4d.js" crossorigin="anonymous"></script> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <title>Opciones de la Cuenta</title>
    <link rel="icon" href="../img/icon.ico">
</head>
<body>

  <h2 style="text-align: center;"><i class="fa-solid fa-sliders"></i> Opciones de la Cuenta</h2>
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