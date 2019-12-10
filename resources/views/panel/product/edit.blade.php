@extends('template.template')
@section('content')

<div class="card">
    <div class="card-header card-header-info">
    <h4 class="card-title ">Cadastrar produto</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')
          <div class="row">
            <div class="col">
              <input type="text" name="name" class="form-control" placeholder="Nome do produto" value="{{ $product->name }}" required>
            </div>
            <div class="col">
              <input type="number" name="quantity" class="form-control" placeholder="Quantidade" value="{{ $product->quantity }}" required>
            </div>
            <div class="col">
              <input type="text" name='value' class="form-control" placeholder="Valor do produto R$" value="{{ $product->value }}" required>
            </div>
          </div>
        
          <div class="row">
              <div class="col">
                  <textarea class="form-control" name='description' placeholder="Descrição do produto" name="description"cols="30" rows="10"  required>{{ $product->description }}</textarea>
              </div>
          </div>
          <div class="row">
              <div class="col">
                  <input type="submit" class="btn btn-info" value="Editar">
                  <input type="reset" class="btn btn-danger" value="Limpar">

              </div>
          </div>
        
        </form>
    </div>
</div>

@endSection