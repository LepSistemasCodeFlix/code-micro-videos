<?php

namespace Tests\Stub\Controller;

use App\Http\Controllers\BaseController;
use Tests\Stub\Models\CategoryStub;

class CategoryControllerStub extends BaseController
{

    protected function model()
    {
        return CategoryStub::class;
    }
}
