<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function users ()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function apartments ()
    {
        return $this->belongsTo(Apartment::class, 'apartment_id');
    }
}
