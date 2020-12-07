@extends('backend.includes.layout')

@section('content')
<div class="content p-4 uitklap">
        <div class="controls">
            <h2 class="mb-4">Banen</h2>
            <hr>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-white font-weight-bold">
                Nieuwe Baan
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('lanes.store') }}">
                @csrf
                <div class="row form-group">
                    <div class="col">
                        <label>Naam</label>
                        <input type="text" class="form-control" name="laneName" value="{{ old('laneName') }}" placeholder="Naam">
                        @error('laneName')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label>Categorie</label>
                        <select name="laneCategory" class="form-control">
                            <option value="" disabled selected>Kies de categorie</option>
                            <option value="1" {{old('laneStatus') == '1' ? 'selected' : ''}}>Tennis</option>
                            <option value="2" {{old('laneStatus') == '2' ? 'selected' : ''}}>Squash</option>
                        </select>
                        @error('laneCategory')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label>Ligging</label>
                        <select name="lanePositioning" class="form-control">
                            <option value="" disabled selected>Kies de ligging</option>
                            <option value="1" {{old('lanePositioning') == '1' ? 'selected' : ''}}>Binnen</option>
                            <option value="2" {{old('lanePositioning') == '2' ? 'selected' : ''}}>Buiten</option>
                        </select>
                        @error('lanePositioning')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label>Lengte</label>
                        <input type="text" class="form-control" name="laneLenght" value="{{ old('laneLenght') }}" placeholder="Lengte">
                        @error('laneLenght')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label>Breedte</label>
                        <input type="text" class="form-control" name="laneWidth" value="{{ old('laneWidth') }}" placeholder="Breedte">
                        @error('laneWidth')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label>Vloer</label>
                        <input type="text" class="form-control" name="laneFlooring" value="{{ old('laneFlooring') }}" placeholder="Vloer">
                        @error('laneFlooring')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label>Status</label>
                        <select name="laneStatus" class="form-control">
                            <option value="" disabled selected>Kies de status</option>
                            <option value="1" {{old('laneStatus') == '1' ? 'selected' : ''}}>Beschikbaar</option>
                            <option value="2" {{old('laneStatus') == '2' ? 'selected' : ''}}>Niet-Beschikbaar</option>
                        </select>
                        @error('laneStatus')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label>Checkdatum</label>
                        <input type="date" class="form-control" name="laneLastCheck" value="{{ old('laneLastCheck') }}" placeholder="Checkdatum">
                        @error('laneLastCheck')
                            <span class="invalidFeedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label>Servicedatum</label>
                        <input type="date" class="form-control" name="laneLastService" value="{{ old('laneLastService') }}" placeholder="Servicedatum">
                        @error('laneLastService')
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
