<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['title', 'description', 'property_type_id', 'regular_room_price', 'address', 'zip_code', 'city', 'country'];

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function rooms(){
        return $this->hasMany(Room::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    public function propertyType(){
        return $this->belongsTo(PropertyType::class);
    }

    use HasFactory;
}
