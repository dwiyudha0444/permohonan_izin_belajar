<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPD extends Model
{
    protected $table = 'tbopd';

    protected $fillable = [
        'opd'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_opd', 'id');
    }

    public function opd()
    {
        return $this->belongsTo(Admin::class, 'id_opd', 'id');
    }
}
