@include('layouts.link')

     <!-- navbar-->
     @include('layouts.navbar')
     <!-- fin navbar-->

     <!-- header-->
     @include('layouts.header')
     <!-- fin header-->

<!--Todo el cuerpo de la pagina-->


<section>

    <div class="bg-fondo-1" style="width:100%; height:200px;"></div>


    <div class="bg-light" >

        <h1 class="text-center fw-bold fadeInTop">Nuestros Servicios</h1>

        <div class="row py-5 my-5">

            <div class="col-1"></div>


            <div class="col-3 bg-azul p-5">
                <h1 class="fadeInLeft"><a class="text-decoration-none text-white"href="{{asset('/envios')}}">Envios</a><i class="text-white ps-5 bi bi-box-seam"></i></h1>
            </div>


        
            <div class="col"></div>


            <div class="col-3 bg-azul p-5">
                <h1 class="fadeInLeft"><a class="text-decoration-none text-white"href="{{asset('/rastreo')}}">Rastreo</a><i class="text-white ps-5 bi bi-wifi"></i></h1>
            </div>


            <div class="col"></div>


            <div class="col-3 bg-azul p-5">
                <h1 class="fadeInLeft"><a class="text-decoration-none text-white"href="{{asset('/puntos-entrega')}}">Puntos de Entrega</a><i class="text-white ps-2 bi bi-geo-alt-fill"></i></h1>
            </div>


            <div class="col-1"></div>

        </div>







    </div>

    <div class="bg-fondo-1" style="width:100%; height:200px;"></div>

</section>


<section class="bg-map">
    <div class="row" style="height:750px;">
        <h1 class="text-white fw-bold text-center pt-5">Politicas de Seguridad</h1>
        <div class="col">
            <h1 class="text-center text-white fw-bold">Responsabilidad</h1>
            <p class="text-justify pt-3 px-4 text-white fs-4 fw-bold">Con un equipo de colaboradores continuamente capacitados y enfocados en el cumplimiento de los objetivos de calidad y seguridad.</p>
        </div>
        <div class="col">
            <h1 class="text-center text-white fw-bold">Seguridad</h1>
            <p class="text-justify pt-3 px-4 text-white fs-4 fw-bold">Mediante procesos orientados a prevenir y reconocer amenazas, preservando la seguridad en beneficio de los miembros de la organización y nuestros clientes</p>
                    
        </div>
        <div class="col">
            <h1 class="text-center text-white fw-bold">Rapidez</h1>
            <p class="text-justify pt-3 px-4 text-white fs-4 fw-bold">Gracias a nuestro sistema podemos seguir adelante con eficacia y compromiso</p>
                 
        </div>

    </div>

</section>

    

    <!--Footer-->
    @include('layouts.footer')
    <!--Fin Footer-->


    







@include('layouts.end')