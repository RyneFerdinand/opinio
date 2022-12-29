<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Test User',
            'email' => 'test@mail.com',
            'password' => bcrypt('password'),
            'profilePicture' => "https://randomuser.me/api/portraits/lego/0.jpg",
            'coverPicture' => "https://picsum.photos/id/401/1080/720",
            'about' => 'A test user, used to test.'
        ]);


        User::factory(3)->create();
    }
}
