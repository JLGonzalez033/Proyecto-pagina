@include('layouts.link')

     <!-- navbar-->
     @include('layouts.navbar')
     <!-- fin navbar-->


     <div class="container-fluid mt-4">
    <h1 class="fs-1  text-white text-uppercase ps-5 text-center  fadeInTop"> Contáctenos</h1>
    </div>


<section class="showcase   bg-light mt-1 mx-lg-5">

  <div class="container-fluid p-0  p-lg-2 mb-5">
      <div class="row g-0">

   


     


          <div class="col-12 col-lg-6 mt-5">
          <h1 class="fs-1 fw-bold font-montserrat  ps-5 fadeInLeft"> Directorio</h1>

          <div class="col">
              <h5 class="font-montserrat px-2 pt-5">Cel:</h5>
              <h5 class="font-montserrat px-2 pb-5 fs-2 text-center"><i class="bi bi-phone"></i> (636) 555 55 55</h5>
              <h5 class="font-montserrat px-2">Email:</h5>
              <h5 class="font-montserrat px-2 fs-2 text-center"><i class="bi bi-envelope"></i> NorteLogistica@gmail.com.mx</h5>
          </div>




          

          </div>
          <div class="col-12 col-lg-6  my-auto showcase-text">

          <div id="Maps">
            

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3440.8678792680776!2d-107.9134313!3d30.4114902!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86dcad00b571ea3b%3A0x7d024d3c42ed2d5d!2sEstafeta!5e0!3m2!1ses-419!2smx!4v1645880094127!5m2!1ses-419!2smx" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
          
          </div>
      </div>
  </div>





</section>


<section class="showcase   bg-light mx-lg-5">

    <div class="container-fluid p-0  p-lg-2 mb-5">
        <div class="row g-0">
        
            <div class="col-lg-12 ps-5 order-lg-1 my-auto showcase-text pb-5 ">
                
                
    
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>


                <!--
                <form action="?" method="POST" class="p-0 m-0" >
                    
                    <br/>
               
                </form>
                -->
            

            </div>
        

            

        </div>
    </div>





</section>
    

    <!--Footer-->
    @include('layouts.footer')
    <!--Fin Footer-->


    







@include('layouts.end')