@extends('layouts.app')

@section('content')
    <section class="py-4">
        <div class="container w-75">
            <h2 class="text-center py-3 text-primary">
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
                            <th scope="col">SaleDate</th>
                            <th scope="col">Type</th>
                            <th scope="col">Buttons</th>


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
                                <td>{{ $comic->sale_date }}</td>
                                <td>{{ $comic->type }}</td>
                                <td>
                                    <a href="{{ route('comics.show', $comic) }}"><i class="fas fa-eye fa-sm fa-fw"></i></a>
                                    /Edit/Delete
                                </td>

                            </tr>
                        @empty

                            <tr class="">
                                <td scope="row" colspan="7">Nothing to show</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{--             {{ $comics->links('pagination::bootstrap-5') }}
 --}}

        </div>
    </section>
@endsection
