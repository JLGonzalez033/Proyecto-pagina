<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NorteLogistica</title>

    <!--Se importan los estilos de css-->
    <link rel="stylesheet" href="{{ asset('/estilos/Index.css') }}">

    <!--Se importan los estilos de bootstrap css-->
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">


</head>
<body>
<!--Se importan los script de bootstrap -->
<script src="{{ asset('/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!--Titulo-->
   
    <div id="header">
        <div class=cajatitulo >
        <img src="{{asset('/imagenes/nortelogisticapeque.png')}}" >
        </div>


        

        <div class="inicioS">
            <label id="iniciosesion">
             <a href="./html/Ingresar.html">Iniciar Sesion</a> 
            </label>
        </div>
        
    </div>

<!--Lista de cosas-->
    <div id="header2">    
                    
        <ul id="MenuBurger">
            <li>
                <a href="./html/SobreNosotros.html">Sobre Nosotros</a>
            </li>
             <li>
                <a>Tipos de servicios</a>
                <ul>
                    <li><a href="./html/Envios.html">Envios</a></li>
                </ul>
            </li>
            <li>
                <a href="./html/Rastreo.html">Rastreo</a>
            </li>
            <li>
                <a href="./html/Contactanos.html">Contactanos</a>
            </li>
            <li>
                <a href="./html/PuntosDeEntrega.html">Puntos de entrega</a>
            </li>
        </ul>
    </div>
<!--Todo el cuerpo de la pagina-->

    
    <div id="central">
         
        
        <!--Izquierda--> 
        <div id="nav"></div>

        <!--En medio--> 
        <div id="section">
            
            <div class=cajaArriba></div>

            <div class=cajaEnmedio>
            <div class="wrapper">
                    <a>Rastrea tu Paquete!</a>
                    <form action="">
                      <p>
                        <label for="">Numero de guia</label>
                        <input type="text">
                      </p>
                     <!--Codigo para subir archivos-->
                    <!--
                      <p class="input-file-wrapper">
                        <label for="upload">Upload your photo</label>
                        <input type="file" name="" id="upload">
                      </p>
                    -->
                      <p>
                            <label id="boton">
                                <a href="./html/Rastreo.html">Rastrear</a>
                            </label>
                      </p>
                    </form>
                  </div>

            </div>

            <div class=cajaAbajo>
             
            </div>
            
        </div>
        
        <!--Derecha-->
        <div id="aside"></div>

        
    </div>


    <div id="footer">
        Derechos reservados S.A de C.V & JCDebugers
    </div>
    
    
</body>
</html>