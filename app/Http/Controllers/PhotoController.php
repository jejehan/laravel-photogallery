<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PhotoController extends Controller
{
    //List of Photo
    public function index(){
        die('photo/index');
    }

    //show to create photo form
    public function create()
    {
        die('photo/create');
    }

    //store data gallery
    public function store(Request $store)
    {
        die('photo/store');
    }

    //show gallery
    public function details( $id )
    {
        die('photo/details/' . $id );
    }
}
