<?php

use Illuminate\Database\Seeder;
use Symfony\Component\HttpFoundation\Request;
use Faker\Factory as Faker;

class PostsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=1; $i<=5; $i++) { 
            DB::table('posts')->insert([
                'user' => 'Ganu',
                'title' => 'I love me',
                'message' => 'Lorem',
                'images' => 'dsa'
            ]); 
        }
    }
}
