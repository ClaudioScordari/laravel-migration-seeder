@extends('layouts.app')

@section('page-title', 'Trains')

@section('main-content')
    <h1>
        Treni
    </h1>

    <ul>
        @foreach ($trains as $train)
            <li>
                <div>Azienda: {{ $train->company  }}</div>
                <div>Stazione di: {{ $train->departure_station  }}</div>
                <div> Stazine di: {{ $train->arrival_station  }}</div>
                <div>Ora partenza: {{ $train->departure_time  }}</div>
                <div>Ora arrivo: {{ $train->arrival_time  }}</div>
                <div>Codice: {{ $train->train_code  }}</div>
                <div>Numero carrozze: {{ $train->carriages_num  }}</div>
                <div>
                    @if ($train->on_time == 1) 
                        Il treno sta arrivando...
                    @else 
                        Attendere l'arrivo del treno...
                    @endif
                </div>
                <div>
                    @if ($train->deleted == 1) 
                        Il treno è stato cancellato
                    @else 
                        Attendere l'arrivo del treno
                    @endif
                </div>
            </li>
            <br>
            <hr>
        @endforeach
    </ul>
@endsection