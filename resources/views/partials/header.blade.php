<header class="d-flex justify-content-between align-items-center ps-5 pe-5">
    <ul class="d-flex justify-content-center align-items-center gap-3">
        <li class="{{ Request::route()->getName() === 'home' ? 'active' : '' }}"><a href="{{ route('home') }}" class="text-white">Home</a></li>
        <li class="{{ Request::route()->getName() === 'donna' ? 'active' : '' }}"><a href="{{ route('donna') }}" class="text-white">Donna</a></li>
        <li class="{{ Request::route()->getName() === 'uomo' ? 'active' : '' }}"><a href="{{ route('uomo') }}" class="text-white">Uomo</a></li>
        </ul>
        {{-- logo --}}
        <img src="{{ Vite::asset('resources/img/logo boolando.png') }}" alt="logo">
        <div>
            <span class="text-white"><a class="text-white" href=""> O </a></span>
            <span class="text-white"><a class="text-white" href=""> O </a></span>
            <span class="text-white"><a class="text-white" href=""> O </a></span>
        </div>
</header>