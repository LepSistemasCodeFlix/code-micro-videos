<?php

namespace Tests\Feature\Http;

use App\Models\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Stub\Controller\CategoryControllerStub;
use Tests\Stub\Models\CategoryStub;
use Tests\TestCase;

class BaseControllerTest extends TestCase
{

    public function testIndex()
    {
        CategoryStub::createTable();

        $category = CategoryStub::create(['name' => 'CategoryStub', 'description' => 'Description']);
        
        $controller = new CategoryControllerStub();
        $result = $controller->index()->toArray();

        $this->assertNotEqualsCanonicalizing([$category->toArray()], $result);

        CategoryStub::dropTable();
    }

    // public function testShow()
    // {
    //     $category = factory(Category::class)->create();

    //     $response = $this->get('/api/categories/' . $category->id);

    //     $response
    //         ->assertStatus(200)
    //         ->assertJson($category->toArray());
    // }

    // public function testInvalidData()
    // {
    //     $headers = ['Accept' => 'application/json'];
    //     $response = $this->post('/api/categories', [], $headers);

    //     $response
    //         ->assertStatus(422)
    //         ->assertJsonValidationErrors(['name']);
    // }
}
