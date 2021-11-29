@extends('layouts.app', ['activePage' => 'clientes', 'titlePage' => __('Cadastro de Clientes')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-12 text-left">
            <a href="{{ route('clientes.create') }}" class="btn btn-info">Novo Cliente</a>
          </div>
        </div>
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Lista de Clientes</h4>
            <p class="card-category"> Aqui estão listados todos os clientes cadastrados no sistema!</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Nome
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Expiração FX
                  </th>
                  <th>
                    Expiração B3
                  </th>
                  <th>
                    Expiração COPY
                  </th>
                </thead>
                <tbody>
                  @foreach ($clientes as $cliente)
                    <tr>
                      <td>{{ $cliente->id }}</td>
                      <td>{{ $cliente->nome }}</td>
                      <td>{{ $cliente->email }}</td>
                      <td>{{ $cliente->expiracaoFX }}</td>
                      <td>{{ $cliente->expiracaoB3 }}</td>
                      <td>{{ $cliente->expiracaoCOPY }}</td>
                      <td>
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
                          <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">Remover</button>
                        </form>
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
</div>
@endsection