<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; // tambahkan ini

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['title' => 'Post 1', 'body' => 'Isi post 1'],
            ['title' => 'Post 2', 'body' => 'Isi post 2'],
            ['title' => 'Post 3', 'body' => 'Isi post 3'],
            ['title' => 'Post 4', 'body' => 'Isi post 4'],
            ['title' => 'Post 5', 'body' => 'Isi post 5'],
            ['title' => 'Post 6', 'body' => 'Isi post 6'],
        ];

        $profiles = [
            [
                'name' => 'GEDUNG UNIVERSITAS BUMIGORA',
                'desc' => 'MNDHBCOSUDDFC',
                'img'  => 'images/ubgg.jpg',
            ],
            [
                'name' => 'GEDUNG UNIVERSITAS ISLAM NEGERI',
                'desc' => 'AAAAAAAAAAAAAAAAAAAAAAAA',
                'img'  => 'images/UIN.jpg',
            ],
            [
                'name' => 'GEDUNG UNDIKMA',
                'desc' => 'AAAAAAAAAAAAAAAAAAAAAAAA',
                'img'  => 'images/undikma.jpg',
            ],
            [
                'name' => 'GEDUNG UNIZAR',
                'desc' => 'AAAAAAAAAAAAAAAAAAAAAAAA',
                'img'  => 'images/unizar.webp',
            ],
            [
                'name' => 'GEDUNG UNIVERSITAS MATARAM',
                'desc' => 'AAAAAAAAAAAAAAAAAAAAAAAA',
                'img'  => 'images/unram.jpg',
            ],
            [
                'name' => 'GEDUNG UNW',
                'desc' => 'AAAAAAAAAAAAAAAAAAAAAAAA',
                'img'  => 'images/unw.jpg',
            ],
        ];

        return view('post', compact('posts', 'profiles'));
    }
}
