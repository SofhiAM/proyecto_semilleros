@include('Semilleros.encabezadoSem')

<div class="container-fluid cew-9">
    <div class="row">
        <div class="card mb-4">
            <div class="row">
                <div class="col-auto">
                    <h5 class="mb-0">Información Semilleristas</h5>
                </div>
                <div class="col-auto align-items-end">
                    <a class="btn bg-success text-white" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Vincular Semillerista</a>
                </div>
            </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Programa</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($semillerista as $s)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$s->nom_semillerista}}</h6>
                                            <p class="text-xs text-secondary mb-0">{{$s->correo_semillerista}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$s->prog_semillerista}}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">{{$s->estado_semillerista}}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Eliminar</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
   

