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
                            <input type="text" class="form-control" name="ProductName" value="{{ old('ProductName') }}" placeholder="Productnaam">
                            @error('ProductName')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label>Categorie:</label>
                            <select name="ProductCategory" class="form-control">
                                <option value="" disabled selected>Kies de categorie</option>
                                <option value="1" {{old('ProductCategory') == 'Koude dranken' ? 'selected' : ''}}>Koude dranken</option>
                                <option value="2" {{old('ProductCategory') == 'Warme dranken' ? 'selected' : ''}}>Warme dranken</option>
                                <option value="3" {{old('ProductCategory') == 'Snacks' ? 'selected' : ''}}>Snacks</option>
                            </select>

                            @error('ProductCategory')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror

                        </div>

                    </div>

                    <div class="row form-group">
                        <div class="col">
                            <label>Productprijs</label>
                            <input type="text" class="form-control" name="ProductPrice" value="{{ old('ProductPrice') }}" placeholder="Prijs">
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
