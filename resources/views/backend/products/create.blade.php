@extends('backend.includes.layout')

@section('content')
{{--    <div class="row">--}}
{{--        <div class="col-sm-8 offset-sm-2">--}}
{{--            <h1 class="display-3">Product toevoegen</h1>--}}

{{--            <div>--}}
{{--                @if ($errors->any())--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        <ul>--}}
{{--                            @foreach ($errors->all() as $error)--}}
{{--                                <li>{{ $error }}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div><br />--}}
{{--                @endif--}}
{{--                <form method="post" action="{{ route('products.store') }}">--}}
{{--                    @csrf--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="ProductCategory">Product Category:</label>--}}
{{--                        <select name="ProductCategory" class="form-control">--}}
{{--                            <option selected disabled>Selecteer type</option>--}}
{{--                            <option value="1">Eten</option>--}}
{{--                            <option value="2">Drinken</option>--}}
{{--                        </select>--}}

{{--                    </div>--}}



{{--                    <div class="form-group">--}}
{{--                        <label for="ProductName">Product Name:</label>--}}
{{--                        <input type="text" class="form-control" name="ProductName"/>--}}
{{--                    </div>--}}



{{--                    <div class="form-group">--}}
{{--                        <label for="ProductPrice">Product Price:</label>--}}
{{--                        <input type="text" class="form-control" name="ProductPrice"/>--}}
{{--                    </div>--}}

{{--                    <input type="submit" class="btn btn-outline-primary" value="Add Product">--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}

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
                                <option value="1" {{old('ProductCategory') == 'Snacks' ? 'selected' : ''}}>Snacks</option>
                                <option value="2" {{old('ProductCategory') == 'Koude dranken' ? 'selected' : ''}}>Koude dranken</option>
                                <option value="3" {{old('ProductCategory') == 'Warme dranken' ? 'selected' : ''}}>Warme dranken</option>
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
