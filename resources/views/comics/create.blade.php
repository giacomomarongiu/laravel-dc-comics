@extends('layouts.app')




@section('content')
    <section class="py-4">
        <div class="container w-75">
            <h2 class="text-center py-3 text-primary">
                Add a new comic.
            </h2>

            <form action="{{ route('comic.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="nameHelp" name="title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" aria-describedby="nameHelp"
                        name="description">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Img URL</label>
                    <input type="text" class="form-control" id="thumb" aria-describedby="thumbHelp"
                        name="thumb">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" aria-describedby="priceHelp" name="price">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" aria-describedby="seriesHelp" name="series">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control" id="sale_date" aria-describedby="sale_dateHelp"
                        name="sale_date">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" aria-describedby="typeHelp"
                        name="type">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
