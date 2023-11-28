<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::paginate(10);
        return view(
            'admin.photo.index',
            compact('photos')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'file' => 'required|file|mimes:jpeg,png,pdf',
        ]);
    
        $file = $request->file('file');
        $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
        $file->storeAs('photo', $randomName, 'public');
    
        $upload = new Photo([
            'description' => $request->input('description'),
            'file' => $randomName,
        ]);
        $upload->save();
    
        return redirect()->route('admin.photo')->with('success', 'File uploaded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
