<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admin'; // Nama tabel di database

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'nip',
        'email',
        'password',
        'tgl_lahir',
        'pangkat',
        'tmt',
        'jabatan',
        'lokasi_bekerja',
        'jejang_pendidikan',
        'lulus_pendidikan',
        'tugas_pekerjaan',
        'peguruan_tinggi',
        'alamat',
        'jurusan',
        'id_opd',
        'jenis_kelamin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'nip',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function opd()
    {
        return $this->belongsTo(OPD::class, 'id_opd', 'id');
    }
}
