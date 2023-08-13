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

        @if (in_array(request()->route()->getName(),['sign-in', 'login'],))                  
            {{ $slot }}
            @include('layouts.footers.guest.description')
        @elseif (in_array(request()->route()->getName(),['profile', 'my-profile'],))
            @include('layouts.navbars.auth.sidebar')
            <div class="main-content position-relative bg-gray-100">
                @if ($tipoUsuario === 'user')
                    @include('layouts.navbars.auth.nav-profile')
                @elseif ($tipoUsuario === 'cor' || $tipoUsuario === 'dir')
                    @include('layouts.navbars.auth.nav-profile')
                @endif 
                
                <div>
                    {{ $slot }}
                    @include('layouts.footers.auth.footer')
                </div>
            </div>
            
        @else
            @if ($tipoUsuario === 'user')
                @include('layouts.navbars.auth.sidebar')
            @elseif ($tipoUsuario === 'cor')
                @include('layouts.navbars.auth.sidebar-cor')
            @elseif ($tipoUsuario === 'dir')
                @include('layouts.navbars.auth.sidebar-dir')
            @endif          
            @include('layouts.navbars.auth.nav')  
            
            {{ $slot }}
        @endif
    @endauth

    {{-- If the user is not authenticated (if the user is a guest) --}}
    @guest
        {{-- If the user is on the login page --}}
        @if (!auth()->check() && in_array(request()->route()->getName(),['login'],))
            
            {{ $slot }}

            {{-- If the user is on the sign up page --}}

        @endif
    @endguest

</x-layouts.base>
