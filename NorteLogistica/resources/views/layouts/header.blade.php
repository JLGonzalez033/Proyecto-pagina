<div class="card bg-dark text-white">
  <img src="{{asset('img/banner_1.png')}}" class="card-img" alt="...">
  <div class="card-img-overlay">
  <div class="row  pt-5 mt-4 ">
        <div class="col-1 "></div>
        <div class="col-4"><h1 class="card-title pt-5 mt-5 fw-bold fs-1 ps-5 ms-5">Rastrea tu paquete </h1></div>
    </div>
    
    <div class="row  pt-5 mt-4 ">
        <div class="col-1 "></div>
        <div class="col-4 p-2   bg-dark rounded">
        
                         <div class="form-group">
                            <label for="name">No Guia</label>
                            <input type="text" name="name" value="{{@old('name')}}" class="form-control" />
                           
                        </div>
        </div>
    </div>



    
    <div class="row   ">
        <div class="col-1 "></div>
        <div class="col-4"><img class="img-fluid" style="height: 250px;;"src="{{asset('img/paquete.gif')}}" alt=""></div>
    </div>
    
  </div>
</div>