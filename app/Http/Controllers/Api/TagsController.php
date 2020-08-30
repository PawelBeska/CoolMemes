<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
{
    public function index()
    {
        return Tag::limit(9)->select("id","name")->get()->toJson();

    }
}
