<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    public function properties(){
        $this->hasMany(Property::class);
    }
    use HasFactory;
}
