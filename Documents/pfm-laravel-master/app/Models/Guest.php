<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email'];

    public function booking(){
        return $this->belongsTo(Booking::class);
    }

    use HasFactory;
}
