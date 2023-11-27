<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Crash;
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

        $users = User::factory()->count(10)->create();
        //make first an admin

        $vehicles = Vehicle::factory()->count(12)->create();
        $crashes = Crash::factory()->count(10)->create();

        $vehicles->random(rand(3, 8))->each(function (Vehicle $v) use(&$crashes) {
           $randCrash = $crashes -> random(1)->first();
           $v -> crashes() -> attach ($randCrash);
           //$randCrash -> vehicles() -> attach($v);
        });
        
    }
}
