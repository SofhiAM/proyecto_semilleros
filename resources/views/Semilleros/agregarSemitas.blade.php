@php
    use App\Models\SemilleroMod;
    use App\Models\SemilleristasMod;
@endphp
<x-layouts.app>
<div class="main-content">
    <div class="page-header min-height-300 border-radius-xl mt-4"
        style="background-image: url('../imagenes/logo_enc.jpeg'); background-position-y: 40%;">
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6">
        <div class="row">
            <div class="col">
                <h2>REGISTRO DE SEMILLERISTAS</h2>    
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-sm-6 mb-4">
            <form action="{{route('agregarSemitas')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-xl-6 col-sm-4 mb-4" >
                        <div class="mb-3">
                            <label for="codsem" class="form-label">Código Semillerista</label>
                            <input type="number" class="form-control" id="codsem" name="codsem" placeholder="Ingrese el código  del semilleristas" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-4 mb-4" >
                        <div class="mb-3">
                            <label for="idsem" class="form-label">Id del Semillerista</label>
                            <input type="number" class="form-control" id="idsem" name="idsem" placeholder="Ingrese el id del Semillerista" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-8 col-sm-4 mb-4" >
                        <div class="mb-3">
                            <label for="nomsem" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nomsem" name="nomsem" placeholder="Ingrese el nombre" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-xl-6 col-sm-4 mb-4" >
                        <div class="mb-3">
                            <label for="dirsem" class="form-label">Dirección de domicilio</label>
                            <input type="text" class="form-control" id="dirsem" name="dirsem" placeholder="Ingrese el nombre" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-4 mb-4" >
                        <div class="mb-3">
                            <label for="telsem" class="form-label">Télefono</label>
                            <input type="number" class="form-control" id="telsem" name="telsem" placeholder="Ingrese el télefono del Semillerista" required>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl-4 col-sm-4 mb-4" >
                        <div class="mb-3">
                            <label for="correosem" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="correosem" name="correosem" placeholder="correo del Semillerista">
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4 mb-4" >
                        <div class="mb-3">
                            <label for="gensem" class="form-label">Genero</label>
                            <select name="gensem" id="gensem" class="form-control">
                                <option value="F">(F) Femenino</option>
                                <option value="M">(F) Masculino</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4 mb-4" >
                        <div class="mb-3">
                            <label for="fotosem" class="form-label">Suba foto</label>
                            <input type="text" class="form-control" id="fotosem" name="fotosem" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-sm-4 mb-4" >
                        <div class="mb-3">
                            <label for="fec-crea" class="form-label">Programa Académico</label>
                            <select name="progsem" id="progsem" class="form-control" >
                                <option value="Ingenieria de Sistemas">Ingeniería de Sistemas</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4 mb-4" >
                        <div class="mb-3">
                            <label for="semestre" class="form-label">semestre</label>
                            <select name="semestre" id="semestre" class="form-control">
                                @for($i=1; $i<=10; $i++)
                                    <option value=i>{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4 mb-4" >
                        <div class="mb-3">
                            <label for="reporsem" class="form-label">Suba el reporte de Matricula</label>
                            <input type="text" class="form-control" id="reporsem" name="reporsem" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-sm-4 mb-4" >
                        <div class="mb-3">
                            <label for="fecnac" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fecnac" name="fecnac" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-4 mb-4" >
                        <div class="mb-3">
                            <label for="fecvinc" class="form-label">Fecha de Vinculación al Semillero</label>
                            <input type="date" class="form-control" id="fecvinc" name="fecvinc" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-sm-4 mb-4" >
                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select name="estado" id="estado" class="form-control">
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-4 mb-4" >
                        <div class="mb-3">
                            <label for="id-coor" class="form-label">Semillero</label>
                            
                                <select name="semillero" id="semillero" class="form-control">
                                    @php
                                        $semillero = DB::table('semillero')->get();
                                    @endphp
                                    @foreach ($semillero as $s)
                                        @php
                                            $id_sem=$s->id_semillero
                                        @endphp
                                        <option value='{{$s->id_semillero}}'>{{$s->nom_semillero}}</option>
                                    @endforeach
                                </select>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Enviar</button>
                
            </form>
        </div>
    </div>
</div>
</x-layouts.app>