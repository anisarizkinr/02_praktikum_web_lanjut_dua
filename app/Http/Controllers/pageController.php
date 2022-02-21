<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Anisa Rizki Nurrahma - 2041720234';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID ' .$id;
    }
}
