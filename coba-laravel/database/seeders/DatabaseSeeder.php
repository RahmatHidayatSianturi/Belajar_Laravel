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
            'email' => 'rahmathidayatsianturi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Rizky Bagus Saputra',
            'email' => 'rizkybagus@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eos tempora quia a
            voluptate consectetur dolorum',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eos tempora quia a
            voluptate consectetur dolorum fuga libero doloribus accusantium aspernatur
            quisquam unde veniam vel architecto repudiandae, nemo soluta quam temporibus
            excepturi! Iure aliquam deserunt temporibus nemo sunt placeat commodi sapiente
            unde. Perferendis voluptatibus odio, fugit incidunt aspernatur quas, dolor
            placeat et culpa molestias nihil? Beatae exercitationem quidem voluptatem,
            blanditiis dolorum illo odit ad eligendi possimus dolores dolore adipisci nisi
            hic deserunt quibusdam harum aspernatur cupiditate, reprehenderit veniam ea
            ipsum odio! Omnis laborum suscipit quaerat praesentium! Aut, at, pariatur
            consectetur recusandae totam sit minima nihil dignissimos mollitia blanditiis
            voluptas. Inventore?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eos tempora quia a
            voluptate consectetur dolorum',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eos tempora quia a
            voluptate consectetur dolorum fuga libero doloribus accusantium aspernatur
            quisquam unde veniam vel architecto repudiandae, nemo soluta quam temporibus
            excepturi! Iure aliquam deserunt temporibus nemo sunt placeat commodi sapiente
            unde. Perferendis voluptatibus odio, fugit incidunt aspernatur quas, dolor
            placeat et culpa molestias nihil? Beatae exercitationem quidem voluptatem,
            blanditiis dolorum illo odit ad eligendi possimus dolores dolore adipisci nisi
            hic deserunt quibusdam harum aspernatur cupiditate, reprehenderit veniam ea
            ipsum odio! Omnis laborum suscipit quaerat praesentium! Aut, at, pariatur
            consectetur recusandae totam sit minima nihil dignissimos mollitia blanditiis
            voluptas. Inventore?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eos tempora quia a
            voluptate consectetur dolorum',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eos tempora quia a
            voluptate consectetur dolorum fuga libero doloribus accusantium aspernatur
            quisquam unde veniam vel architecto repudiandae, nemo soluta quam temporibus
            excepturi! Iure aliquam deserunt temporibus nemo sunt placeat commodi sapiente
            unde. Perferendis voluptatibus odio, fugit incidunt aspernatur quas, dolor
            placeat et culpa molestias nihil? Beatae exercitationem quidem voluptatem,
            blanditiis dolorum illo odit ad eligendi possimus dolores dolore adipisci nisi
            hic deserunt quibusdam harum aspernatur cupiditate, reprehenderit veniam ea
            ipsum odio! Omnis laborum suscipit quaerat praesentium! Aut, at, pariatur
            consectetur recusandae totam sit minima nihil dignissimos mollitia blanditiis
            voluptas. Inventore?',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eos tempora quia a
            voluptate consectetur dolorum',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eos tempora quia a
            voluptate consectetur dolorum fuga libero doloribus accusantium aspernatur
            quisquam unde veniam vel architecto repudiandae, nemo soluta quam temporibus
            excepturi! Iure aliquam deserunt temporibus nemo sunt placeat commodi sapiente
            unde. Perferendis voluptatibus odio, fugit incidunt aspernatur quas, dolor
            placeat et culpa molestias nihil? Beatae exercitationem quidem voluptatem,
            blanditiis dolorum illo odit ad eligendi possimus dolores dolore adipisci nisi
            hic deserunt quibusdam harum aspernatur cupiditate, reprehenderit veniam ea
            ipsum odio! Omnis laborum suscipit quaerat praesentium! Aut, at, pariatur
            consectetur recusandae totam sit minima nihil dignissimos mollitia blanditiis
            voluptas. Inventore?',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
