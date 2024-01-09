@extends('layouts.main',['activePage'=>'permissions','titlePage'=>'Permisos'])
@section('content') 
<div class="content"> <div class="container-fluid"> <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Permisos</h4>
                <p class="card-category">Permisos registrados</p>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-12 text-right">
                    @can('permission_create')
                      <a href="{{ route('permissions.create') }}" class="btn btn-sm btn-facebook">Añadir permisos</a>  
                    @endcan
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
                                <th class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $permissions as $permission )
                            <tr>
                                <td>
                                    {{ $permission->id }}
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-normal">{{ $permission->name }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-normal">{{ $permission->guard_name }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-normal">{{ $permission->created_at }}</span>
                                </td>
                                <td class="td-actions text-right align-middle">
                                    @can('permission_show')
                                    <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-outline-success">
                                        <i class="material-icons">person</i>             
                                    </a>
                                    @endcan
                                    @can('permission_edit')
                                    <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-outline-warning">
                                        <i class="material-icons">edit</i>             
                                    </a>
                                    @endcan
                                    @can('permission_destroy')
                                    <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Seguro que quieres eliminar?')">
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
                {{ $permissions->links() }}
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection



