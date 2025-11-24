<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testProductController extends Controller
{
      public function index() 
  { 
    $produk = "Aqua 1lt"; 
    return view("testview", compact('produk')); 
  } 
 public function show(){ 
  $produk = ["Aqua 1Lt", "Beer", "Ayam Geprek", "Buku Motivasi", "React"]; 
  return view("product/show", compact('produk')); 
} 
}
