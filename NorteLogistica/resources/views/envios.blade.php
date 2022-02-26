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
                    <h1 class="fs-2 fadeInLeft  text-primary text-uppercase fw-bold "> Envios</h1>
                    <h1 class="fs-1 fadeInRight fw-bold fw-bold  "> Cotizaciones</h1>
                    <h1 class="fs-1 fw-bold fw-bold text-primary   "> ‾‾‾ </h1>

                </div>
        <div class="col"></div>
    </div>



<div class="row pb-5 mb-5">
    <div class="col-1"></div>

    <div class="col-10 py-5    bg-light border rounded ">
        
            
            <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Dimensiones</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Peso</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Lugar de Destino</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
         
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>

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