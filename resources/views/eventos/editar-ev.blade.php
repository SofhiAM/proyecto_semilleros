<x-layouts.app>
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h4 class="mb-0">{{ __('Editar Evento') }}</h4>
        </div>
        
        <div class="card-body pt-4 p-3">
            <form action="{{url('/eventos/editar', $evento->id_evento)}}" method="post">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <label class="form-control-label" style="font-size: 14px;">Nombre del evento</label>
                        <input type="text" class="form-control"  placeholder="Evento" id="nom_evento" name="nom_evento" value='{{$evento->nom_evento}}' require>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" style="font-size: 14px;">Descrpción del evento</label>
                            <textarea class="form-control" id="descrip_evento" name="descrip_evento" rows="3" placeholder="¿De qué trata el evento?" require>{{$evento->descrip_evento}}</textarea>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" style="font-size: 14px;">Fecha de Inicio</label>
                            <input class="form-control" type="date"  value="{{ $evento->fecinicio_evento }}" id="fecini_evento" name="fecini_evento" require>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" style="font-size: 14px;">Fecha de Finalización</label>
                            <input class="form-control" type="date" value="{{ $evento->fecfin_evento }}"  id="fecfin_evento" name="fecfin_evento" require>
                        </div>
                    </div>
                </div>                
                
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" style="font-size: 14px;">Lugar</label>
                            <input type="text" class="form-control"  placeholder="¿Donde se realizará el evento?" id="lugar_evento" value='{{$evento->lugar_evento}}' name="lugar_evento" require>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" style="font-size: 14px;">Tipo</label>
                            <select class="form-control" id="tipo_evento" name="tipo_evento" require>
                                <option value="Congreso" @if($evento->tipo_evento === 'Congreso') selected @endif>Congreso</option>
                                <option value="Encuentro" @if($evento->tipo_evento === 'Encuentro') selected @endif>Encuentro</option>
                                <option value="Seminario" @if($evento->tipo_evento === 'Seminario') selected @endif>Seminario</option>
                                <option value="Taller"  @if($evento->tipo_evento === 'Taller') selected @endif>Taller</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" style="font-size: 14px;">Modalidad</label>
                            <select class="form-control" id="modalidad_evento" name="modalidad_evento" require>
                                <option value="Virtual" @if($evento->modalidad_evento === 'Virtual') selected @endif>Virtual</option>
                                <option value="Presencial" @if($evento->modalidad_evento === 'Presencial') selected @endif>Presencial</option>
                                <option value="Hibrida" @if($evento->modalidad_evento === 'Hibrida') selected @endif>Híbrida</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" style="font-size: 14px;">Clasificación</label>
                            <select class="form-control" id="clasif_evento" name="clasif_evento" require>
                                <option value="Local" @if($evento->clasific_evento === 'Local') selected @endif>Local</option>
                                <option value="Regional" @if($evento->clasific_evento === 'Regional') selected @endif>Regional</option>
                                <option value="Nacional" @if($evento->clasific_evento === 'Nacional') selected @endif>Nacional</option>
                                <option value="Internacional" @if($evento->clasific_evento === 'Internacional') selected @endif>Internacional</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-control-label" style="font-size: 14px;">Observaciones</label>
                            <textarea class="form-control" id="obser_evento" name="obser_evento" rows="3" placeholder="¿Algo más que decir?">{{$evento->observ_evento}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" style="font-size: 14px;">{{ 'Guardar cambios' }}</button>
                </div>
            </form>
        </div>
        
    </div>
</div>
</x-layouts.app>