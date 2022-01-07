<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('/estilos/Estilos_Registrarse.css') }}">
</head>
<body>   
    <!--Pnatlla de registro-->
    <form class="form">
        <h2>Registrate</h2>
        <p type="Nombre:"><input placeholder="Nombre Completo"></input></p>
        <p type="Correo Electronico:"><input placeholder="ejemplo@hotmail.com"></input></p>
        <p type="Telefono:"><input placeholder="6361234567"></input></p>
        <p type="Direccion:"><input placeholder=""></input></p>
        <p type="Contraseña">
            <input type="password" size="5" maxlength="15">
        </p>
        <button id="Registro">Registar</button>
        <a href="../index.html">
            <label id="Volver">Volver</label>
        </a>
        <div>
          <!--<span class="fa fa-phone"></span>001 1023 567-->
          <span class="fa fa-envelope-o"></span> www.NorteLogistica.com
        </div>
    </form>
    
</body>
</html>