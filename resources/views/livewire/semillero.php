
    <main class="main-content">
        <div class="container-fluid py-4">
            <div class="row">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <h4 class="mb-0">Información de Semilleros</h4>
                                </div>
                                <div class="col-md-4 text-right">
                                    <a class="btn bg-success text-white" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Agregar un nuevo semillero</a>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Type here...">
                                    </div>
                                </div>
                            </div>        
                        </div>  
                    </div>                    
                        <div class="card-body pt-4 p-3">
                            <!-- @php
                                $i=1;
                            @endphp
                            @foreach ($semillero as $s) -->
                            <ul class="list-group">
                            
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">{{ $s->nom_semillero}}</h6>
                                        <span class="mb-2 text-xs">Coordinador: <span class="text-dark font-weight-bold ms-2">Viking Burrito</span></span>
                                    </div>
                                    <div class="ms-auto">
                                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                                class="far fa-trash-alt me-2"></i>Eliminar</a>
                                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Editar</a>
                                    </div>
                                </li>
                                
                            </ul>
                            <!-- @php
                                $i = $i +1
                            @endphp
                            @endforeach -->
                        </div>
                    </div>  
            </div>
    </main>
