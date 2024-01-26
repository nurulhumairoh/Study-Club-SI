<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class kategoricontroller extends Controller
{
    public function semua()
    {
        $kategori = Kategori::all();
    foreach ($kategori as $data) {
      echo $data->id . "." . $data->nama_kategori . "<br>";
    }
  
  }
}

