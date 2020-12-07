@extends('frontend.layout')
@section('header-title')
    Toernooien
@endsection
@section('content')

<section class=innerpage_all_wrap>
    <div class=container>
        <div class=row><h2 class=heading>Beschikbare <span>toernooien</span></h2>
            <p class=headParagraph>Kies een toernooi waar je je voor in wilt schrijven.</p>
            
                <div>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('participant.store') }}">
                        @csrf

                        <div class="tournaments">
                            @foreach($tournaments as $tournament)
                                <label>
                                    <input type="radio" name="tournamentId" value="{{ $tournament->id }}">
                                    <div class="tournament">
                                        <h2>{{ $tournament->TournamentTitle }} <span class="tournamentAmount">{{ $tournament->formatStartDate() }}</span> </h2>
                                        <p>{{ $tournament->TournamentDescription }}</p>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-red inschrijfButton">Schrijf je in</button>
                    </form>
                </div>
                   
        </div>
    </div>
</section>
@endsection