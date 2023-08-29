<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){


      //  dd("fdffds");
          return view("frontend.Home.index");
    }


    public function getPhotoGallery(){
        return view("frontend.Gallery.photo.index");
    }

    public function getVideoGallery(){
        return view("frontend.Gallery.video.index");
    }
    public function getCustomize(){
        return view("frontend.customize.index");
    }
}
