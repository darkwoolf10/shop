<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            array(
                [
                    'title' => 'Post number one',
                    'alias' => 'Post_№_one',
                    'intro' => 'Introductory text',
                    'body' =>'Lots and lots of text'
                ],
                [
                    'title' => 'Posts number two',
                    'alias' => 'Post_№_two',
                    'intro' => 'Introductory text',
                    'body' =>'Lots and lots of text'
                ],
                 [
                     'title' => 'Posts number three',
                     'alias' => 'Post_№_three',
                     'intro' => 'Introductory text',
                    'body' =>'Lots and lots of text'
                ]
            )
         );
    }
}
