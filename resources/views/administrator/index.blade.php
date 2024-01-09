@extends('layouts.main',['activePage'=>'administrator','titlePage'=>'Administrador'])
@section('content') 
<div class="content"> <div class="container-fluid"> <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Asignar</h4>
                <p class="card-category">Asignación registradas</p>
            </div>
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success" role="success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="row">
                    <div class="col-12 text-right">
                      <a href="{{ route('administrator.create') }}" class="btn btn-sm btn-facebook">Asignar</a>  
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Responsable</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">IGAFOM</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                                <th class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        
                    </table>
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



