




<li class="nav-item {{$activePage == 'Usuario/Editar' || $activePage == 'listausuario' || $activePage == 'Usuario/Novo' ? 'active' : '' }}">
    <a class="nav-link" data-toggle="collapse" href="#Usuarios" aria-expanded="true">
        <i class="fa fa-user"></i>
        {{-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> --}}
        <p>{{ __('Usuarios') }}
            <b class="caret"></b>
        </p>
    </a>
    <div class="collapse {{$activePage == 'Usuario/Editar' || $activePage == 'listausuario' || $activePage == 'Usuario/Novo' ? 'show' : '' }}" id="Usuarios">
        <ul class="nav">


          <li class="nav-item{{ $activePage == 'listausuario' ? ' active' : '' }}">
            {{-- <a class="nav-link" href="{{ route('Usuario/Lista') }}"> --}}
                <a class="nav-link" >
                <span class="sidebar-mini"> <i class="material-icons">content_paste_search</i> </span>
                <span class="sidebar-normal">{{ __('Lista') }} </span>
            </a>
        </li>


          <li class="nav-item{{ $activePage == 'Usuario/Novo' ? ' active' : '' }}">
            {{-- <a class="nav-link" href="{{ route('Usuario/Novo') }}"> --}}
                <a class="nav-link" >
                <i class="material-icons">person_add</i>
                <p>{{ __('Criar Usuario') }}</p>
            </a>
        </li>




        </ul>

    </div>
</li>
