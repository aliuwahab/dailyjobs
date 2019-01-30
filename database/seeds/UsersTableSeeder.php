<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'aliuwahab',
            'first_name' => 'Gbeila Aliu',
            'last_name' => 'Wahab',
            'email' => 'aliuwahab@gmail.com',
            'profile_description' => 'This is the creator. He writes code in PHP || Laravel and JavaScript || Vue.js',
            'user_type' => 'admin',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password' => bcrypt('secret'),
            'is_verified' => true,
            'is_banned' => false,
            'profile_image_url' => 'https://scontent.facc5-1.fna.fbcdn.net/v/t1.0-1/p320x320/46156073_2146433838720761_4521910120925364224_n.jpg?_nc_cat=111&_nc_ht=scontent.facc5-1.fna&oh=4519f2629a9e39e5fbf6712b7c9a394b&oe=5CFD6B56',
            'can_post_a_job' => now(),

        ]);

    }
}
