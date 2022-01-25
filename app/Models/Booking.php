<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['arrival_date', 'checkout_date', 'people_count', 'room_id', 'requested_room_type_id'];

    public function guest(){
        return $this->hasOne(Guest::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function room(){
        return $this->belongsTo(Room::Class);
    }

    public function roomType(){
        return $this->belongsTo(RoomType::Class);
    }

    use HasFactory;
}
