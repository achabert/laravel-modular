<?php

namespace Son\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Son\Blog\Entities\Post;

class BlogDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        
        $post = new Post;
        $post->title = "Home";
        $post->body = "Home Page";
        $post->save();

        $post = new Post;
        $post->title = "About Us";
        $post->body = "Page about us";
        $post->save();
    }
}
