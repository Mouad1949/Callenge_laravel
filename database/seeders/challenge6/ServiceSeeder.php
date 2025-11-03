<?php

namespace Database\Seeders;

use App\Models\challenge6\Booking;
use App\Models\challenge6\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::factory()->count(7)->create()->each(function($service){
          Booking::factory(10)->create(['service_id'=>$service->id]);
        });
    }
}
