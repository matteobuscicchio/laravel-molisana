@extends('layouts.app')

@section('content')

<main id="products">
    <div class="container">

        <h2>Le Lunghe</h2>
        <section>
            @foreach($data as $value ) 
                @if($value['tipo'] === 'lunga')
                    <div class="column">
                        <div class="card">
                            <div class="overlay">
                                <div class="pasta_info">
                                    <h5>{{ $value['titolo'] }}</h5>
                                    <img class="icon" src="{{ asset('img/icon.svg') }}" alt="">
                                </div>
                            </div>
                            <img class="img_pasta" src="{{ $value['src'] }}" alt="">
                        </div>
                    </div>
                @endif
            @endforeach
        </section>
        
        <h2>Le Corte</h2>
        <section>
            @foreach($data as $value ) 
                @if($value['tipo'] === 'corta')
                    <div class="column">
                        <div class="card">
                            <div class="overlay">
                                <div class="pasta_info">
                                    <h5>{{ $value['titolo'] }}</h5>
                                    <img class="icon" src="{{ asset('img/icon.svg') }}" alt="">
                                </div>
                            </div>
                            <img class="img_pasta" src="{{ $value['src'] }}" alt="">
                        </div>
                    </div>
                @endif
            @endforeach
        </section>

        <h2>Le Cortissime</h2>
        <section>
            @foreach($data as $value )
                @if($value['tipo'] === 'cortissima')
                    <div class="column">
                        <div class="card">
                            <div class="overlay">
                                <div class="pasta_info">
                                    <h5>{{ $value['titolo'] }}</h5>
                                    <img class="icon" src="{{ asset('img/icon.svg') }}" alt="">
                                </div>
                            </div>
                            <img class="img_pasta" src="{{ $value['src'] }}" alt="">
                        </div>
                    </div>
                @endif
            @endforeach
        </section>
    </div>
</main>

@endsection