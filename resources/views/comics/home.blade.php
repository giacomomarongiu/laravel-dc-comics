@extends('layouts.app')

@section('content')
    <section class="py-4">
        <div class="container w-75">
            <h2 class="text-center py-3 text-primary">
                All comics.
            </h2>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($comics as $index => $comic)
                    <div class="col ">
                        <div class="card border-0 h-100 m-auto">
                            <img class="h-75" src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h5 class="card-title fw-bold"> {{ $comic['title'] }}</h5>
{{--                                 <a href="{{ route('comic', ['page' => Route::currentRouteName(),'id' => $index]) }}" class="btn btn-primary mb-0">MORE
                                    INFO</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
