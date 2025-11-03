<?php

namespace App\Models\challenge6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','duration','price','image'];

    public function bookings(){
      return $this->hasMany(Booking::class);
    }
}
