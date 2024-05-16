@extends('layouts.app')




@section('content')
    <section class="py-4">
        <div class="container w-75">
            <h2 class="text-center py-3 text-primary">
                Add a new comic.
            </h2>

            @include('partials.errors-validate')
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="nameHelp" name="title"
                        value="{{ old('title') }}" required>
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" aria-describedby="nameHelp"
                        value="{{ old('description') }}" required name="description">
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Img URL</label>
                    <input type="text" class="form-control" id="thumb" aria-describedby="thumbHelp" name="thumb"
                        value="{{ old('thumb') }}" required>
                    @error('thumb')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" aria-describedby="priceHelp" name="price"
                        value="{{ old('price') }}" required>
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" aria-describedby="seriesHelp" name="series"
                        value="{{ old('series') }}" required>
                    @error('series')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control" id="sale_date" aria-describedby="sale_dateHelp"
                        value="{{ old('sale_date') }}" required name="sale_date">
                    @error('sale_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" aria-describedby="typeHelp" name="type"
                        value="{{ old('type') }}" required>
                    @error('type')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
