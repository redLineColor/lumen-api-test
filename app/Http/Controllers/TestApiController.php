<?php

namespace App\Http\Controllers;

use App\Entities\PostEntity;
use App\Resources\PostResource;
use Laravel\Lumen\Routing\Controller;

class TestApiController extends Controller
{
    public function index()
    {
        return PostResource::collection(PostEntity::all());
    }
}
