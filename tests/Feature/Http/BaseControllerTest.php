<?php

namespace Tests\Feature\Http;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Stub\Controller\BaseControllerStub;
use Tests\Stub\Models\BaseModelStub;
use Tests\TestCase;

class BaseControllerTest extends TestCase
{

    public function testIndex()
    {
        BaseModelStub::createTable();

        $model = BaseModelStub::create(['name' => 'BaseModelStub', 'description' => 'Description']);
        
        $controller = new BaseControllerStub();
        $result = $controller->index()->toArray();

        $this->assertNotEqualsCanonicalizing([$model->toArray()], $result);

        BaseModelStub::dropTable();
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
