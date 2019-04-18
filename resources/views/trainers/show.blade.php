@extends('layouts.app')

@section('title', 'Trainer Create')

@section('content')

    <div class="row">
        <h1 style="margin: 0  auto">Detalle Entrenador</h1>
    </div>
    <div class="row justify-content-center align-items-start">
        <div class="card mx-3 my-3 text-center" style="width: 18rem;">
            <img class="card-img-top rounded-circle mx-auto my-3" style="height: 150px; width: 150px;" src="/imagenes/{{$trainer->avatar}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$trainer->name}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>

@endsection