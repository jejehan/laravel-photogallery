<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class GalleryController extends Controller
{
    //List of Photo Gallery
    public function index(){
        //render view
        return view('gallery/index');
    }

    //show to create gallery form
    public function create()
    {
        //render view
        return view('gallery/create');
    }

    //store data gallery
    public function store(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $cover_image = $request->file('cover_image');

        if ($cover_image) {
            $cover_image_filename = $cover_image->getClientOriginalName();
            $cover_image->move(public_path('images'), $cover_image_filename);
        }else{
            $cover_image_filename = 'noimage.jpg';
        }

        DB::table('galeries')->insert([
            'name'          => $name,
            'description'   => $description,
            'cover_image'   => $cover_image_filename,
            'owner_id'      => 1,
        ]);

        return \Redirect::route('gallery.index')->with('message','Gallery ' . $name . ' Created');

    }

    //show gallery
    public function show( $id )
    {
        die('gallery/show/' . $id );
    }

}
