<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PostTest extends TestCase
{
    use DatabaseMigrations;

    public function test_a_user_can_browser_posts()
    {
        $post = factory('App\Model\Post')->create();

        $response = $this->get('/posts');

        $response->assertSee($post->title);
    }
}
