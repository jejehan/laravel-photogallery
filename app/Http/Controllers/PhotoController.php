<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use Auth;

class PhotoController extends Controller
{

    //show to create photo form
    public function create( $id )
    {
        if (!Auth::check()) {
            return \Redirect::route('gallery.index');
        }

        $gallery_id = $id;
        return view('photo/create',compact('gallery_id'));
    }

    public function store(Request $request)
    {

        $title          = $request->input('title');
        $location       = $request->input('location');
        $description    = $request->input('description');
        $image          = $request->file('image');

        if ($image) {
            $image_file_name = $image->getClientOriginalName();
            $image->move(public_path('images'), $image_file_name);
        }else{
            $image_file_name = 'noimage.jpg';
        }

        $gallery_id     = $request->input('gallery_id');
        $owner_id       = 1;

        DB::table('photos')->insert([
            'title'         => $title,
            'location'      => $location,
            'description'   => $description,
            'image'         => $image_file_name,
            'gallery_id'    => $gallery_id,
            'owner_id'      => $owner_id,
            'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        return \Redirect::route('gallery.show',array('id'=>$gallery_id));

    }

}
