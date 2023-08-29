<?php

namespace App\Http\Controllers\frontend\gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class photoController extends Controller
{
    public function index(){
        dd("FDSAFa");
         return view("frontend.Gallery.photo.index");
    }

}
