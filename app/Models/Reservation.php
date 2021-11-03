<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'res_id');
    }
}
