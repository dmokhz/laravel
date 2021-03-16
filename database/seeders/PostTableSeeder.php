<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $post = new Post;
      $post->content = 'Laravel 6.0 demo';
      $post->user_id = 1;
      $post->save();
    }
}
