<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\MessageBag;


class PostsController extends Controller
{
    public function index()
    {
        return Post::with('tags')->paginate(9)->toJson();
    }
}
