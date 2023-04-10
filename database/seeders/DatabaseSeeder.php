<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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

        // User::create([
        //     'name' => 'Bayu Ariyadi',
        //     'image' => 'https://media.licdn.com/dms/image/C5603AQGsxHcj7JbMQg/profile-displayphoto-shrink_800_800/0/1644576284623?e=2147483647&v=beta&t=oy34yCAj92rjTR2-CkQXIXet-CZG_GQvko1tKbFpNLQ',
        //     'email' => 'bayuariyadi9@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Hanif Auliya',
        //     'image' => 'https://fmipa.ulm.ac.id/wp-content/uploads/2022/09/20220908_225925-edited-675x450.jpg',
        //     'email' => 'hanifauliya@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Category::create([
        //     'name' => 'Web Developer',
        //     'slug' => 'web-developer'
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus suscipit incidunt sapiente laborum illo minus, dolorum totam accusantium iusto! Labore voluptatibus in earum facilis vero distinctio, culpa, laboriosam provident maxime facere aperiam voluptas voluptatum repellat fuga nobis ea debitis? Deserunt earum, facilis tenetur dolores, officiis pariatur excepturi',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus suscipit incidunt sapiente laborum illo minus, dolorum totam accusantium iusto! Labore voluptatibus in earum facilis vero distinctio, culpa, laboriosam provident maxime facere aperiam voluptas voluptatum repellat fuga nobis ea debitis? Deserunt earum, facilis tenetur dolores, officiis pariatur excepturi voluptatum nam repudiandae eveniet corrupti assumenda aliquid porro neque quae commodi consectetur ad optio quam iure quia animi?.</p><p>Voluptatum quidem accusamus illo, corporis nesciunt reiciendis vitae. Nihil libero aut temporibus excepturi rem deleniti, eius illum cum dolor in cumque, debitis iure aliquid sequi aliquam. Tempora et iure voluptates quibusdam id. Suscipit sequi quibusdam voluptas hic dolore molestias saepe impedit nesciunt tenetur, architecto tempora deleniti earum atque explicabo ipsa rerum velit soluta. Veniam, recusandae?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus suscipit incidunt sapiente laborum illo minus, dolorum totam accusantium iusto! Labore voluptatibus in earum facilis vero distinctio, culpa, laboriosam provident maxime facere aperiam voluptas voluptatum repellat fuga nobis ea debitis? Deserunt earum, facilis tenetur dolores, officiis pariatur excepturi',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus suscipit incidunt sapiente laborum illo minus, dolorum totam accusantium iusto! Labore voluptatibus in earum facilis vero distinctio, culpa, laboriosam provident maxime facere aperiam voluptas voluptatum repellat fuga nobis ea debitis? Deserunt earum, facilis tenetur dolores, officiis pariatur excepturi voluptatum nam repudiandae eveniet corrupti assumenda aliquid porro neque quae commodi consectetur ad optio quam iure quia animi?.</p><p>Voluptatum quidem accusamus illo, corporis nesciunt reiciendis vitae. Nihil libero aut temporibus excepturi rem deleniti, eius illum cum dolor in cumque, debitis iure aliquid sequi aliquam. Tempora et iure voluptates quibusdam id. Suscipit sequi quibusdam voluptas hic dolore molestias saepe impedit nesciunt tenetur, architecto tempora deleniti earum atque explicabo ipsa rerum velit soluta. Veniam, recusandae?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus suscipit incidunt sapiente laborum illo minus, dolorum totam accusantium iusto! Labore voluptatibus in earum facilis vero distinctio, culpa, laboriosam provident maxime facere aperiam voluptas voluptatum repellat fuga nobis ea debitis? Deserunt earum, facilis tenetur dolores, officiis pariatur excepturi',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus suscipit incidunt sapiente laborum illo minus, dolorum totam accusantium iusto! Labore voluptatibus in earum facilis vero distinctio, culpa, laboriosam provident maxime facere aperiam voluptas voluptatum repellat fuga nobis ea debitis? Deserunt earum, facilis tenetur dolores, officiis pariatur excepturi voluptatum nam repudiandae eveniet corrupti assumenda aliquid porro neque quae commodi consectetur ad optio quam iure quia animi?.</p><p>Voluptatum quidem accusamus illo, corporis nesciunt reiciendis vitae. Nihil libero aut temporibus excepturi rem deleniti, eius illum cum dolor in cumque, debitis iure aliquid sequi aliquam. Tempora et iure voluptates quibusdam id. Suscipit sequi quibusdam voluptas hic dolore molestias saepe impedit nesciunt tenetur, architecto tempora deleniti earum atque explicabo ipsa rerum velit soluta. Veniam, recusandae?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus suscipit incidunt sapiente laborum illo minus, dolorum totam accusantium iusto! Labore voluptatibus in earum facilis vero distinctio, culpa, laboriosam provident maxime facere aperiam voluptas voluptatum repellat fuga nobis ea debitis? Deserunt earum, facilis tenetur dolores, officiis pariatur excepturi',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus suscipit incidunt sapiente laborum illo minus, dolorum totam accusantium iusto! Labore voluptatibus in earum facilis vero distinctio, culpa, laboriosam provident maxime facere aperiam voluptas voluptatum repellat fuga nobis ea debitis? Deserunt earum, facilis tenetur dolores, officiis pariatur excepturi voluptatum nam repudiandae eveniet corrupti assumenda aliquid porro neque quae commodi consectetur ad optio quam iure quia animi?.</p><p>Voluptatum quidem accusamus illo, corporis nesciunt reiciendis vitae. Nihil libero aut temporibus excepturi rem deleniti, eius illum cum dolor in cumque, debitis iure aliquid sequi aliquam. Tempora et iure voluptates quibusdam id. Suscipit sequi quibusdam voluptas hic dolore molestias saepe impedit nesciunt tenetur, architecto tempora deleniti earum atque explicabo ipsa rerum velit soluta. Veniam, recusandae?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        User::factory(5)->create();
        Category::factory(5)->create();
        Post::factory(20)->create();
        
    }
}
