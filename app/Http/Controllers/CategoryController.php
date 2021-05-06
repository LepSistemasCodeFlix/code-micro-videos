<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{

    private $rules = [
        'name' => 'required|max:255',
        'is_active' => 'boolean'
    ];

    protected function model()
    {
        return Category::class;
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        return Category::create($request->all());
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, $this->rules);
        $category->update($request->all());
        return $category;
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->noContent();
    }
}
