@extends('backend.includes.layout')

@section('content')
    <div class="content p-4 uitklap">
        <div class="controls">
            <h2 class="mb-4">Kantine - Product toevoegen</h2>
            <hr>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-white font-weight-bold">
                Nieuw Product
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    <div class="row form-group">
                        <div class="col">
                            <label>Productnaam</label>
                            <input type="text" class="form-control" name="productTitle" value="{{ old('productTitle') }}" placeholder="Productnaam">
                            @error('productTitle')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label>Categorie:</label>
                            <select name="productCategorie" class="form-control">
                                <option value="" disabled selected>Kies de categorie</option>
                                <option value="1" {{old('productCategorie') == 'Snacks' ? 'selected' : ''}}>Snacks</option>
                                <option value="2" {{old('productCategorie') == 'Koude dranken' ? 'selected' : ''}}>Koude dranken</option>
                                <option value="3" {{old('productCategorie') == 'Warme dranken' ? 'selected' : ''}}>Warme dranken</option>
                            </select>

                            @error('productCategorie')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror

                        </div>

                    </div>

                    <div class="row form-group">
                        <div class="col">
                            <label>Productprijs</label>
                            <input type="text" class="form-control" name="productPrice" value="{{ old('productPrice') }}" placeholder="Prijs">
                            @error('productPrice')
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
