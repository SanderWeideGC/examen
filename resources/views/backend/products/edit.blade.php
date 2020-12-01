@extends('backend.includes.layout')

@section('content')
    <div class="content p-4 uitklap">
        <div class="controls">
            <h2 class="mb-4">Toernooien</h2>
            <hr>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-white font-weight-bold">
                Nieuw Toernooi
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('products.update', $tournament) }}">
                    @csrf
                    @method('PUT')

                    <div class="col">
                        <label>Categorie</label>
                        <select name="tournamentParticipantAmount" class="form-control">
                            <option value="" disabled selected>Kies het aantal</option>
                            <option value="1" {{$product->ProductCategory == '1' ? 'selected' : ''}}>4</option>
                            <option value="2" {{$product->ProductCategory == '2' ? 'selected' : ''}}>8</option>
                            <option value="3" {{$product->ProductCategory == '3' ? 'selected' : ''}}>16</option>
                            <option value="4" {{$product->ProductCategory == '4' ? 'selected' : ''}}>32</option>

                        </select>
                        @error('tournamentParticipantAmount')
                        <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror


                        <div class="col">
                            <label>Naam</label>
                            <input type="text" class="form-control" name="ProductName"
                                   value="{{ $products->ProductName }}" placeholder="Naam">
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
