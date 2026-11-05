<?php

namespace App\Http\Controllers;

use App\Models\Classroom; // <-- 1. Import Model Classroom
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
{
    $title = "Classroom";
    $content = "Selamat datang di halaman classroom!";

    $classrooms = Classroom::paginate(10);

    return view('admin.classroom', [
        'title' => $title,
        'content' => $content,
        'classrooms' => $classrooms
    ]);
}
}
