<x-layouts.app>
<div class="main-content">
    <div class="page-header min-height-300 border-radius-xl mt-4"
        style="background-image: url('../imagenes/logo_enc.jpeg'); background-position-y: 40%;">
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6">
        <div class="row">
            <div class="col">
                <h2>Desvincular semilleristas</h2>    
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-sm-6 mb-4">
            <form action="{{route('desvincular',$s->id_semillerista)}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nomsem" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nomsem" name="nomsem" value='{{$s->nom_semillerista}}'>
                </div>

                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                        <select name="estado" id="estado" class="form-control" value='{{$s->estado_semillerista}}' id="estado">
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                </div>

                <div class="alert alert-danger text-white" role="alert">
                    Recuerda!! Esta acción no elimina al semillerista, esta acción cambia el estado y borra las credenciales del semillerista
                </div>

                <button type="submit" class="btn btn-secondary">Desvincular</button>
            </form>
        </div>
    </div>
</div>
</x-layouts.app>