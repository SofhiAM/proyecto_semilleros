@include('Semilleros.encabezadoSem')
@foreach ($semillero as $s)
    <div class="container-fluid py-4">
        <div class="row ">
            <div class="card h-90">
                <div class="card-header pb-0 p-3 bg-gradient-success ">
                    <h4 class="mb-0 text-white">Descripción</h4>
                </div>
                <div class="card-body p-3">
                    <p class="text-sm">
                        {{$s->descrip_semillero}}
                    </p>
                </div>
            </div> 
        </div><br>

        <div class="row justify-content-center">
            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3 bg-gradient-success">
                        <h6 class="mb-0 text-white">Misión</h6>
                    </div>
                    <div class="card-body p-3">
                        <p class="text-sm">
                            {{$s->mision}}
                        </p>
                    </div>
                </div>        
            </div>

            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3 bg-gradient-success">
                        <h6 class="mb-0 text-white">Visión</h6>
                    </div>
                    <div class="card-body p-3">
                        <p class="text-sm">
                            {{$s->vision}}
                        </p>
                    </div>
                </div>        
            </div>
    

            <div class="col-12 col-xl-4">
                <div class="card h-100"> 
                    <div class="card-header pb-0 p-3 bg-gradient-success">
                        <h6 class="mb-0 text-white">Lineas de investigación</h6>
                    </div>
                    <div class="card-body p-3">
                        <p class="text-sm">
                            {{$s->mision}}
                        </p>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
@endforeach
