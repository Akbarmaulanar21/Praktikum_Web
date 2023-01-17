<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $fillable =  ['nim', 'nama', 'jenis_kelamin', 'jurusan', 'alamat'];
    protected $table = 'mahasiswa';
    public $timestamps = false;
}
