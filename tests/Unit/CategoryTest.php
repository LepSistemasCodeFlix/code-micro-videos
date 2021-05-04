<?php

namespace Tests\Unit;

use App\Models\Category;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    public function testCreation()
    {
        $category = new Category();
        $this->assertEquals(
            ['name', 'description', 'is_active'],
            $category->getFillable()
        );
    }
}
