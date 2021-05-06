<?php

namespace Tests\Stub\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class CategoryStub extends Model
{
    protected $table = 'category_stubs';
    protected $fillable = ['name', 'description'];

    public static function createTable()
    {
        \Illuminate\Support\Facades\Schema::create('category_stubs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }

    public static function dropTable()
    {
        \Illuminate\Support\Facades\Schema::dropIfExists('category_stubs');
    }
}
