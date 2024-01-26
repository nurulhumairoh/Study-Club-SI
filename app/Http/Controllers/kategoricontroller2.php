<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;


class kategoricontroller2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // sebagai fungsi utama controller
    public function index()
    {
        $kategori = kategori::all();
        return view('kategori', ['kategori' =>$kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //untuk narok view tambah data
    public function create()
    {
        kategori::create([
            'nama_kategori'=>$request->nama_kategori,
            'deskripsi'=> $request->deskripsi
        ]);
        return redirect()->route('kategori.index');
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // create data / nyimpan data
    public function store(Request $request)
    {
        kategori::create([
            'nama_kategori'=>$request->nama_kategori,
            'deskripsi'=> $request->deskripsi
        ]);
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // nampilin detail baris d database
    public function show($id)
    {
        $kategori = kategori::find($id);
        return view('detailkategori',['kategori'=> $kategori]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //narok view menuju form untuk ngubah
    public function edit($id)
    {
        $kategori = kategori::find($id);
        return view('editkategori', ['kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // mnaruh skrip dr dtabase
    public function update(Request $request, string $id)
    {
        kategori::find($id)->update([
            'nama_kategori'=>$request->nama_kategori,
            'deskripsi' => $request->deskripsi
        ]);;
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kategori::find($id)->delete();
        return redirect()->route('kategori.index');
    }
}
