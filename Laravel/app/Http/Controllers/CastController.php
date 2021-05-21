<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index()
    {
        $cast = DB::table('casts')->get();

        return view('cast.index', compact('cast'));
    }

    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'umur' => 'required|numeric',
            'bio' => 'required|min:5'
        ]);

        $query = DB::table('casts')->insert([
            'nama' => $request["nama"],
            'umur' => $request["umur"],
            'bio' => $request["bio"]
        ]);

        if($query) {
            return redirect('/cast')->with(['success' => 'Pemeran Berhasil Ditambah!']);
        } else {
            return redirect('/cast')->with(['error' => 'Pemeran Gagal Ditambah!']);
        }
    }

    public function show($id)
    {
        $cast = DB::table('casts')->where('id', $id)->first();

        return view('cast.show', compact('cast'));
    }

    public function edit($id)
    {
        $cast = DB::table('casts')->where('id', $id)->first();

        return view('cast.edit', compact('cast'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'umur' => 'required|numeric',
            'bio' => 'required|min:5'
        ]);

        $query = DB::table('casts')->where('id', $id)->update([
            'nama' => $request["nama"],
            'umur' => $request["umur"],
            'bio' => $request["bio"]
        ]);

        if($query) {
            return redirect('/cast')->with(['success' => 'Pemeran Berhasil Diganti!']);
        } else {
            return redirect('/cast')->with(['error' => 'Pemeran Gagal Diganti!']);
        }
    }

    public function destroy($id)
    {
        $query = DB::table('casts')->where('id', $id)->delete();

        if($query) {
            return redirect('/cast')->with(['success' => 'Pemeran Berhasil Dihapus!']);
        } else {
            return redirect('/cast')->with(['error' => 'Pemeran Gagal Dihapus!']);
        }
    }
}
