<?php

namespace App\Models\challenge6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['date','time','status','service_id'];

    public function service(){
      return $this->belongsTo(Service::class);
    }
}
