
@extends('layouts.main')

@section('content')
    <section class="container">
        @foreach ($cards as $card)
            <div>
                <img src=" {{ $card['image'] }}" alt="">
                <h3 class="comic-title"> {{ $card['title'] }}</h3> </h3>
            </div>
            
        @endforeach
    </section>
@endsection
            
