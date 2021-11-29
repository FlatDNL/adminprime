@extends('layouts.app', ['activePage' => 'clientes', 'titlePage' => __('Cadastro de Clientes')])

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                  <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                  </div>
                  <h4 class="card-title">Novo Cliente -
                    <small class="category">Cadastro de novo pedido</small>
                  </h4>
                </div>
                <div class="card-body">
                  <form method="post" action="{{ route('clientes.store') }}">
                    @csrf
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group{{ $errors->has('nome') ? ' has-danger' : '' }}">
                          <label class="bmd-label-floating">Nome</label>
                          <input type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" id="nome" value="{{ old('nome') }}">
                            @if ($errors->has('nome'))
                                <span id="nome-error" class="error text-danger" for="nome">{{ $errors->first('nome') }}</span>
                            @endif
                            </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Empresa</label>
                          <input type="text" class="form-control" name="empresa" id="empresa" value="{{ old('empresa') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Conta Demo FXPRIME</label>
                          <input type="text" class="form-control" name="ctDemoFX" id="ctDemoFX" value="{{ old('ctDemoFX') }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Conta Demo B3PRIME</label>
                          <input type="text" class="form-control" name="ctDemoB3" id="ctDemoB3" value="{{ old('ctDemoB3') }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Conta Demo COPY</label>
                          <input type="text" class="form-control" name="ctDemoCOPY" id="ctDemoCOPY" value="{{ old('ctDemoCOPY') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Conta Real FXPRIME</label>
                          <input type="text" class="form-control" name="ctRealFX" id="ctRealFX" value="{{ old('ctRealFX') }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Conta Real B3PRIME</label>
                          <input type="text" class="form-control" name="ctRealB3" id="ctRealB3" value="{{ old('ctRealB3') }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Conta Real COPY</label>
                          <input type="text" class="form-control" name="ctRealCOPY" id="ctRealCOPY" value="{{ old('ctRealCOPY') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Data Expiração FXPRIME</label>
                          <label class="bmd-label-floating"></label>
                          <input type="date" class="form-control" name="expiracaoFX" id="expiracaoFX" value="{{ old('expiracaoFX') }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                        <label>Data Expiração B3PRIME</label>
                          <label class="bmd-label-floating"></label>
                          <input type="date" class="form-control" name="expiracaoB3" id="expiracaoB3" value="{{ old('expiracaoB3') }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                        <label>Data Expiração COPY</label>
                          <label class="bmd-label-floating"></label>
                          <input type="date" class="form-control" name="expiracaoCOPY" id="expiracaoCOPY" value="{{ old('expiracaoCOPY') }}">
                        </div>
                      </div>
                    </div>                    
                    <button type="submit" class="btn btn-rose pull-right">Salvar</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
@endsection