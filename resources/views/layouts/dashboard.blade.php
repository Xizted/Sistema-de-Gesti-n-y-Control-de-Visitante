@extends('layouts.app')
<nav class="navbar navbar-expand-lg navbar-light bg-secondary flex-row flex-nowrap justify-content-start shadow">
    <div class="container">
        <div>
            <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand text-white" href="{{ url('/') }}">
                {{-- {{ config('app.name', 'Laravel') }} --}}
                Sistema de Control de Visitantes
            </a>
        </div>

        <div class="navbar-collapse d-flex">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto flex-row">
                <li class=" dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->getFullNameAttribute() }}
                    </a>
                    <div class="position-absolute dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- Sidebar --}}
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-secondary shadow">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a href="/" class="item list-group-item list-group-item-action py-2 ripple text-white {{ (request()->is('home')) ? 'active' : '' }}" aria-current="true">
                <i class="fa-sharp fa-solid fa-house mr-3"></i>
                <span class="font-weight-bold">Home</span>
            </a>
        </div>
    </div>
</nav>

<main class="py-4">
    @yield('contenido')
</main>
