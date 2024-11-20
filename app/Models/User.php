<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
        'id_opd'
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

    public function berkas()
    {
        return $this->hasMany(Berkas::class, 'id_users', 'id');
    }

    public function monitoring()
    {
        return $this->hasMany(Monitoring::class, 'id_users', 'id');
    }

    public function opd()
    {
        return $this->belongsTo(OPD::class, 'id_opd', 'id');
    }
    
}
