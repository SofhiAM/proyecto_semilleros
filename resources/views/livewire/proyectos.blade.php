
<main class="main-content">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-8">
                    <div class="row">
                        <form action="{{url('/registrarp')}}" method="post">
                            @csrf
                            <div class="col-md-6 d-flex align-items-center">
                                <h4 class="mb-0">Registro de proyectos Udenar</h4>
                            </div>
                            <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Codigo</label>
                                <input class="form-control" type="number" value="" name="id_proyecto" id="id_proyecto">
                            </div>
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nombre del Proyecto</label>
                                <input class="form-control" type="text" value="" name="titulo_proyecto" id="titulo_proyecto">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Tipo de proyecto</label>
                                <select class="form-control" id="tipo_proyecto" name="tipo_proyecto" placeholder="name@example.com">
                                <option>Investigación</option>
                                <option>Innovación y desarrollo</option>
                                <option>Emprendimiento</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Estado del Proyecto</label>
                                <select class="form-control" id="estado_proyecto" name="estado_proyecto" placeholder="Escoja estado">
                                <option>Propuesta</option>
                                <option>En Curso</option>
                                <option>Finalizado</option>
                                <option>Inactivo</option>
                                </select>
                            </div>                         
                            <div class="form-group">
                                <label for="example-date-input" class="form-control-label">Fecha Inicio</label>
                                <input class="form-control" type="date" value="2018-11-23" name="fecinicio_proyecto" id="fecinicio_proyecto">
                            </div>
                            <div class="form-group">
                                <label for="example-date-input" class="form-control-label">Fecha Fin</label>
                                <input class="form-control" type="date" value="2018-11-23" name="fecfin_proyecto" id="fecfin_proyecto">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Grupo de Investigación</label>
                                <select class="form-control" id="id_semillero" name="id_semillero" placeholder="name@example.com">
                                <option>Green Clouds</option>
                                <option>Tecno Pazifico</option>
                                <option>Willa Muru</option>
                                </select>
                            </div>  
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-6 d-flex align-items-center">
                                        <h6 class="mb-0">Fin Formulario</h6>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" style="font-size: 14px;">{{ 'Guardar' }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                    </div>
            </div>
        </div>
    </div>
</main>

