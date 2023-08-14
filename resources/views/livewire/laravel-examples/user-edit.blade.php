<section class="h-100-vh mb-8">
    <div class="page-header align-items-start section-height-50 pt-5 pb-11 m-3 border-radius-lg"
        style="background-image: url('../assets/img/Udenar1.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">{{ __('Editar Usuario') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-body">
                        <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">
                            <div class="mb-3">
                                <label for="user-nombre" class="form-control-label">{{ __('Nombre') }}</label>
                                <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                    <input wire:model="user.nombre" class="form-control" type="text" placeholder="Nombre"
                                        id="user-nombre">
                                </div>
                                @error('user.nombre') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="user.cedula" class="form-control-label">{{ __('Cedula') }}</label>
                                <div class="@error('user.ced') border border-danger rounded-3 @enderror">
                                    <input wire:model="user.cedula" class="form-control" type="text"
                                        placeholder="Cedula" id="use-cedula">
                                </div>
                                @error('user.cedula') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="user-correo" class="form-control-label">{{ __('Correo') }}</label>
                                <div class="@error('user.email')border border-danger rounded-3 @enderror">
                                    <input wire:model="user.correo" class="form-control" type="email"
                                        placeholder="@example.com" id="user-correo">
                                </div>
                                @error('user.correo') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="user.celular" class="form-control-label">{{ __('Celular') }}</label>
                                <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                                    <input wire:model="user.celular" class="form-control" type="tel"
                                        placeholder="0000000000" id="user-celular">
                                </div>
                                @error('user.celular') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Guardar</button>
                            </div>
                            <p class="text-sm mt-3 mb-0"><a
                                    href="{{ route('user-management') }}"
                                    class="text-dark font-weight-bolder">{{ __('Cancelar') }}</a>
                            </p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
