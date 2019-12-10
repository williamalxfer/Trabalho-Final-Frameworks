@extends('template.template')

@section('content')
<div class="row">


    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-info">
                <h4 class="card-title ">Produtos</h4>
                <p class="card-category">
                    <div class="float-right mutet-text">
                        <a href="{{ route('products.create') }}">
                            <b>
                                Adicionar <i class="material-icons">
                                    add_shopping_cart
                                </i>
                            </b>
                        </a>
                    </div>
                </p>
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
                                Quantidade
                            </th>
                            <th>
                                Valor R$
                            </th>
                            <th>
                                Editar
                            </th>
                            <th>
                                Deletar
                            </th>
                        </thead>
                        <tbody>
                            @foreach($products as $p)
                            <tr>
                                <td>
                                    {{ $p->id }}
                                </td>
                                <td>
                                    {{ $p->name }}
                                </td>
                                <td>
                                    {{ $p->quantity }}
                                </td>
                                <td>
                                    {{ $p->value }}
                                </td>
                                <td class="text-primary">
                                    <div>
                                        <a href="{{ route('products.edit', $p) }}">
                                            <i class="material-icons">
                                                edit
                                            </i>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    @include('panel.product.delete', ['p' => $p ] )
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
@endsection