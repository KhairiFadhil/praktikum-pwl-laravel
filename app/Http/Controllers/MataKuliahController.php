<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks'   => Matakuliah::all(),
        ];

        return view('list_mk', $data);
    }

    public function create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required|string|max:100',
            'sks'     => 'required|integer|min:1',
        ]);

        Matakuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks'     => $request->input('sks'),
        ]);

        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $mk = Matakuliah::findOrFail($id);

        return view('edit_mk', [
            'title' => 'Edit Mata Kuliah',
            'mk'    => $mk,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mk' => 'required|string|max:100',
            'sks'     => 'required|integer|min:1',
        ]);

        $mk = Matakuliah::findOrFail($id);
        $mk->update([
            'nama_mk' => $request->input('nama_mk'),
            'sks'     => $request->input('sks'),
        ]);

        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mk = Matakuliah::findOrFail($id);
        $mk->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil dihapus.');
    }
}
