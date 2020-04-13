<?php

namespace App\Http\Controllers;

use App\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Makanan";
        $makanan=Makanan::paginate(5);
        return view('admin.makanan', compact('title', 'makanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="inputmakanan";
        return view('admin.inputmakanan', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required'=> 'Kolom :attribute harus lengkap',
            'date'    => 'Kolom :attribute Harus Tanggal.',
            'numeric' => 'Kolom :attribute Harus Angka.',
        ];
        $validasi = $request->validate([
            'nama_makanan'=>'required',
            'keterangan'=>'required',
            'status'=>'required'
        ],$messages);
        Makanan::create($validasi);
        return redirect('makanan')->with('success', 'Data berhasil di update');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title="inputmakanan";
        $makanan=Makanan::find($id);
        return view('admin.inputmakanan', compact('title','makanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'required'=> 'kolom:attribut harus lengkap',
            'date'    => 'kolom:attribut harus tanggal',
            'numeric'=> 'kolom:attribut harus angka',
        ];
        $validasi = $request->validate([
            'nama_makanan' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
        ],$messages);
        //dd($validasi);
        Makanan::whereid_makanan($id)->update($validasi);
        return redirect('makanan')-> with('success','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Makanan::whereid_makanan($id)->delete();
        return redirect('makanan')-> with('success','data berhasil di update');
    }
}
