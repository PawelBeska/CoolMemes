<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\MessageBag;
use Yajra\DataTables\DataTables;

class PostsController extends Controller
{
    public function store()
    {
        return DataTables::of(Post::withCount(['tags', 'comments'])->with('author')->get())->make(true);

    }

}
