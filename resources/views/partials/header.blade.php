<header class="d-flex justify-content-between align-items-center ps-5 pe-5">
    <nav>
        <ul class="d-flex justify-content-center align-items-center gap-3">
            <li class="{{ Request::route()->getName() === 'home' ? 'active' : '' }}"><a href="{{ route('home') }}"
                    class="text-white">Home</a></li>
            <li class="{{ Request::route()->getName() === 'donna' ? 'active' : '' }}"><a href="{{ route('donna') }}"
                    class="text-white">Donna</a></li>
            <li class="{{ Request::route()->getName() === 'uomo' ? 'active' : '' }}"><a href="{{ route('uomo') }}"
                    class="text-white">Uomo</a></li>
        </ul>
    </nav>
    {{-- logo --}}
    <img src="{{ Vite::asset('resources/img/logo boolando.png') }}" alt="logo">
    <div>
        <span class="text-white"><a class="text-white" href=""> <i class="fa-regular fa-user"></i> </a></span>
        <span class="text-white"><a class="text-white" href=""> <i class="fa-regular fa-heart"></i> </a></span>
        <span class="text-white"><a class="text-white" href=""> <i class="fa-solid fa-bag-shopping"></i> </a></span>
    </div>
</header>
