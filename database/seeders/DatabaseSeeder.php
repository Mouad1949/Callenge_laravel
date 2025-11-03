<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\challenge6\Booking;
use App\Models\challenge6\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([PostTableSeeder::class]);
        // $this->call([BookingSeeder::class]);
        Service::factory()->count(7)->create()->each(function($service){
          Booking::factory(3)->create(['service_id'=>$service->id]);
        });
    }
}
