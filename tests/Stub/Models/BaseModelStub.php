<?php

namespace Tests\Stub\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class BaseModelStub extends Model
{
    protected $table = 'base_model_stubs';
    protected $fillable = ['name'];

    public static function createTable()
    {
        \Illuminate\Support\Facades\Schema::create('base_model_stubs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public static function dropTable()
    {
        \Illuminate\Support\Facades\Schema::dropIfExists('base_model_stubs');
    }
}
