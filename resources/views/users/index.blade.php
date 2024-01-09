@extends('layouts.main',['activePage'=>'users','titlePage'=>'Usuarios'])
@section('content') 
<div class="content"> <div class="container-fluid"> <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Usuarios</h4>
                <p class="card-category">Usuarios registrados</p>
            </div>
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success" role="success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="row">
                    <div class="col-12 text-right">
                      <a href="{{ route('users.create') }}" class="btn btn-sm btn-facebook">Añadir usuario</a>  
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usuario</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Roles</th>
                                <th class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{ $user->id }}
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="#" class="avatar avatar-sm me-3">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">{{ $user->name }}</h6>
                                            <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $user->email }}</p>
                                    <p class="text-xs text-secondary mb-0"></p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-normal">{{ $user->username }}</span>
                                </td>
                                <td class="align-middle text-center">  
                                    @forelse ( $user->roles as $role )
                                        <span class="badge badge-info">{{ $role->name }}</span>
                                    @empty
                                    <span class="badge badge-danger">No hay role agregado</span>
                                    @endforelse
                                </td>
                                <td class="td-actions text-right align-middle">
                                    @can('user_show')
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-success">
                                        <i class="material-icons">person</i>             
                                    </a>
                                    @endcan
                                    @can('user_edit')
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-warning">
                                        <i class="material-icons">edit</i>             
                                    </a>
                                    @endcan
                                    @can('user_destroy')
                                    <form action="{{ route('users.delete', $user->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Estas seguro de eliminar') ">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" rel="tooltip" class="btn btn-outline-danger">
                                            <i class="material-icons">delete</i>             
                                        </button>
                                    </form>

                                    <!-- <script>
                                        function confirmDelete(id) {
                                            const swalWithBootstrapButtons = Swal.mixin({
                                            customClass: {
                                                confirmButton: 'btn btn-success',
                                                cancelButton: 'btn btn-danger'
                                            },
                                            buttonsStyling: false
                                            })

                                            swalWithBootstrapButtons.fire({
                                            title: 'Are you sure?',
                                            text: "You won't be able to revert this!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonText: 'Yes, delete it!',
                                            cancelButtonText: 'No, cancel!',
                                            reverseButtons: true
                                            }).then((result) => {
                                            if (result.isConfirmed) {
                                                swalWithBootstrapButtons.fire(
                                                'Deleted!',
                                                'Your file has been deleted.',
                                                'success'
                                                )
                                            } else if (
                                                /* Read more about handling dismissals below */
                                                result.dismiss === Swal.DismissReason.cancel
                                            ) {
                                                swalWithBootstrapButtons.fire(
                                                'Cancelled',
                                                'Your imaginary file is safe :)',
                                                'error'
                                                )
                                            }
                                        })
                                    }
                                    </script> -->
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer mr-auto">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection



