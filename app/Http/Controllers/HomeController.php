<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    //
    function show(){
        $jmlwebdev = Post::where('kategori','Web Developer')->count();
        $jmlwebdesign = Post::where('kategori','Web Designer')->count();
        $latestpost = Post::latest()->take(5)->get();
        $fulltime = Post::where('tipe', 'Full Time')->latest()->take(5)->get();
        $parttime = Post::where('tipe', 'Part Time')->latest()->take(5)->get();

        return view('home.welcome', compact('jmlwebdev','jmlwebdesign','latestpost','fulltime','parttime'));
    }
}
