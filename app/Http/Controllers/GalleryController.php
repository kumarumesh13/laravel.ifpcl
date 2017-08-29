<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $this->getGalleryImages();
        $this->getLatestNews();
        return view('gallery.index',['gallery_images'=>$this->gallery_images,'latest_news'=>$this->latest_news]);
    }
}
