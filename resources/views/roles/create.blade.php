@extends('layouts.main',['activePage'=>'roles','titlePage'=>'Nuevo role'])
@section('content') 
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="POST" action="{{ route('roles.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Role</h4>
                <p class="card-category">Ingresar Datos</p>
              </div>
              <div class="card-body ">

                <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">{{ __( 'Nombre del role' ) }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Ingrese el role') }}" value="{{ old('name', null) }}" required="true" aria-required="true" autofocus/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Permisos</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <div class="tab-content">
                        <div class="tab-pane active">
                          <table class="table">
                            <tbody>
                              @foreach ( $permissions as $id=>$permission )
                              <tr>
                                <td>
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input" name="permissions[]" value="{{ $id }}">
                                      <span class="form-check-sign">
                                        <span class="check"></span>
                                      </span>
                                    </label>
                                  </div>
                                </td> 
                                <td>
                                  {{ $permission }} 
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button href="{{ route('roles.index') }}" type="button" class="btn btn-outline-primary">{{ __('Cancelar') }}</button>
                <button type="submit" class="btn btn-outline-primary">{{ __('Guardar') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection