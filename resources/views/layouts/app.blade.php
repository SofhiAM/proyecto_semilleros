@php
    use App\Models\User;
@endphp
<x-layouts.base>
    {{-- If the user is authenticated --}}
    @auth()
        @php
            $userID = auth()->id();
            $user = User::find($userID);
            $tipoUsuario = $user->tipo;
        @endphp
        {{-- If the user is authenticated on the static sign up or the sign up page --}}
        @if (in_array(request()->route()->getName(),['static-sign-up', 'sign-up'],))
            @if ($tipoUsuario === 'user')
                @include('layouts.navbars.guest.sign-up')
            @elseif ($tipoUsuario === 'admin')
                @include('layouts.navbars.guest.sign-up')
            @endif    
            {{ $slot }}
            @include('layouts.footers.guest.with-socials')
            {{-- If the user is authenticated on the static sign in or the login page --}}
        @elseif (in_array(request()->route()->getName(),['sign-in', 'login'],))
            @if ($tipoUsuario === 'user')
                @include('layouts.navbars.guest.login')
            @elseif ($tipoUsuario === 'admin')
                @include('layouts.navbars.guest.login')
            @endif         
            {{ $slot }}
            @include('layouts.footers.guest.description')
        @elseif (in_array(request()->route()->getName(),['profile', 'my-profile'],))
            @include('layouts.navbars.auth.sidebar')
            <div class="main-content position-relative bg-gray-100">
                @if ($tipoUsuario === 'user')
                    @include('layouts.navbars.auth.nav-profile')
                @elseif ($tipoUsuario === 'admin')
                    @include('layouts.navbars.auth.nav-profile')
                @endif 
                
                <div>
                    {{ $slot }}
                    @include('layouts.footers.auth.footer')
                </div>
            </div>
            @include('components.plugins.fixed-plugin')
        @else
            @if ($tipoUsuario === 'user')
                @include('layouts.navbars.auth.sidebar')
            @elseif ($tipoUsuario === 'admin')
                @include('layouts.navbars.auth.sidebar-admin')
            @endif          
            @include('layouts.navbars.auth.nav')  
            @include('components.plugins.fixed-plugin')
            {{ $slot }}
            <main>
                <div class="container-fluid">
                    <div class="row">
                        @include('layouts.footers.auth.footer')
                    </div>
                </div>
            </main>
        @endif
    @endauth

    {{-- If the user is not authenticated (if the user is a guest) --}}
    @guest
        {{-- If the user is on the login page --}}
        @if (!auth()->check() && in_array(request()->route()->getName(),['login'],))
            @include('layouts.navbars.guest.login')
            {{ $slot }}
            <div class="mt-5">
                @include('layouts.footers.guest.with-socials')
            </div>

            {{-- If the user is on the sign up page --}}
        @elseif (!auth()->check() && in_array(request()->route()->getName(),['sign-up'],))
            <div>
                @include('layouts.navbars.guest.sign-up')
                {{ $slot }}
                @include('layouts.footers.guest.with-socials')
            </div>
        @endif
    @endguest

</x-layouts.base>
