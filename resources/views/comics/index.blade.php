@extends('layouts.app')

@section('content')
    <section class="py-4">
        <div class="container w-75">
            <h2 class="text-center py-1 text-primary">
                All comics.
            </h2>
            <div class="d-flex justify-content-center py-3">
                <a class="btn btn-primary" href="{{ route('comics.create') }}"> Add new comic </a>
            </div>


            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Img</th>
                            <th scope="col">Price</th>
                            <th scope="col">Series</th>
                            <th class="px-3" scope="col">SaleDate</th>
                            <th class="px-5" scope="col">Type</th>
                            <th class="px-5" scope="col">Buttons</th>


                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($comics as $index => $comic)
                            <tr class="">
                                <td scope="row">{{ $comic->id }}</td>
                                <td>{{ $comic->title }}</td>
                                <td><img width="60" src="{{ $comic->thumb }}" alt=""></td>
                                <td>{{ $comic->price }}</td>
                                <td>{{ $comic->series }}</td>
                                <td class="text-center">{{ $comic->sale_date }}</td>
                                <td class="text-center">{{ $comic->type }}</td>
                                <td class="text-center">
                                    <a class="" href="{{ route('comics.show', $comic) }}">
                                        <i class="fas fa-eye fa-sm fa-fw"></i>
                                    </a>
                                    <a href="{{ route('comics.edit', $comic) }}">
                                        <i class="fas fa-pencil-alt fa-sm fa-fw"></i>
                                    </a>

                                    <!-- Modal  button -->
                                    <button type="button" class="btn btn-danger p-1" data-bs-toggle="modal"
                                        data-bs-target="#modalId-{{ $comic->id }}">
                                        <i class="fa-solid fa-toilet fa-2xs"></i>
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
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
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
                                </td>

                            </tr>
                        @empty

                            <tr class="">
                                <td scope="row" colspan="7">Nothing to show</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                            <div class="d-flex justify-content-center py-3">
                <a class="btn btn-primary" href="{{ route('comics.create') }}"> Add new comic </a>
            </div>

            </div>

            {{--             {{ $comics->links('pagination::bootstrap-5') }}
 --}}

        </div>
    </section>
@endsection
