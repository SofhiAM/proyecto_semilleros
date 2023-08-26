<x-layouts.app>
    <div class="container-fluid py-2">    
        <div class="row">
            <div class="col-md-12 mb-lg-0 mb-4">
                <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <h4 class="mb-0">Listado de Eventos</h4>
                    </div>
                    <div class="col-6 text-end">
                    <a class="btn btn-link text-success text-gradient px-3 mb-0" href="{{route('rep-eventos')}}" style="font-size: 90%;"><i class="far fa-collection me-2"></i>Generar Reporte</a>
                        <a class="btn bg-gradient-dark mb-0" href='/registro-eventos'><i class="fas fa-plus"></i>&nbsp;&nbsp;Añadir Evento</a>
                    </div>
                    </div>
                </div>
                <!-- Ciclo de listado de cards de eventos -->
                
                    <div class="card-body pt-4 p-3">
                    @php
                    $contador = 0;
                    @endphp

                        @foreach ($eventos as $e)
                        <ul class="list-group">
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                            <div class="col-1 ">
                                <!-- Fecha lateral -->
                                @php
                                    $fecha = $e->fecinicio_evento;
                                    $fech = strtotime($fecha);

                                    $dia = date("d", $fech);
                                    $mes = date("n", $fech);

                                    $meses = ["ENE", "FEB", "MAR", "ABR", "MAY", "JUN", "JUL", "AGO", "SEP", "OCT", "NOV", "DIC"];
                                    $mesn = (int)$mes;
                                @endphp

                                <div class="row">
                                    <h2>{{ $dia }}</h2>
                                </div>
                                <div class="row">
                                    <h5>{{ $meses[$mesn - 1] }}</h5>
                                </div>
                            </div>
                            <div class="col-7 d-flex flex-column">
                                <h5 class="mb-3 text-lg" >{{$e->nom_evento}}</h5>
                                <span class="mb-2 text-md" style="font-size: 90%;">{{$e->descrip_evento}}</span>
                            </div>
                            
                            <div class="ms-auto text-end">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{route('eli-eventos', $e->id_evento)}}" style="font-size: 90%;"><i class="far fa-trash-alt me-2"></i>Borrar</a>
                                <a class="btn btn-link text-dark px-3 mb-0" href="{{route('editar-eventos', $e->id_evento)}}" style="font-size: 90%;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Editar</a><br>
                                <a class="btn bg-gradient-info px-3 mb-0 btn-lg w-100" href="#">Ver más</a>
                            </div><br>
                        </li>
                        <div class="collapse" id="collapseExample{{$contador}}">
                                <div class="card card-body">
                                    <span class="mb-2 text-md" style="font-size: 90%;">Descripción: <span class="text-dark font-weight-bold ms-sm-2">{{$e->descrip_evento}}</span></span>
                                    <span class="mb-2 text-md" style="font-size: 90%;">Modalidad: <span class="text-dark ms-sm-2 font-weight-bold">{{$e->modalidad_evento}}</span></span>
                                    <span class="mb-2 text-md" style="font-size: 90%;">Tipo: <span class="text-dark ms-sm-2 font-weight-bold">{{$e->tipo_evento}}</span></span>
                                    <span class="mb-2 text-md" style="font-size: 90%;">Clasificación: <span class="text-dark ms-sm-2 font-weight-bold">{{$e->clasific_evento}}</span></span>
                                    <span class="text-md" style="font-size: 90%;">Observaciones: <span class="text-dark ms-sm-2 font-weight-bold">{{$e->observ_evento}}</span></span>
                                </div>
                        </div>
                        </ul>

                        @php
                            $contador = $contador+1;
                        @endphp

                        @endforeach
                    </div>
                
            </div>
        </div>
    </div>
</x-layout.app>