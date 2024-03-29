<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        User::create([
            'name' => 'Rahmat Hidayat Sianturi',
            'username' => 'rahmathidayatsianturi',
            'email' => 'rahmathidayatsianturi@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Rizky Bagus Saputra',
        //     'email' => 'rizkybagus@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Mentees Journey',
            'slug' => 'mentees-journey'
        ]);

        Category::create([
            'name' => 'Events',
            'slug' => 'events'
        ]);

        Category::create([
            'name' => 'Development Class',
            'slug' => 'development-class'
        ]);

        Post::factory(20)->create();

    }
}
