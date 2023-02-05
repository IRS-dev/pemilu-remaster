<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Candidate;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => 'ketua'
        ]);
        Category::create([
            'name' => 'sekertaris'
        ]);
        Category::create([
            'name' => 'bendahara'
        ]);
        
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        Candidate::create([
            'name' => 'juana',
            'photo' =>Str::random(32),
            'category_id'=> 1
        ]);

        Candidate::create([
            'name' => 'otong',
            'photo' =>Str::random(32),
            'category_id'=> 2
        ]);
        Candidate::create([
            'name' => 'budi',
            'photo' =>Str::random(32),
            'category_id'=> 3
            
        ]);

    }
}