<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    <link rel="stylesheet" href="{{ asset('/estilos/Estilos_Ingresar.css') }}">
</head>
<body>
    <!--Pnatlla de registro-->
    

    <form class="form">
        <h2>Iniciar sesion</h2>
        <p type="Correo Electronico:"><input placeholder="ejemplo@hotmail.com"></input></p>
        <p type="Contraseña:"><input type="password"></input></p>
        <button id="Inicio">Ingresar</button>
        <a href="/principal">
            <label id="Volver">Volver</label>
        </a>
        <div>
            <label>wwww.NorteLogistica.com</label>
            <label id="registrarse">
                <a href="/registrarse">Registrate</a>
            </label>
        </div>
    </form>

   

</body>
</html>