<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
        QuestionSeeder::class,
    ]);
    
        User::factory()->create([
            'name' => 'Rima Cahaya Siagian',
            'email' => 'rimacahaya.sgn@gmail.com',
            'username' => 'developer',
            'is_staff' => true,
            'password' => Hash::make('obhcomicsaset')
        ]);
    }
}
