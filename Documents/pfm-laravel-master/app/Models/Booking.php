<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Booking extends Model
{
    protected $fillable = ['arrival_date', 'checkout_date', 'people_count', 'room_id', 'requested_room_type_id'];

    public function guests()
    {
        return $this->hasMany(Guest::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsToMany(Room::Class);
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::Class);
    }

    public function property(){
        return $this->belongsTo(Property::class);
    }

    use HasFactory;
}
