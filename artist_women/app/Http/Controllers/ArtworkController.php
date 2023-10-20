<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Artworks = Artwork::all();
        return view('artworks.index',compact('Artworks'));
    
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function show(Artwork $artwork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $Artworks = Artwork::find($id);
        return view('Artworks.edit', compact('Artworks'));
    }

    public function update(Request $request, $id)
    {
        
        $Artworks = Artwork::findOrFail($id);
        $validatedData = $request->validate([
            'artist_name' => 'required|string',
            'description' => 'required|string',
            'art_type' => 'required|string',
            'media_link' => 'required|url',
            'cover_image' => 'required|image',
        ]);

        $Artworks->update($validatedData);

        return redirect()->route('Artworks.index')->with('success', 'Thông tin art đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    // Tìm art theo ID
    $Artworks = Artwork::find($id);

    // Kiểm tra xem art có tồn tại không
    if (!$Artworks) {
        return redirect()->route('Artworks.index')->with('error', 'Không tìm thấy art.');
    }

    // Xóa art
    $Artworks->delete();

    // Điều hướng về trang danh sách art và hiển thị thông báo xóa thành công
    return redirect()->route('Artworks.index')->with('success', 'Xóa art thành công.');
}
}
