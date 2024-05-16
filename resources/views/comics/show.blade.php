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
                        <div class="d-flex justify-content-between">

                            <a class="bg-primary rounded p-1 w-25 text-center" href="{{ route('comics.edit', $comic) }}">
                                <i class="fas fa-pencil-alt fa-sm fa-fw text-light"></i>
                            </a>

                            <!-- Modal  button -->
                            <button type="button" class="btn btn-danger p-2 w-25 text-center" data-bs-toggle="modal"
                                data-bs-target="#modalId-{{ $comic->id }}">
                                <i class="fa-solid fa-toilet fa-2xs text-light"></i>
                            </button>


                            <!--Modal Body-->
                            <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                aria-labelledby="modalTitleId-{{ $comic->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId-{{ $comic->id }}">
                                                ATTENTION! Cancellation is irreversible!
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body d-flex">
                                            <img width="60" src="{{ $comic->thumb }}" alt="">
                                            <div>Are you sure you want to delete <span
                                                    class="fw-bold">{{ $comic->title }}</span>? </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    Confirm
                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush fw-bold pt-3">
                            <li class="list-group-item ">Serie: <span class="text-primary">{{ $comic['series'] }}</span>
                            </li>
                            <li class="list-group-item">Price: {{ $comic['price'] }}</li>
                            <li class="list-group-item">Sale until: {{ $comic['sale_date'] }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
