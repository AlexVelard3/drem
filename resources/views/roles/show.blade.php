@extends('layouts.main',['activePage'=>'roles','titlePage'=>'Detalles del role'])
@section('content') 
<div class="content"> <div class="container-fluid"> <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Permiso</h4>
                <p class="card-category">Permiso registrado {{ $role->name }}</p>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="card-body">
                                <p class="card-text">
                                    <div class="author">
                                        <a href="#" >
                                            <img src="{{ asset('/img/user_profile.png') }}" alt="image" class="avatar">
                                            <h5 class="title mt-3">{{ $role->name }}</h5>
                                        </a>
                                        <p class="description">
                                            {{ $role->id }} <br>
                                            {{ $role->name }} <br>
                                            {{ $role->guard_name }}<br>
                                            {{ $role->created_at }} <br>
                                        </p>
                                    </div>
                                </p>
                                <div class="card-description">
                                    @forelse ($role->permissions as $permission)
                                        <span class="badge rounded-pill bg-dark text-white">{{ $permission->name }}</span>
                                    @empty
                                        <span class="badge bg-danger text-white">No hay descripción</span>
                                    @endforelse
                                    <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsum blanditiis non id sapiente optio, quo harum voluptatibus nobis asperiores eos alias fugit et velit molestiae deserunt, temporibus molestias mollitia! -->
                                </div>
                                <div class="card-footer">
                                    <div class="button-container">
                                        <button class="btn btn-sm btn-primary">Editar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="card-body">
                                <p class="card-text">
                                    <div class="author">
                                        <a href="#" class="d-flex" >
                                            <img src="{{ asset('/img/user_profile.png') }}" alt="image" class="avatar">
                                            <h5 class="title mx-3">{{ $role->name }}</h5>
                                        </a>
                                        <p class="description">
                                            {{ $role->id }} <br>
                                            {{ $role->name }} <br>
                                            {{ $role->guard_name }}<br>
                                            {{ $role->created_at }} <br>
                                        </p>
                                    </div>
                                </p>
                                <div class="card-description">
                                    @forelse ($role->permissions as $permission)
                                        <span class="badge rounded-pill bg-dark text-white">{{ $permission->name }}</span>
                                    @empty
                                        <span class="badge rounded-pill bg-dark text-white">No hay descripción</span>
                                    @endforelse
                                    <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsum blanditiis non id sapiente optio, quo harum voluptatibus nobis asperiores eos alias fugit et velit molestiae deserunt, temporibus molestias mollitia! -->
                                </div>
                                <div class="card-footer">
                                    <div class="button-container">
                                        <a href="{{ route('roles.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                        <a href="#" class="btn btn-sm btn-twitter">Editar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection
