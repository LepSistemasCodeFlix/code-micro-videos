<?php

namespace Tests\Feature\Models;

use App\Models\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    use DatabaseMigrations;

    public function testCreate()
    {
        $category = Category::create([
            'name' => 'Category'
        ]);
        $category->refresh();

        $this->assertEquals('Category', $category->name);
        $this->assertNull($category->description);
        $this->assertTrue((bool) $category->is_active);

        $category = Category::create([
            'name' => 'Category',
            'description' => null
        ]);

        $this->assertNull($category->description);

        $category = Category::create([
            'name' => 'Category',
            'description' => 'Lorem Ipsum'
        ]);

        $this->assertEquals('Lorem Ipsum', $category->description);

        $category = Category::create([
            'name' => 'Category',
            'is_active' => false
        ]);

        $this->assertFalse((bool) $category->is_active);
    }

    public function testList()
    {
        $category = Category::create([
            'name' => 'Category'
        ]);

        $categories = Category::all();

        $this->assertCount(1, $categories);
        $this->assertEqualsCanonicalizing(
            ['id', 'name', 'description', 'is_active', 'created_at', 'updated_at', 'deleted_at'],
            array_keys($categories->first()->getAttributes())
        );
    }
}
