@extends('layouts.main',['activePage'=>'permissions','titlePage'=>'Nuevo permiso'])
@section('content') 
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="POST" action="{{ route('permissions.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Permiso</h4>
                <p class="card-category">Ingresar Datos</p>
              </div>
              <div class="card-body ">

                <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">{{ __( 'Nombre del permiso' ) }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Ingrese su nombre') }}" value="{{ old('name', null) }}" required="true" aria-required="true" autofocus/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button href="{{ route('permissions.index') }}" type="button" class="btn btn-outline-primary">{{ __('Cancelar') }}</button>
                <button type="submit" class="btn btn-outline-primary">{{ __('Guardar') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection