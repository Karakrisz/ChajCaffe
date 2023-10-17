<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        // $images = Image::all(); 
        $images = Image::latest()->take(4)->get();
        return view('welcome', compact('images'));
    }
}