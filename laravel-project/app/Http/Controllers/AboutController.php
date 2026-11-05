<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = "About";
        $content = "Selamat datang di halaman about!";

        return view('admin.about', [
            'title' => $title,
            'content' => $content
        ]);
    }
}
