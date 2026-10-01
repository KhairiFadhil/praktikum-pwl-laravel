<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    protected $table = 'users';

    protected $fillable = ['nama', 'nim', 'kelas_id'];

    /**
     * Ambil seluruh pengguna dengan join ke tabel kelas.
     */
    public function getUser()
    {
        return DB::table('users')
            ->leftJoin('kelas', 'users.kelas_id', '=', 'kelas.id')
            ->select('users.*', 'kelas.nama_kelas')
            ->orderBy('users.id')
            ->get();
    }
}
