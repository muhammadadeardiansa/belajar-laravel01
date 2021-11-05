<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class DashboardController extends Controller
{
    //menambah produk
    //menghapus produk
    //menampilkan summari

    public function index(){
        $data = "ade";
        $product = Produk::all
        return view('welcome', compact('data'));
    }
}
