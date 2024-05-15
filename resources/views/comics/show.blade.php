@extends('layouts.app')

@section('content')
    <div class="container w-75 py-5">
        <h2 class="text-center py-3 text-primary">
            {{ $comic['title'] }}.
        </h2>

        <div class="row g-4">
            <div class="col-6">
                <div class="card border-0 h-100 m-auto">
                    <img class="" src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">

                </div>
            </div>
            <div class="col-6">
                <div class="card border-0 h-100 m-auto">
                    <div class="card-body h-100 d-flex flex-column justify-content-between">
                        <h5 class="card-title fw-bold"> {{ $comic['title'] }}</h5>
                        <h6 class="m-0 p-0">Descrizione:</h6>
                        <p class=" card-text h-75 overflow-y-auto">{{ $comic['description'] }}</p>
                        <ul class="list-group list-group-flush fw-bold">
                            <li class="list-group-item ">Serie: <span class="text-primary">{{ $comic['series'] }}</span>
                            </li>
                            <li class="list-group-item">Price: {{ $comic['price'] }}</li>
                            <li class="list-group-item">Sale until: {{ $comic['sale_date'] }}</li>
                        </ul>
                        <a href="#" class="btn btn-primary mb-0">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
