<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        // Dummy data postingan
        $posts = [
            ['title' => 'Universitas Bumigora', 'body' => 'Terkemuka di bidang komputer di NTB.'],
            ['title' => 'Fakultas Ilmu Komputer', 'body' => 'Mencetak mahasiswa berprestasi.'],
        ];

        return view('post', compact('posts'));
    }
}
