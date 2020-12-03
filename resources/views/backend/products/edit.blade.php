@extends('backend.includes.layout')

@section('content')
    <div class="content p-4 uitklap">
        <div class="controls">
            <h2 class="mb-4">Producten</h2>
            <hr>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-white font-weight-bold">
                Product bewerken
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('products.update', $product) }}">
                    @csrf
                    @method('PUT')

                    <div class="col">
                        <label>Categorie</label>
                        <select name="ProductCategory" class="form-control">
                            <option value="" disabled selected>Categorie</option>
                            <option value="1" {{$product->ProductCategory == 'Koude dranken' ? 'selected' : ''}}>Koude dranken</option>
                            <option value="2" {{$product->ProductCategory == 'Warme dranken' ? 'selected' : ''}}>Warme dranken</option>
                            <option value="3" {{$product->ProductCategory == 'Snacks' ? 'selected' : ''}}>Snacks</option>

                        </select>
                        @error('ProductCategory')
                        <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror


                        <div class="col">
                            <label>Naam</label>
                            <input type="text" class="form-control" name="ProductName"
                                   value="{{ $product->ProductName }}" placeholder="Naam">
                            @error('ProductName')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col">
                            <label>Prijs</label>
                            <input type="text" class="form-control" name="ProductPrice"
                                   value="{{ $product->ProductPrice }}" placeholder="Prijs">
                            @error('ProductPrice')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror
                        </div>

                    </div>

            <button type="submit" class="btn btn-primary">Opslaan</button>
            </form>
        </div>
    </div>
    </div>
@endsection
