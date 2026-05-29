<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    protected $table = 'moradores';

    protected $guarded = [];

    protected $casts = [
        'dataNascMorador' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}