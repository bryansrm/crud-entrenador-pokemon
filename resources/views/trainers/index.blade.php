@extends('layouts.app')

@section('title', 'Trainer Create')

@section('content')

    <div class="row">
        <h1 style="margin: 0  auto">Lista de entrenadores</h1>
    </div>
    <div class="row justify-content-center align-items-start">
        @foreach($trainers as $trainer)
            <div class="card mx-3 my-3" style="width: 18rem;">
                {{--<img class="card-img-top" src="..." alt="Card image cap">--}}
                <div class="card-body">
                    <h5 class="card-title">{{$trainer->name}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection