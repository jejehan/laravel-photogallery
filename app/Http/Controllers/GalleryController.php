<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Auth;

class GalleryController extends Controller
{
    private $tableName = 'galleries';

    //List of Photo Gallery
    public function index(){
        $galeries = DB::table($this->tableName)->get();

        //render view
        return view('gallery/index',compact('galeries'));
    }

    //show to create gallery form
    public function create()
    {
        if (!Auth::check()) {
            return \Redirect::route('gallery.index');
        }

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

        DB::table($this->tableName)->insert([
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
        $gallery = DB::table($this->tableName)->where('id',$id)->first();
        if (!$gallery) {
            return \Redirect::route('gallery.index');
        }

        $photos = DB::table('photos')->where('gallery_id',$gallery->id)->get();
        return view('gallery/show',compact('gallery','photos'));
    }

}
