@extends('layouts.main',['activePage'=>'users','titlePage'=>'Detalles del usuario'])
@section('content') 
<div class="content"> <div class="container-fluid"> <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Usuarios</h4>
                <p class="card-category">Usuarios registrados {{ $user->name }}</p>
            </div>

            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="card-body">
                                <p class="card-text">
                                    <div class="author">
                                        <a href="#" >
                                            <img src="{{ asset('/img/user_profile.png') }}" alt="image" class="avatar">
                                            <h5 class="title mt-3">{{ $user->username }}</h5>
                                        </a>
                                        <p class="description">
                                            {{ $user->id }} <br>
                                            {{ $user->username }} <br>
                                            {{ $user->email }}<br>
                                            {{ $user->created_at }} <br>
                                        </p>
                                    </div>
                                </p>
                                <div class="card-description">
                                    @forelse ($user->roles as $role)
                                        <span class="badge rounded-pill bg-dark text-white">{{ $role->name }}</span>
                                    @empty
                                        <span class="badge bg-danger text-white">No hay descripción</span>
                                    @endforelse
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
                                            <h5 class="title mx-3">{{ $user->username }}</h5>
                                        </a>
                                        <p class="description">
                                            {{ $user->id }} <br>
                                            {{ $user->username }} <br>
                                            {{ $user->email }}<br>
                                            {{ $user->created_at }} <br>
                                        </p>
                                    </div>
                                </p>
                                <div class="card-description">
                                    @forelse ($user->roles as $role)
                                        <span class="badge rounded-pill bg-dark text-white">{{ $role->name }}</span>
                                    @empty
                                        <span class="badge bg-danger text-white">No hay descripción</span>
                                    @endforelse
                                </div>
                                <div class="card-footer">
                                    <div class="button-container">
                                        <a href="{{ route('users.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-twitter">Editar</a>
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
