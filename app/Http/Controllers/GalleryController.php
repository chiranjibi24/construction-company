<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::where('is_delete',0)->latest()->get();

        return view(
            'gallery.index',
            compact('galleries')
        );
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:4096'
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            // Create folder if it does not exist
            $destination = public_path('uploads/gallery');

            if (!file_exists($destination)) {
                mkdir($destination, 0777, true);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move($destination, $imageName);
        }

        Gallery::create([

            'title' => $request->title,

            'image' => $imageName
        ]);

        return redirect()
                ->route('gallery.index')
                ->with('success', 'Image Added');
    }
}
