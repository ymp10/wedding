<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stories = Story::paginate(10);
        return view(
            'admin.story.index',
            compact('stories')
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
            'title' => 'required'
        ]);
    
        $file = $request->file('file');
        $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
        $file->storeAs('photo', $randomName, 'public');
    
        $upload = new Story([
            'description' => $request->input('description'),
            'file' => $randomName,
            'title' => $request->input('title'),
        ]);
        $upload->save();
    
        return redirect()->route('admin.story')->with('success', 'File uploaded successfully');
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
