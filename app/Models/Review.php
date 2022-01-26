<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['property_id', 'description', 'rating'];

    public function property(){
        return $this->belongsTo(Property::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
