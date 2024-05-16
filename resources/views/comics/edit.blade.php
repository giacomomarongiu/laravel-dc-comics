 @extends('layouts.app')

 @section('content')
 <section class="py-4">
        <div class="container w-75">
            <h2 class="text-center py-3 text-primary">
                Add a new comic.
            </h2>

            <form action="{{ route('comics.update', $comic) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="nameHelp" name="title" value="{{$comic->title}}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" aria-describedby="nameHelp" value="{{$comic->description}}"
                        name="description">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Img URL</label>
                    <input type="text" class="form-control" id="thumb" aria-describedby="thumbHelp" value="{{$comic->thumb}}"
                        name="thumb">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" aria-describedby="priceHelp" name="price" value="{{$comic->price}}"> 
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" aria-describedby="seriesHelp" name="series" value="{{$comic->series}}"> 
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control" id="sale_date" aria-describedby="sale_dateHelp" value="{{$comic->sale_date}}"
                        name="sale_date">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" aria-describedby="typeHelp" value="{{$comic->type}}"
                        name="type">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
    @endsection
