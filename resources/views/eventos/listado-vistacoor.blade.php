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
                </div>
                <!-- Ciclo de listado de cards de eventos -->
                
                    <div class="card-body pt-4 p-3">
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
                            <div class="col-9 d-flex flex-column">
                                <h5 class="mb-3 text-lg" >{{$e->nom_evento}}</h5>
                                <span class="mb-2 text-md" style="font-size: 90%;">{{$e->descrip_evento}}</span>
                            </div>
                            
                            <div class="ms-auto text-end">
                                <a class="btn bg-gradient-info px-3 mb-0 btn-lg w-100" href="{{route('vermas-eventos', $e->id_evento)}}">Ver más</a>
                            </div><br>
                        </li>
                        </ul>
                        @endforeach
                    </div>
                
            </div>
        </div>
    </div>
</x-layout.app>