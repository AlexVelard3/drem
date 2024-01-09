@extends('layouts.main',['activePage'=>'registers_igafom','titlePage'=>'Registrador'])
@section('content') 
<div class="content"> <div class="container-fluid"> <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">IGAFOM</h4>
                <p class="card-category">IGAFOM registrados</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N° Registro</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Code/Item</th>
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
                                            <h6 class="mb-0 text-xs">{{ $register->number_register }}</h6>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-normal">{{ $register->code_item }}</span>
                                </td>
                                <td class="td-actions text-right align-middle">
                                    <a href="{{ route('registers_igafom.edit', $register->id) }}" class="btn btn-outline-warning">
                                        <i class="material-icons">edit</i>             
                                    </a>
                                    <form action="{{ route('registers_igafom.destroy', $register->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Seguro que quieres eliminar?')">
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