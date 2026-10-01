<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected UserModel $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    /**
     * Tampilkan daftar pengguna (join kelas).
     */
    public function index()
    {
        $users = $this->userModel->getUser();
        $title = 'Daftar Pengguna';

        return view('list_user', compact('users', 'title'));
    }

    /**
     * Tampilkan form buat pengguna baru.
     */
    public function create()
    {
        $kelas = (new Kelas())->getKelas();
        $title = 'Buat Pengguna Baru';

        return view('create_user', compact('kelas', 'title'));
    }

    /**
     * Simpan pengguna baru, lalu alihkan ke daftar pengguna.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required|string|max:255',
            'npm'      => 'required|string|max:20|unique:users,nim',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $this->userModel->create([
            'nama'     => $request->nama,
            'nim'      => $request->npm, // input npm dipetakan ke kolom nim
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect('/user')->with('success', 'Pengguna berhasil ditambahkan.');
    }
}
