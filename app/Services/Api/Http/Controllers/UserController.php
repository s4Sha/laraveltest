<?php

namespace App\Services\Api\Http\Controllers;

use Lucid\Units\Controller;
use App\Services\Api\Features\ListUsersFeature;

class UserController extends Controller
{
    public function listUser()
    {
        return $this->serve(ListUsersFeature::class);
    }

}
