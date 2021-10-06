<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return 'Selamat Datang';
    }
    public function about(){
        return '1931710112 Tsania Risqi El Istiqomah';
    }
    public function articles($id){
        return 'Halaman artikel dengan id ' .$id;
    }
}
