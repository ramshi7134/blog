<?php

namespace Webpacks\Blog\Http\Controllers;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog::index');
    }

    public function show($slug)
    {
        return view('blog::show', compact('slug'));
    }
}
