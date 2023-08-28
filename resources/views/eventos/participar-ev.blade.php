<x-layouts.app>
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h4 class="mb-0">{{ __('Inscribir un proyecto a un evento') }}</h4>
        </div>
        
        <div class="card-body pt-4 p-3">
            <form action="{{url('#')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" style="font-size: 14px;">Seleccione el proyecto con el que desea participar</label>
                            <select class="form-control" id="proyecto_particip" name="proyecto_particip" require>
                                @foreach($semillero as $s)
                                <option value="{{$s->id_semillero}}">{{$s->nom_semillero}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-control-label" style="font-size: 14px;">Nombre del semillero</label>
                    <select class="form-select" id="barrio" name="barrio">
                            @foreach($semillero as $s)
                            <option value="{{$s->id_semillero}}">{{$s->nom_semillero}}</option>
                            @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-control-label" style="font-size: 14px;">Coordinador - Encargado</label>
                    <select class="form-select" id="barrio" name="barrio">
                            @foreach($coordinador as $c)
                            <option value="{{$c->id_coordinador}}">{{$c->nom_coordinador}}</option>
                            @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-control-label" style="font-size: 14px;">Evento al que se inscribe</label>
                    <select class="form-control" id="nom_ev" name="nom_ev" disabled>
                        <option value="{{$evento->id_evento}}">{{$evento->nom_evento}}</option>
                    </select>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" style="font-size: 14px;">{{ 'Guardar participación' }}</button>
                </div>
            </form>
        </div>
        
    </div>
</div>
</x-layouts.app>