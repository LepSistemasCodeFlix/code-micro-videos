<?php

namespace Tests\Stub\Controller;

use App\Http\Controllers\BaseController;
use Tests\Stub\Models\BaseModelStub;

class BaseControllerStub extends BaseController
{

    protected function model()
    {
        return BaseModelStub::class;
    }
}
