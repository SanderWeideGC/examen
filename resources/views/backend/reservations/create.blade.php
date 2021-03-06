@extends('backend.includes.layout')

@section('content')
<div class="content p-4 uitklap">
        <div class="controls">
            <h2 class="mb-4">Reserveringen</h2>
            <hr>
        </div>
        <div class="card mb-4">
            <div class="card-header bg-white font-weight-bold">
                Nieuwe Reservering
            </div>
            <div class="card-body">
                <form method="POST" action="/admin/reserveringen">
                    @csrf
                    <div class="form-group">
                        <label>Baan ID</label>
                        <input type="text" class="form-control" name="reserveringBaanID" placeholder="Baan ID">
                        @error('reserveringBaanID')
                            <span class="invalidFeedback" role="alert">
                                <p>Dit veld is niet goed ingevuld</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Lid ID</label>
                        <input type="text" class="form-control" name="reserveringLidID" placeholder="Lid ID">
                        @error('reserveringLidID')
                            <span class="invalidFeedback" role="alert">
                                <p>Dit veld is niet goed ingevuld</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Start Tijd</label>
                        <input type="time" class="form-control" name="reserveringStartTime" step="1800" min="12:00" max="23:00">
                        @error('reserveringStartTime')
                            <span class="invalidFeedback" role="alert">
                                <p>Dit veld is niet goed ingevuld</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Eind Tijd</label>
                        <input type="time" class="form-control" name="reserveringEndTime" step="1800" min="12:00" max="23:00">
                        @error('reserveringEndTime')
                            <span class="invalidFeedback" role="alert">
                                <p>Dit veld is niet goed ingevuld</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Datum</label>
                        <input type="date" class="form-control" name="reserveringDate" placeholder="Datum">
                        @error('reserveringDate')
                            <span class="invalidFeedback" role="alert">
                                <p>Dit veld is niet goed ingevuld</p>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Opslaan</button>
                </form>
            </div>
        </div>
    </div>
@endsection