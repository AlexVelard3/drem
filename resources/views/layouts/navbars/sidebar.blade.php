<div class="sidebar" data-color="danger" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg') }}">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('DREM') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <!-- <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li> -->
      
      @can('superAdmin_index')
      <li class="nav-item {{ ($activePage == 'superAdmin' || $activePage == 'permissions' || $activePage == 'roles') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#superAdmin" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
          <p>{{ __('SuperAdmin') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="superAdmin">
          <ul class="nav">
            @can('user_index')
            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.index') }}">
                <i class="material-icons">content_paste</i>
                  <p>Usuarios</p>
              </a>
            </li>
            @endcan
            @can('permission_index')
            <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('permissions.index') }}">
                <i class="material-icons">bubble_chart</i>
                <p>{{ __('Permisos') }}</p>
              </a>
            </li>
            @endcan
            @can('role_index')
            <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('roles.index') }}">
                <i class="material-icons">location_ons</i>
                  <p>{{ __('Roles') }}</p>
              </a>
            </li>
            @endcan
          </ul>
        </div>
      </li>
      @endcan
      @can('supervisor_index')
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#supervisor" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
          <p>{{ __('Supervisor') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse hide" id="supervisor">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      @endcan
      @can('administrator_index')
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#administrator" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
          <p>{{ __('Administrador') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse hide" id="administrator">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'administrator' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('administrator.index') }}">
                <span class="sidebar-mini"> AI </span>
                <span class="sidebar-normal">{{ __('Asignación de IGAFOM') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      @endcan

      @can('evaluator_index')
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#evaluator" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
          <p>{{ __('Evaluador') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse hide" id="evaluator">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      @endcan

      @can('register_index')
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#register" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
          <p>{{ __('Registrador') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse hide" id="register">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.index') }}">
                <i class="material-icons">content_paste</i>
                  <p>Usuarios</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'registers' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('registers.index') }}">
                <span class="sidebar-mini"> RD </span>
                <span class="sidebar-normal">{{ __('Registrar Documentos') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'registers_igafom' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('registers_igafom.index') }}">
                <span class="sidebar-mini"> RI </span>
                <span class="sidebar-normal"> {{ __('Registro de IGAFOM') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      @endcan
      
      @can('legalSpecialist_index')
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#legalSpecialist" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
          <p>{{ __('Especialista Legal') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse hide" id="legalSpecialist">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      @endcan
      <!-- <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
   
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li> -->
    </ul>
  </div>
</div>
