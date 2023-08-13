<section class="h-100-vh mb-8">
    <div class="page-header align-items-start section-height-50 pt-5 pb-11 m-3 border-radius-lg"
        style="background-image: url('../assets/img/Udenar1.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">{{ __('Registrar') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-body">
                        <form wire:submit.prevent="register" action="#" method="POST" role="form text-left">
                            <div class="mb-3">
                                <label>{{ __('Nombre') }}</label>
                                <div class="@error('name') border border-danger rounded-3  @enderror">
                                    <input wire:model="name" type="text" class="form-control" placeholder="Name"
                                        aria-label="Name" aria-describedby="email-addon">
                                </div>
                                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <label>{{ __('Cedula') }}</label>
                                <div class="@error('ced') border border-danger rounded-3  @enderror">
                                    <input wire:model="ced" type="text" class="form-control" placeholder="Cedula"
                                        aria-label="ced" aria-describedby="email-addon">
                                </div>
                                @error('ced') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <label>{{ __('Correo') }}</label>
                                <div class="@error('email') border border-danger rounded-3 @enderror">
                                    <input wire:model="email" type="email" class="form-control" placeholder="Email"
                                        aria-label="Email" aria-describedby="email-addon">
                                </div>
                                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <label>{{ __('Contraseña') }}</label>
                                <div class="@error('password') border border-danger rounded-3 @enderror">
                                    <input wire:model="password" type="password" class="form-control"
                                        placeholder="Password" aria-label="Password"
                                        aria-describedby="password-addon">
                                </div>
                                @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tipo">{{ __('Tipo de Usuario') }}</label>
                                <div class="@error('password') border border-danger rounded-3 @enderror">
                                    <select wire:model="tipo" class="form-control" id="userType">
                                        <option value="">Seleccione</option>
                                        <option value="user">Regular</option>                                  
                                        <option value="cor">Coordinador</option>
                                        <option value="dir">Director</option>
                                    </select>
                                </div>
                                @error('tipo') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Registrar</button>
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
