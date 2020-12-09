@extends('backend.includes.layout')

@section('content')
<div class="content p-4 uitklap">
    <div class="controls">
        <h2 class="mb-4">Producten</h2>
        <hr>
        <a class="btn btn-dark btn-lg" href="{{ route('products.create') }}" role="button"><i class="fas fa-plus-circle"></i> Toevoegen</a>
    </div>

    <div class="card mb-4">
        <div class="card-body table-responsive">
            <table id="example" class="table table-hover" cellspacing="0" width="100%">
                <thead>
                        <tr>
                            <th>ID</th>
                            <th>Categorie</th>
                            <th>Naam</th>
                            <th>Prijs</th>
                            <th class="actions">Acties</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->formatProductCategory() }}</td>
                            <td>{{ $product->ProductName }}</td>
                            <td>€ {{ $product->ProductPrice }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product) }}" class="btn btn-icon btn-pill btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-fw fa-edit"></i></a>
                                <button class="btn btn-icon btn-pill btn-danger removeButton" data-id="{{ $product->id }}" data-type="kantine" data-toggle="tooltip" title="Delete"><i class="fa fa-fw fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
