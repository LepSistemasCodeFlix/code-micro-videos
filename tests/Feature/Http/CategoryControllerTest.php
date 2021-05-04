<?php

namespace Tests\Feature\Http;

use App\Models\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
{

    use DatabaseMigrations;

    public function testIndex()
    {
        $category = factory(Category::class)->create();

        $response = $this->get('/api/categories');

        $response
            ->assertStatus(200)
            ->assertJson([$category->toArray()]);
    }

    public function testShow()
    {
        $category = factory(Category::class)->create();

        $response = $this->get('/api/categories/' . $category->id);

        $response
            ->assertStatus(200)
            ->assertJson($category->toArray());
    }

    public function testInvalidData()
    {
        $headers = ['Accept' => 'application/json'];
        $response = $this->post('/api/categories', [], $headers);

        $response
            ->assertStatus(422)
            ->assertJsonValidationErrors(['name']);
    }
}
