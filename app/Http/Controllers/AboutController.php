<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        // Dua penulis (bisa ditambah lagi nanti)
        $authors = [
            [
                'name' => "Dhiya 'Ulhaq Ramdhani Malik",
                'desc' => "Mahasiswi Universitas Bumigora."
            ],
            [
                'name' => "Saili Rizki Zahara",
                'desc' => "Mahasiswa Universitas Bumigora."
            ]
        ];

        return view('about', compact('authors'));
    }
}
