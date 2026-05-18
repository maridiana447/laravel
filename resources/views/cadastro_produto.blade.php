@extends('layouts.principal')

@section('title', 'Cadastro de produtos')

@section('content')
<div class="container">
    <h3 class="text-center">Cadastro de Produto</h3>
    <div class="row mt-2 justify-content-center">
        <div class="col-lg-10 col-sm-12 col-md-10">
            <label for ="nome_produto">Nome do Produto</label>
            <input type="text" class="form-control form-control-sm" id="nome_produto" name="nome_produto" placeholder="Digite o nome do produto">
        </div>
        <div class="col-lg-10 col-sm-12 col-md-10 mt-2">
            <label for ="descricao_produto">Descrição do Produto</label>
            <textarea type="text" class="form-control form-control-sm" id="descricao_produto" name="descricao_produto" placeholder="Digite a descrição do produto"></textarea>
        </div>
    </div>

</div>

@endsection