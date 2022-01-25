<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['room_type_id', 'max_occupancy', 'property_id'];

    public function roomType(){
        return $this->belongsTo(RoomType::Class);
    }

    public function property(){
        return $this->belongsTo(Property::Class);
    }

    public function bookings(){
        return $this->hasMany(Booking::Class);
    }

    use HasFactory;
}
