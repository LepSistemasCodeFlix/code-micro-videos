<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

abstract class BaseController extends Controller
{

    protected abstract function model();

    // private $rules = [
    //     'name' => 'required|max:255',
    //     'is_active' => 'boolean'
    // ];

    public function index()
    {
        return $this->model()::all();
    }

    // public function store(Request $request)
    // {
    //     $this->validate($request, $this->rules);
    //     return Category::create($request->all());
    // }

    // public function show(Category $category)
    // {
    //     return $category;
    // }

    // public function update(Request $request, Category $category)
    // {
    //     $this->validate($request, $this->rules);
    //     $category->update($request->all());
    //     return $category;
    // }

    // public function destroy(Category $category)
    // {
    //     $category->delete();
    //     return response()->noContent();
    // }
}
