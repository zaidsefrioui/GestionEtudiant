<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link @yield('homeActive')" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="{{ route('filiereList') }}" class="nav-link" @yield('filiereActive') >Filieres</a></li>
        <li class="nav-item"><a href=" {{ route('etudiantList') }}" class="nav-link" @yield('etudiantActive') >Etudiants</a></li>
       
        @if (Auth::user())
        <li class="nav-item"><a href=" {{ route('logout') }}" class="nav-link " >logout</a></li>
        @else
        <li class="nav-item"><a href=" {{ route('login') }}" class="nav-link" >login</a></li>
        @endif

        
      </ul>
    </header>
  </div>