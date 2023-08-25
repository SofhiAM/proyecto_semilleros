<x-layouts.app>
<div class="main-content">
    <div class="page-header min-height-300 border-radius-xl mt-4"
        style="background-image: url('../imagenes/logo_enc.jpeg'); background-position-y: 40%;">
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6">
        <div class="row">
            <div class="col">
                <h2>ACTUALIZAR INFORMACIÓN DE SEMILLEROS</h2>    
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-sm-6 mb-4">
            <form action="{{route('actualizaSem',$s->id_semillero)}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="idsem" class="form-label">Id del Semillero</label>
                    <input type="number" class="form-control" id="idsem" name="idsem" value='{{$s->id_semillero}}' required>
                </div>
                

                <div class="mb-3">
                    <label for="nomsem" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nomsem" name="nomsem" value='{{$s->nom_semillero}}' required>
                </div>

                <div class="mb-3">
                    <label for="correosem" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="correosem" name="correosem" value='{{$s->correo_semillero}}' required>
                </div>

                <div class="mb-3">
                    <label for="logosem" class="form-label">Logo</label>
                    <input type="text" class="form-control" id="logosem" name="logosem" value='{{$s->logo_semillero}}' required>
                </div>

                <div class="mb-3">
                    <label for="descsem" class="form-label">Descripción</label><br>
                    <textarea name="descsem" id="descsem" rows="10" class="form-control" required>{{$s->descrip_semillero}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="mision" class="form-label">Misión</label>
                    <textarea name="mision" id="mision" rows="6" class="form-control" required>{{$s->mision}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="vision" class="form-label">Visión</label>
                    <textarea name="vision" id="vision" rows="6" class="form-control" required>{{$s->vision}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="valores" class="form-label">Valores</label>
                    <textarea name="valores" id="valores" rows="6" class="form-control" required>{{$s->valores}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="objetivos" class="form-label">Objetivos</label>
                    <textarea name="objetivos" id="objetivos" rows="6" class="form-control" required>{{$s->objetivos}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="lineainv" class="form-label">Linea de investigación</label>
                    <textarea name="lineainv" id="lineainv" rows="6" class="form-control" required>{{$s->linea_invest}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="presen" class="form-label">Presentación</label>
                    <input type="text" class="form-control" id="presen" name="presen" value='{{$s->presentacion}}' required>
                </div>

                <div class="mb-3">
                    <label for="fec-crea" class="form-label">Fecha de creación del Semillero</label>
                    <input type="date" class="form-control" id="fec-crea" name="fec-crea" value='{{$s->fecha_creacion_sem}}' required>
                </div>

                <div class="mb-3">
                    <label for="no-res" class="form-label">No. Resolución </label>
                    <input type="number" class="form-control" id="no-res" name="no-res" value='{{$s->numres_semillero}}' required>
                </div>

                <div class="mb-3">
                    <label for="ressem" class="form-label">Suba l aresolucion</label>
                    <input type="text" class="form-control" id="ressem" name="ressem" value='{{$s->resolucion_semillero}}' required>
                </div>

                <div class="mb-3">
                    <label for="id-coor" class="form-label">Identificación del Coordinador</label>
                    <input type="text" class="form-control" id="id-coor" name="id-coor" value='{{$s->id_coordinador}}' required>
                </div><br>
                <button type="submit" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </div>
</div>
</x-layouts.app>