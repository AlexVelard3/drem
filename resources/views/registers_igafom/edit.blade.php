@extends('layouts.main',['activePage'=>'registers_igafom','titlePage'=>'Actualizar documento'])
@section('content') 
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="#" autocomplete="off" class="form-horizontal">
          
            @csrf
            @method('PUT')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Documentos IGAFOM</h4>
                <p class="card-category">Añadir Datos</p>
              </div>
              
              <div class="card-body ">
                <form>
                  <div class="row">
                    <label for="name_applicant" class="col-sm-2 col-form-label">{{ __( 'Solicitante' ) }}</label>
                    <div class="col">
                      <div class="form-group{{ $errors->has('name_applicant') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('name_applicant') ? ' is-invalid' : '' }}" name="name_applicant" id="input-name_applicant" type="text" placeholder="{{ __('Ingrese el nombre') }}" value="{{ old('name_applicant', $register->name_applicant) }}" required="true" aria-required="true" disabled/>
                        @if ($errors->has('name_applicant'))
                          <span id="name_applicant-error" class="error text-danger" for="input-name_applicant">{{ $errors->first('name_applicant') }}</span>
                        @endif
                      </div>
                    </div>
                    
                    <label for="ruc" class="col-sm-2 col-form-label">{{ __( 'RUC' ) }}</label>
                    <div class="col">
                      <div class="form-group{{ $errors->has('ruc') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('ruc') ? ' is-invalid' : '' }}" name="ruc" id="input-ruc" type="number" placeholder="{{ __('Ingrese el RUC') }}" value="{{ old('ruc', $register->ruc) }}" required="true" aria-required="true" disabled/>
                        @if ($errors->has('ruc'))
                          <span id="ruc-error" class="error text-danger" for="input-ruc">{{ $errors->first('ruc') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                </form>

                <form>
                  <div class="row">

                    <label for="type" class="col-sm-2 col-form-label">{{ __( 'Tipo de Documento' ) }}</label>
                    <div class="col">
                      <div class="form-group{{ $errors->has('type') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" id="input-type" type="text" placeholder="{{ __('Tipo de documento') }}" value="{{ old('type', $register->type) }}" required="true" aria-required="true" disabled/>
                        @if ($errors->has('type'))
                          <span id="type-error" class="error text-danger" for="input-type">{{ $errors->first('type') }}</span>
                        @endif
                      </div>
                    </div>

                    <label for="number_register" class="col-sm-2 col-form-label">{{ __( 'N° Registro' ) }}</label>
                    <div class="col">
                      <div class="form-group{{ $errors->has('number_register') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('number_register') ? ' is-invalid' : '' }}" name="number_register" id="input-number_register" type="number" placeholder="{{ __('Ingrese N° de registro') }}" value="{{ old('number_register', $register->number_register) }}" required="true" aria-required="true" disabled/>
                        @if ($errors->has('number_register'))
                          <span id="number_register-error" class="error text-danger" for="input-number_register">{{ $errors->first('number_register') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                </form>

                  <div class="row">
                    <label for="number_folios" class="col-sm-2 col-form-label">{{ __( 'Folios' ) }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('number_folios') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('number_folios') ? ' is-invalid' : '' }}" name="number_folios" id="input-number_folios" type="number" placeholder="{{ __('Ingrese N° de folios') }}" value="{{ old('number_folios', $register->number_folios) }}" required="true" aria-required="true" disabled/>
                        @if ($errors->has('folios'))
                          <span id="number_folios-error" class="error text-danger" for="input-number_folios">{{ $errors->first('number_folios') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>

                <form>
                  <div class="row">
                    <label for="date" class="col-sm-2 col-form-label">{{ __( 'Fecha de Ingreso' ) }}</label>
                    <div class="col">
                      <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" id="input-date" type="date" placeholder="{{ __('Ingrese la fecha de ingreso') }}" value="{{ old('date', $register->date) }}" required="true" aria-required="true" disabled/>
                        @if ($errors->has('date'))
                          <span id="date-error" class="error text-danger" for="input-date">{{ $errors->first('date') }}</span>
                        @endif
                      </div>
                    </div>
                    <label for="hour" class="col-sm-2 col-form-label">{{ __( 'Hora de Ingreso' ) }}</label>
                    <div class="col">
                      <div class="form-group{{ $errors->has('hour') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('hour') ? ' is-invalid' : '' }}" name="hour" id="input-hour" type="time" placeholder="{{ __('Ingrese la hora de ingreso') }}" value="{{ old('hour', $register->hour) }}" required="true" aria-required="true" disabled/>
                        @if ($errors->has('hour'))
                          <span id="hour-error" class="error text-danger" for="input-hour">{{ $errors->first('hour') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                </form>

                <form>
                  <div class="row">
                    <label for="type_cp" class="col-sm-2 col-form-label">{{ __( 'type_cp' ) }}</label>
                    <div class="col">
                      <div class="form-group{{ $errors->has('type_cp') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('type_cp') ? ' is-invalid' : '' }}" name="type_cp" id="input-type_cp" type="text" placeholder="{{ __('Ingrese') }}" value="{{ old('type_cp', $register->type_cp) }}" required="true" aria-required="true" autofocus/>
                        @if ($errors->has('type_cp'))
                          <span id="type_cp-error" class="error text-danger" for="input-type_cp">{{ $errors->first('type_cp') }}</span>
                        @endif
                      </div>
                    </div>
                    <label for="type_ic" class="col-sm-2 col-form-label">{{ __( 'type_ic' ) }}</label>
                    <div class="col">
                      <div class="form-group{{ $errors->has('type_ic') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('type_ic') ? ' is-invalid' : '' }}" name="type_ic" id="input-type_ic" type="text" placeholder="{{ __('Ingrese') }}" value="{{ old('type_ic', $register->type_ic) }}" required="true" aria-required="true"/>
                        @if ($errors->has('type_ic'))
                          <span id="type_ic-error" class="error text-danger" for="input-type_ic">{{ $errors->first('type_ic') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-outline-primary">{{ __('Añadir') }}</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection