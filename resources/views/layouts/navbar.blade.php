<div class="navbar bg-base-100 shadow-lg">
  {{-- logo --}}
  <div class="mx-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
      </svg>
  </div>
  
  {{-- menu móvil --}}
  <div class="flex-1 md:hidden">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a href="{{ route('home') }}">Minimercado2024</a></li>
        <li><a href="{{ route('home') }}">Servicios</a></li>
        <li><a href="{{ route('productos.index') }}">Productos</a></li>
        <li><a href="{{ route('home') }}">Acerca de nosotros</a></li>
      </ul>
    </div>
  </div>

  {{-- menu desktop --}}
  <div class="flex-1 hidden md:flex space-x-4">
    <a href="{{ route('home') }}" class="btn btn-ghost btn-sm">Minimercado2024</a>
    <a href="{{ route('home') }}" class="btn btn-ghost btn-sm">Servicios</a>
    <a href="{{ route('productos.index') }}" class="btn btn-ghost btn-sm">Productos</a>
    <a href="{{ route('home') }}" class="btn btn-ghost btn-sm">Acerca de nosotros</a>
  </div>

  {{-- Si esta autenticado muestra menu de usuario, sino muestra botones de login y registro --}}
  @auth
      <h3 class="mr-2 font-semibold text-sm">Hola, {{ auth()->user()->name }}</h3>
      <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar mr-4">
          <div class="w-10 rounded-full">
            <img alt="photo user" src="https://picsum.photos/id/35/50" />
          </div>
        </div>
        <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
          <li>
            <a href="{{ route('dashboard') }}">Dashboard</a>
          </li>
          <li>
            <a href="{{ route('profile.edit') }}">Mi perfil</a>
          </li>
          <li>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
            </form>
          </li>
        </ul>
      </div>
  @else
      <div class="mx-4 space-x-4">
        <a href="{{ route('login') }}" class="btn btn-outline btn-sm">Ingresar</a>
        <a href="{{ route('register') }}" class="btn btn-outline btn-sm">Registrarse</a>
      </div>
  @endauth
</div>