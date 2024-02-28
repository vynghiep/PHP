<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artworks=Artwork::paginate(5);
        return view('artworks.index',compact('artworks'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artworks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Artwork::create($request->all());
        return redirect()->route('artworks.index')->with('thongbao','Thêm mới thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(artwork $artwork)
    {
        return view('artworks.show', compact('artwork'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(artwork $artwork)
    {
        return view('artworks.edit', compact('artwork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, artwork $artwork)
    {
        $artwork->update($request->all());
        return redirect()->route('artworks.index')->with('thongbao','Sửa thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(artwork $artwork)
    {
        $artwork->delete();
        return redirect()->route('artworks.index')->with('thongbao','Xóa thành công!');
    }
}
