<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    protected $table = 'monitoring';
    
    protected $fillable = [
        'id_users', 
        'transkip_nilai_1',
        'transkip_nilai_2',
        'transkip_nilai_3',
        'transkip_nilai_4',
        'ptn',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users', 'id');
    }
}
