@extends('layouts.app')

@section('content')
    <form action="{{route('clientes.update', $cliente)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nome">nome:</label>
            <input class="form-control" type="text" name="nome" id="nome" value="{{ $cliente->pessoa->nome }}">
        </div>
        <div class="form-group">
            <label for="email">email:</label>
            <input class="form-control" type="email" name="email" id="email" value="{{ $cliente->pessoa->email }}">
        </div>
        <div class="form-row">
            <div class="col">
                <label for="senha">senha:</label>
                <input class="form-control" type="password" name="senha" id="senha">
            </div>
            <div class="col">
                <label for="senha_confirmation">senha confirmation:</label>
                <input class="form-control" type="password" name="senha_confirmation" id="senha_confirmation">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4">
                <label for="telefone">telefone:</label>
                <input class="form-control" type="text" name="telefone" id="telefone" value="{{ $cliente->telefone }}">
            </div>
            <div class="col-md-4">
                <label for="CPF">CPF:</label>
                <input class="form-control" type="text" name="CPF" id="CPF" value="{{ $cliente->pessoa->CPF }}">
            </div>
            <div class="col-md-4">
                <label for="nascimento">nascimento:</label>
                <input class="form-control" type="date" name="nascimento" id="nascimento"
                       value="{{ $cliente->pessoa->nascimento }}">
            </div>
        </div>
        <div class="form-group">
            <label for="tipo">tipo</label>
            <div class="radio">
                <label><input type="radio" name="tipo" value="consumidor"
                              id="consumidor" {{ ( $cliente->tipo == 'consumidor' ) ? 'checked' : ''}} >consumidor</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="tipo" value="revendedor"
                              id="revendedor" {{ ( $cliente->tipo == 'revendedor' ) ? 'checked' : ''}} >revendedor</label>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4">
                <label for="cidade">cidade:</label>
                <input class="form-control" type="text" name="cidade" id="cidade"
                       value="{{ $cliente->pessoa->endereco->cidade }}">
            </div>
            <div class="col-md-4">
                <label for="bairro">bairro:</label>
                <input class="form-control" type="text" name="bairro" id="bairro"
                       value="{{ $cliente->pessoa->endereco->bairro }}">
            </div>
            <div class="col-md-4">
                <label for="CEP">CEP:</label>
                <input class="form-control" type="text" name="CEP" id="CEP"
                       value="{{ $cliente->pessoa->endereco->CEP }}">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-8">
                <label for="rua">rua:</label>
                <input class="form-control" type="text" name="rua" id="rua"
                       value="{{ $cliente->pessoa->endereco->rua }}">
            </div>
            <div class="col-md-4">
                <label for="numero">numero:</label>
                <input class="form-control" type="text" name="numero" id="numero"
                       value="{{ $cliente->pessoa->endereco->numero }}">
            </div>
        </div>
        <div>
            <input class="btn btn-primary" type="submit" value="cadastrar">
        </div>
    </form>
@endsection
