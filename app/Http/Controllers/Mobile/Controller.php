<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {

        $name = substr(Route::currentRouteName(), strpos(Route::currentRouteName(), '.') + 1);
        if (substr_count($name, '.') >= 2) {
            $name = substr($name, 0, strrpos($name, '.'));
            if (!request()->ajax()) return view("mobile.pages.${name}");
            else return view("mobile.components.${name}");

        } else {
            if (strpos($name, '.') !== false) $name = substr($name, 0, strpos($name, '.'));
            if (!request()->ajax()) return view("mobile.pages.${name}.${name}");
            else return view("mobile.components.${name}.${name}");
        }
    }
}
