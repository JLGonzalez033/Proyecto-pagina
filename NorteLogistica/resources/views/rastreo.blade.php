@include('layouts.link')

     <!-- navbar-->
     @include('layouts.navbar')
     <!-- fin navbar-->



<section>

<div class="bg-fondo-1" style="width:100%; height:100px;"></div>


<div class="bg-light m-5" >

    <div class="row">   
        <div class="col-1   "></div>
                <div class=" col-4  bg-light bg-opacity-75 h-100 rounded-top">
                    <h1 class="fs-2 fadeInLeft  text-primary text-uppercase fw-bold "> Rastreo</h1>
                    <h1 class="fs-1 fadeInRight fw-bold fw-bold  "> Observa la ruta de tu paquete</h1>
                    <h1 class="fs-1 fw-bold fw-bold text-primary   "> ‾‾‾ </h1>

                </div>
        <div class="col"></div>
    </div>
    <div class="row pb-5 mb-5">
        <div class="col"></div>

        <div class="col-4 py-5 mt-5   bg-dark rounded ">
                
                <div class="form-group">
                <label class="text-white " for="name">No Guia</label>
                <input type="text" name="name" value="{{@old('name')}}" class="form-control" />
                
            </div>
        </div>
        <div class="col"></div>


    </div>








</div>

<div class="bg-fondo-1" style="width:100%; height:100px;"></div>

</section>

    <!--Footer-->
    @include('layouts.footer')
    <!--Fin Footer-->


    







@include('layouts.end')