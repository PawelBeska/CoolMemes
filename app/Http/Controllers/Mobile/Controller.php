<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Page;
use App\Model;

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
    public function show($id, Request $request)
    {

        $string = get_class($this);
        $class = new $string();
        $name = substr(Route::currentRouteName(), strpos(Route::currentRouteName(), '.') + 1);
        $settings = Page::getInstance()->getSettings();
        if (substr_count($name, '.') >= 2) $name = substr($name, 0, strrpos($name, '.'));
        $view =  (request()->ajax()?view("mobile.components.${name}"):view("mobile.pages.${name}"));
        if (method_exists($class, 'showData')) $view->with('data', $class->showData($id, $request));
        $view->with('settings', $settings);
        return $view;
    }
}
