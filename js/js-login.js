$(function(){
    let ocultar= true
    $("a").on('click',function(){
        if(ocultar){
            ocultar = false;
            $("#register").text("Inicia Sesion");
            $("h1").text("Registrarse");
            $("#text").text("Ya te registraste? ");
            $("#button").html('<input id="btn" type="submit" value="Registrarse" name="btn">');
            alert("Ingresa un usuario y contraseña para registrarte");
        }
        else{
            ocultar = true;
            $("#register").text("Registrate");
            $("h1").text("Iniciar Sesion");
            $("#text").text("No te has registrado? ");
            $("#button").html('<input id="btn" type="submit" value="Iniciar Sesion" name="btn">');
        }
    })
    $("#btn1").submit(function(){
        alert("Iniciando Sesion...");
    })
    $("#btn2").on('click', function(){
        alert("Registrado correctamente");
    })
})
