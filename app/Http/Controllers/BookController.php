<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $nama = "Hafizh";
        return "nama saya ".$nama;
    }

    public function detail($nama) {
        return view("welcome", compact('nama'));
    }

    public function latihan() {
        $nilai = 90;
        $names = [
            [
                'nama' => 'gaza'
            ],
            [
                'nama' => 'ahmad'
            ],
            [
                'nama' => 'ilham'
            ],
            [
                'nama' => 'ridho'
            ]
        ];
        return view('latihan', compact('nilai','names'));
    }
}
