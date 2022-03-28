<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Mahasiswa extends Model //definisi model
{
   protected $table='mahasiswa'; //eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
   protected $primaryKey='id_mahasiswa'; //memamnggil isi DB dengan primay key
   /** 
    * 
    *
    * @var array
    */
    protected $fillable=[
        'Email',
        'Nim',
        'Nama',
        'Kelas',
        'Jurusan',
        'TanggalLahir',
        'Alamat',
    ];
}
