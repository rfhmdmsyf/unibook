<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Fade;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $buku;
    // membuat instance dari model kategori
    public function __construct()
    {
        $this->buku = new Admin;
       
    }
    public function index(Request $request)

    {
        $cari = $request->search;

        $data = DB::table('buku')
            ->join('kategori', 'kategori.id', '=', 'buku.kategori_id')
            ->join('penerbit', 'penerbit.id', '=', 'buku.penerbit_id')
            ->select('buku.*', 'kategori.*', 'penerbit.*')
            ->where('buku.nama_buku', 'LIKE', "%$cari%")
            
            ->get();

         return view('admin' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Admin::all();
        $item = Penerbit::all();
        $kategori = Kategori::all();
        return view ('create',compact('data', 'item', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku = Admin::all();

        $rules = [
            'id' => 'required',
            'buku' => 'required',
            'kategori' => 'required', 
            'harga' => 'required',
            'stok' => 'required',
            'penerbit' => 'required'
    


        ];
        $messages = [
            'required' => " :attribute g boleh kosong woi",
           
        ];

        $this->validate($request, $rules, $messages);
// ?bukan tabellll
        $this->buku->kode_buku = $request->id;
        $this->buku->nama_buku = $request->buku;
        $this->buku->kategori_id= $request->kategori;
        $this->buku->harga = $request->harga;
        $this->buku->stok = $request->stok;
        $this->buku->penerbit_id = $request->penerbit;

        $this->buku->save();

        return redirect()->route('admin')->with('status', 'Data artikel berhasil ditambahkan');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
