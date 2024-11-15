<link href="{{ asset('/css/componentesplanes.css') }}" rel="stylesheet"> 
  
<div class="col-12 col-sm-8 col-md-6 col-lg-4 d-flex justify-content-center">
        <div class="card pricing-card text-center">
          <div class="card-header text-white bg-dark">{{$encabezado}}</div>
          <div class="card-body">
            <ul class="list-unstyled mb-4">
              <li><i class="bi bi-check-circle-fill"></i> {{$punto1}}</li>
              <li><i class="bi bi-check-circle-fill"></i> {{$punto2}}</li>
              <li><i class="bi bi-check-circle-fill"></i> {{$punto3}}</li>
            </ul>
            <p class="price">{{$precio}}</p>
          </div>
        </div>
      </div>