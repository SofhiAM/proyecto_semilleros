<x-layouts.app>
    <div class="container-fluid py-7">
        <!-- Encabezado -->
        <div class="card card-body blur shadow-blur mx-2 mt-n6">
            <div class="row gx-4">
                <div class="card-header pb-0 p-3 col-9">
                    <div class="h-100">
                        <h5 class="mb-1 mx-3">
                            {{$evento->nom_evento}}
                        </h5>
                        <p class="mb-0 mx-3 font-weight-bold text-sm">
                            {{$evento->tipo_evento}}
                        </p>
                    </div>
                </div>
                <div class="col-3 text-end my-2">
                        <a class="btn bg-gradient-dark mb-0" href="{{route('partic-eventos', $evento->id_evento)}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Participar</a>
                </div>
            </div>
        </div>
        <!-- Cards -->
        <div class="row mx-1">
            <div class="col-sm-12 col-md-8">
                <div class="card mt-4">
                    <!-- Inf General -->
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                                <h6 class="mb-0">Información general</h6>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-3">
                        <div class="card card-body border card-plain border-radius-lg mx-2 mb-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="mb-0">
                                        Descripción
                                    </h6>
                                    <p class="text-sm">
                                        {{$evento->descrip_evento}}
                                    </p>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="mb-0">
                                        Modalidad
                                    </h6>
                                    <p class="text-sm">
                                        {{$evento->modalidad_evento}}
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <h6 class="mb-0">
                                        Clasificación
                                    </h6>
                                    <p class="text-sm">
                                        {{$evento->clasific_evento}}
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="mb-0">
                                        Observaciones
                                    </h6>
                                    <p class="text-sm">
                                        {{$evento->observ_evento}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card mt-4">
                    <!-- Fechas -->
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-12 d-flex align-items-center">
                                <h6 class="mb-0">¿Donde y cuando?</h6>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-3">
                        <div class="card card-body border card-plain border-radius-lg mx-2 mb-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="mb-0">
                                        Fecha de Inicio
                                    </h6>
                                    <p class="text-sm">
                                        {{$evento->fecinicio_evento}}
                                    </p>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="mb-0">
                                        Fecha de Finalización
                                    </h6>
                                    <p class="text-sm">
                                        {{$evento->fecfin_evento}}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="mb-0">
                                        Lugar
                                    </h6>
                                    <p class="text-sm">
                                        {{$evento->lugar_evento}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Proyectos participantes -->
        
        <div class="row my-4 mx-1">
            <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                <h6>Proyectos participantes</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                        <tr>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nombre del Proyecto</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Tipo de Proyecto</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Semillero</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder text-center opacity-7 ps-2">Encargado</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                            <div class="d-flex px-2">

                            <div class="my-auto">
                                <h6 class="mb-0 text-sm ps-2">Spotify</h6>
                            </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-sm font-weight-bold mb-0">$2,500</p>
                        </td>
                        <td>
                            <span class="text-sm font-weight-bold">working</span>
                        </td>
                        <td class="align-middle text-center">
                            <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold">60%</span>
                            <div>
                                <div class="progress">
                                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                </div>
                            </div>
                            </div>
                        </td>
                        </tr>

                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</x-layouts.app>