<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Matakuliah;

class MataKuliahController extends Controller
{
    public function index(){
        $data = [
            'mks' => Matakuliah::getAllMk()
        ];
        return view('list_mk', $data);
    }

    public function create(){
        return view('create_mk');
    }

    public function store(Request $request){
        $request->validate([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks')
        ]);
            return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil ditambahkan.');
        }
}
