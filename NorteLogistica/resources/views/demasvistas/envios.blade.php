<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envios</title>
    <link rel="stylesheet" href="{{ asset('/estilos/Estilos_Envios.css') }}">
</head>
<body>
<!--Titulo-->
       
    <div id="header">
        <div class=cajatitulo>
            <a href="../index.html">NorteLogistica</a>
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
                <a href="./SobreNosotros.html">Sobre Nosotros</a>
            </li>
            <li>
                <a>Tipos de servicios</a>
                <ul>
                    <li><a>Envios</a></li>
                </ul>
            </li>
            <li><a href="./Rastreo.html">Rastreo</a></li>
            <li>
                <a href="./Contactanos.html">Contactanos</a>
            </li>
            <li>
                <a href="./PuntosDeEntrega.html">Puntos de entrega</a>
            </li>
        </ul>
    </div>
    <!--Todo el cuerpo de la pagina-->
    
        
    <div id="central">
            
        
        <!--Izquierda--> 
        <div id="nav"></div>

        <!--En medio--> 
        <div id="section">
            


            <div class=cajaEnmedio>
                <wrapper>
                    <div class="FormularioEnvios">

                        <!--Direccion de recoleccion-->
                        <div id="dire1">
                            <label>Direccion de recolecion:</label>
                        </div>
    
                        <div class="Direccion">
                            
                            <label id="direccion">Direccion:</label>
                            <input id="direccionenvio" type="text"></input>
                        </div>
    
                        <div class="Num">
                            <label id="numero"># de Casa</label>
                            <input id="numerocasa" type="number"></input>
                        </div>
                        
                        <div class="Referencia">
                            <label id="col">Colonia:</label>
                            <input id="colonia" type="text"></input>
    
                            <label id="cod">Codigo Postal:</label>
                            <input id="codigopostal" type="text"></input>
                        </div>

                        <div id="domi">
                            <label id="servd">Servicio a domicilio:</label>
                            <input type="checkbox"></input>
                        </div>

                        <!--Direccion de envio-->
                        <div id="dire2">
                            <label>Direccion de envio</label>
                        </div>
    
                        <div class="Direccion">
                            
                            <label id="direccion">Direccion:</label>
                            <input id="direccionenvio" type="text"></input>
                        </div>
    
                        <div class="Num">
                            <label id="numero"># de Casa</label>
                            <input id="numerocasa" type="number"></input>
                        </div>
                        
                        <div class="Referencia">
                            <label id="col">Colonia:</label>
                            <input id="colonia" type="text"></input>
    
                            <label id="cod">Codigo Postal:</label>
                            <input id="codigopostal" type="text"></input>
                        </div>

                        <div id="dimen">
                            <label>Ingrese las dimenciones del paquete</label>  
                        </div>
                        <div id="dimensiones">
                            <label id="anch">Ancho</label>
                            <input id="ancho" type="number"></input>
                            <label id="alt">x Alto</label>
                            <input id="alto" type="number"></input>
                            <label id="larg">x Largo</label>
                            <input id="largo" type="number"></input>
                        </div>
                        
                        <div>
                            <label id="costo">Costo =</label>
                            <label id="costoPrecio">0</label>
                            <button id="Guia">Generar Guia</button>
                        </div>
                    </div>
                </wrapper>            
            </div>
        </div>
        <!--Derecha-->
        <div id="aside"></div>

        
    </div>
    
    
    <div id="footer"></div>
        
        
</body>
</html>