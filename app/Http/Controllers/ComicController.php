<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        //dd($comics );
        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // I only have to write this return, the rest is handled by the store method
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // VALIDATION
        $val_data = $request->validate([
            'title' => 'required|min:3|max:150',
            'description' => 'required',
            'thumb' => 'required|max:255',
            'price' => 'required|max:15',
            'series' => 'required|max:30',
            'sale_date' => 'required|date',
            'type' => 'required|max:50'
        ]);

        //dd($val_data);
        
        Comic::create($val_data);


        // Create a new istance
        /* $data = $request->all();
        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        //Let's see it
        //dd($newComic);
        //save it in my db
        $newComic->save(); */


        // if I don't do it every time the page is refreshed the post method will always send the same data, I have to redirect to another page
        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // Let's see it
        //dd($comic);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $val_data = $request->validate([
            'title' => 'required|min:3|max:150',
            'description' => 'required',
            'thumb' => 'required|max:255',
            'price' => 'required|max:15',
            'series' => 'required|max:30',
            'sale_date' => 'required|date',
            'type' => 'required|max:50'
        ]);

        //dd($val_data);

        $comic->update($val_data);
        //dd($comic);
        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {

        $comic->delete();
        return to_route('comics.index');
    }
}
