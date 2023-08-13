<div class="main-content">
    <div class="page-header min-height-300 border-radius-xl mt-4"
        style="background-image: url('../imagenes/logo_enc.jpeg'); background-position-y: 40%;">
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6">
        <div class="row">
            <div class="col">
                <h2>REGISTRO DE SEMILLEROS</h2>    
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-sm-6 mb-4">
            <form action="{{route('registroSem')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="idsem" class="form-label">Id del Semillero</label>
                    <input type="number" class="form-control" id="idsem" name="idsem" placeholder="Ingrese el id del semillero">
                </div>
                

                <div class="mb-3">
                    <label for="nomsem" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nomsem" name="nomsem" placeholder="Ingrese el nombre">
                </div>

                <div class="mb-3">
                    <label for="correosem" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="correosem" name="correosem" placeholder="correo del semillero">
                </div>

                <div class="mb-3">
                    <label for="logosem" class="form-label">Logo</label>
                    <input type="text" class="form-control" id="logosem" name="logosem" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="descsem" class="form-label">Descripción</label><br>
                    <textarea name="descsem" id="descsem" rows="10" class="form-control" placeholder="Ingrese la descripción del semillero"></textarea>
                </div>

                <div class="mb-3">
                    <label for="mision" class="form-label">Misión</label>
                    <textarea name="mision" id="mision" rows="6" class="form-control" placeholder="Ingrese la misión del semillero"></textarea>
                </div>

                <div class="mb-3">
                    <label for="vision" class="form-label">Visión</label>
                    <textarea name="vision" id="vision" rows="6" class="form-control" placeholder="Ingrese la visión del semillero"></textarea>
                </div>

                <div class="mb-3">
                    <label for="valores" class="form-label">Valores</label>
                    <textarea name="valores" id="valores" rows="6" class="form-control" placeholder="Ingrese los valores del semillero"></textarea>
                </div>

                <div class="mb-3">
                    <label for="objetivos" class="form-label">Objetivos</label>
                    <textarea name="objetivos" id="objetivos" rows="6" class="form-control" placeholder="Ingrese los objetivos del semillero"></textarea>
                </div>

                <div class="mb-3">
                    <label for="lineainv" class="form-label">Linea de investigación</label>
                    <textarea name="lineainv" id="lineainv" rows="6" class="form-control" placeholder="Ingrese la linea de invesigación del semillero"></textarea>
                </div>

                <div class="mb-3">
                    <label for="presen" class="form-label">Presentación</label>
                    <input type="text" class="form-control" id="presen" name="presen" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="fec-crea" class="form-label">Fecha de creación del Semillero</label>
                    <input type="date" class="form-control" id="fec-crea" name="fec-crea">
                </div>

                <div class="mb-3">
                    <label for="no-res" class="form-label">No. Resolución </label>
                    <input type="number" class="form-control" id="no-res" name="no-res" placeholder="Ingrese el No resoluución">
                </div>

                <div class="mb-3">
                    <label for="ressem" class="form-label">Suba l aresolucion</label>
                    <input type="text" class="form-control" id="ressem" name="ressem" >
                </div>

                <div class="mb-3">
                    <label for="id-coor" class="form-label">Identificación del Coordinador</label>
                    <input type="text" class="form-control" id="id-coor" name="id-coor" placeholder="Ingrese el id del coordinador">
                </div><br>
                <button type="submit" class="btn btn-success">Registrar</button>
            </form>
        </div>
    </div>
</div>