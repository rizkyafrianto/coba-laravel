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
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Afrianto',
            'email' => 'afrianto@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Farhan',
            'email' => 'farhan@gmail.com',
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

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web design'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'category_id' => 1,
            'user_id' => 1,
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquam ducimus perspiciatis recusandae atque facilis magni culpa officia repellendus obcaecati,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquam ducimus perspiciatis recusandae atque facilis magni culpa officia repellendus obcaecati, nesciunt tenetur explicabo. Dolore maxime ullam totam asperiores qui eveniet, debitis sint perferendis unde, mollitia quibusdam optio tempore, eius rem modi natus rerum aut pariatur quae esse explicabo. Itaque illo velit omnis ut, hic minus tenetur quidem! Praesentium inventore suscipit quidem, dolore enim, eum vel quam fugiat molestias facilis harum doloribus. Animi, commodi modi id fugiat repudiandae error, repellendus accusantium quos sapiente, dicta laboriosam. Non autem voluptates voluptatibus ipsam vero tenetur, facilis et molestias modi commodi. Ducimus ea vitae sapiente quaerat, nostrum reprehenderit voluptas optio suscipit commodi nihil necessitatibus. Eius optio mollitia voluptatibus! Molestias, omnis? Cumque autem ipsa voluptates, officia voluptate molestiae libero voluptas nobis quia, inventore deleniti aperiam voluptatem odio beatae nam placeat nihil modi neque ipsum architecto, eveniet voluptatum animi qui? Ipsa cum doloremque corrupti, totam beatae eius.'
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'category_id' => 1,
            'user_id' => 1,
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquam ducimus perspiciatis recusandae atque facilis magni culpa officia repellendus obcaecati,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquam ducimus perspiciatis recusandae atque facilis magni culpa officia repellendus obcaecati, nesciunt tenetur explicabo. Dolore maxime ullam totam asperiores qui eveniet, debitis sint perferendis unde, mollitia quibusdam optio tempore, eius rem modi natus rerum aut pariatur quae esse explicabo. Itaque illo velit omnis ut, hic minus tenetur quidem! Praesentium inventore suscipit quidem, dolore enim, eum vel quam fugiat molestias facilis harum doloribus. Animi, commodi modi id fugiat repudiandae error, repellendus accusantium quos sapiente, dicta laboriosam. Non autem voluptates voluptatibus ipsam vero tenetur, facilis et molestias modi commodi. Ducimus ea vitae sapiente quaerat, nostrum reprehenderit voluptas optio suscipit commodi nihil necessitatibus. Eius optio mollitia voluptatibus! Molestias, omnis? Cumque autem ipsa voluptates, officia voluptate molestiae libero voluptas nobis quia.'
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'category_id' => 2,
            'user_id' => 1,
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquam ducimus perspiciatis recusandae atque facilis magni culpa officia repellendus obcaecati,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquam ducimus perspiciatis recusandae atque facilis magni culpa officia repellendus obcaecati, nesciunt tenetur explicabo. Dolore maxime ullam totam asperiores qui eveniet, debitis sint perferendis unde, mollitia quibusdam optio tempore, eius rem modi natus rerum aut pariatur quae esse explicabo. Itaque illo velit omnis ut, hic minus tenetur quidem! Praesentium inventore suscipit quidem, dolore enim, eum vel quam fugiat molestias facilis harum doloribus. Animi, commodi modi id fugiat repudiandae error, repellendus accusantium quos sapiente, dicta laboriosam. Non autem voluptates voluptatibus ipsam vero tenetur, facilis et molestias modi commodi. Ducimus ea vitae sapiente quaerat, nostrum reprehenderit voluptas optio suscipit commodi nihil necessitatibus. Eius optio mollitia voluptatibus! Molestias, omnis? Cumque autem ipsa voluptates, officia voluptate molestiae libero voluptas nobis quia.'
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'category_id' => 3,
            'user_id' => 2,
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquam ducimus perspiciatis recusandae atque facilis magni culpa officia repellendus obcaecati,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquam ducimus perspiciatis recusandae atque facilis magni culpa officia repellendus obcaecati, nesciunt tenetur explicabo. Dolore maxime ullam totam asperiores qui eveniet, debitis sint perferendis unde, mollitia quibusdam optio tempore, eius rem modi natus rerum aut pariatur quae esse explicabo. Itaque illo velit omnis ut, hic minus tenetur quidem! Praesentium inventore suscipit quidem, dolore enim, eum vel quam fugiat molestias facilis harum doloribus. Animi, commodi modi id fugiat repudiandae error, repellendus accusantium quos sapiente, dicta laboriosam. Non autem voluptates voluptatibus ipsam vero tenetur, facilis et molestias modi commodi. Ducimus ea vitae sapiente quaerat, nostrum reprehenderit voluptas optio suscipit commodi nihil necessitatibus. Eius optio mollitia voluptatibus! Molestias, omnis? Cumque autem ipsa voluptates, officia voluptate molestiae libero voluptas nobis quia.'
        ]);
    }
}
