<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['title', 'description', 'property_type', 'address', 'zip_code', 'city', 'country'];

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function rooms(){
        return $this->hasMany(Room::class);
    }

    use HasFactory;
}
