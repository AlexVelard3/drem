@extends('layouts.main',['activePage'=>'registers','titlePage'=>'Registrador'])
@section('content') 
<div class="content"> <div class="container-fluid"> <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Documentos</h4>
                <p class="card-category">Documentos registrados</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 text-right">
                      <a href="{{ route('registers.create') }}" class="btn btn-sm btn-facebook">Añadir Documentos</a>  
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Solicitante</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">RUC</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tipo</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N° Registro</th>
                                <th class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registers as $register)
                            <tr>
                                <td>
                                    {{ $register->id }}
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">{{ $register->name_applicant }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $register->ruc }}</p>
                                </td>
                                <td>
                                    <p clzass="text-xs font-weight-bold mb-0">{{ $register->type }}</p>
                                    <p class="text-xs text-secondary mb-0"></p>
                                </td>

                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-normal">{{ $register->number_register }}</span>
                                </td>
                                <td class="td-actions text-right align-middle">
                                    <a href="{{ route('registers.edit', $register->id) }}" class="btn btn-outline-warning">
                                        <i class="material-icons">edit</i>             
                                    </a>
                                    <form action="{{ route('registers.destroy', $register->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Seguro que quieres eliminar?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" rel="tooltip" class="btn btn-outline-danger">
                                                <i class="material-icons">delete</i>             
                                            </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer mr-auto">
                {{ $registers->links() }}
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection



