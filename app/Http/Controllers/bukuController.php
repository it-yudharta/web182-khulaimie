<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku as Model;

class bukuController extends Controller
{
    

    public function index()
    {
        $all = Model::all();

        return view('pages/buku/index', [
            'bukus' => $all
        ]);
    }

    public function add()
    {
        return view('pages/buku/add');
    }

    public function store(Request $request)
    {
        $save = Model::create([
            'judul' => $request['judul'],
            'pengarang' => $request['pengarang'],
            'penerbit' => $request['penerbit'],
            'tahun_terbit' => $request['tahun_terbit'],
        ]);

        return redirect()->route('buku.index');
    }

    public function view(Model $buku, Request $request)
    {
        return view('pages/buku/view', [
            'buku' => $buku
        ]);
    }

    public function edit(Model $buku, Request $request)
    {
        return view('pages/buku/edit', [
            'buku' => $buku
        ]);
    }

    public function save(Model $buku, Request $request)
    {
        $buku->judul = $request['judul'];
        $buku->pengarang = $request['pengarang'];
        $buku->penerbit = $request['penerbit'];
        $buku->tahun_terbit = $request['tahun_terbit'];
        $save = $buku->save();

        return redirect()->route('buku.index');
    }

    public function destroy(Model $buku, Request $request)
    {
        $save = $buku->delete();

        return redirect()->route('buku.index');
    }

}
