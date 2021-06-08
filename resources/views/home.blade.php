
@extends('layouts.main')

@section('content')
    <section class="container">
        <div class="cards">
            @foreach ($cards as $card)
                <div class="card">
                    <img src=" {{ $card['image'] }}" alt="">
                    <h5 class="comic-title"> {{ $card['title'] }}</h5> </h3>
                </div>
                
            @endforeach
            <a class="btn" href="#">LOAD MORE</a>
        </div>

    </section>
@endsection
            
