@extends('layouts.main',['activePage'=>'roles','titlePage'=>'Roles'])
@section('content') 
<div class="content"> <div class="container-fluid"> <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Roles</h4>
                <p class="card-category">Roles registrados</p>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-12 text-right">
                      <a href="{{ route('roles.create') }}" class="btn btn-sm btn-facebook">Añadir role</a>  
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Guard</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">fecha Creada</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Permisos</th>
                                <th class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $roles as $role )
                            <tr>
                                <td>
                                    {{ $role->id }}
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-normal">{{ $role->name }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-normal">{{ $role->guard_name }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-normal">{{ $role->created_at->toFormattedDateString() }}</span>
                                </td>
                                <td>
                                    @forelse ( $role->permissions as $permission )
                                        <span class="badge badge-info">{{ $permission->name }}</span>
                                    @empty
                                    <span class="badge badge-danger">No hay permisos agregados</span>
                                    @endforelse
                                </td>
                                <td class="td-actions text-right align-middle">
                                    @can('role_edit')
                                    <a href="{{ route('roles.show', $role->id) }}" class="btn btn-outline-success">
                                        <i class="material-icons">person</i>             
                                    </a>
                                    @endcan
                                    @can('role_edit')
                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-outline-warning">
                                        <i class="material-icons">edit</i>             
                                    </a>
                                    @endcan
                                    @can('role_edit')
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Seguro que quieres eliminar?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" rel="tooltip" class="btn btn-outline-danger">
                                            <i class="material-icons">delete</i>             
                                        </button>
                                    </form>
                                    @endcan
                                </td>
                            </tr>
                            @empty
                            No hay permiso registrado
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer mr-auto">
                {{ $roles->links() }}
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection



