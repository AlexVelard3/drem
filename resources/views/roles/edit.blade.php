@extends('layouts.main',['activePage'=>'roles','titlePage'=>'Actualizar role'])
@section('content') 
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('roles.update', $role->id) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Role</h4>
                <p class="card-category">Actualizar Datos</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Ingrese el role') }}" value="{{ old('name', $role->name) }}" required="true" aria-required="true" autofocus/>
                     
                    </div>
                  </div>
                </div>

              </div>

              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-outline-primary">{{ __('Actualizar') }}</button>
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
                                      <input type="checkbox" class="form-check-input" name="permissions[]" value="{{ $id }}" {{ $role->permissions->contains($id) ? 'checked' : '' }}>
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
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection