<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'priority' => 'required|numeric',
            'description' => 'required',
            'photopath' => 'required'
        ]);


        if($request->file('photopath'))
        {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time().'_'.$filename;
            $file->move(public_path('/images/gallery/'),$photopath);
            $data['photopath'] = $photopath;
        }

        Gallery::create($data);
        return redirect(route('gallery.index'))->with('success','Gallery Added Successfully');        

    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //tomorrow we'll perform update function
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        //
    }
}
