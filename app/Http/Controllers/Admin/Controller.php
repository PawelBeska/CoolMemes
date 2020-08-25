<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Parent_;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
        $name = substr(Route::currentRouteName(), strpos(Route::currentRouteName(), '.') + 1);
        $settings = Page::getInstance()->getSettings();
        if (substr_count($name, '.') >= 2) {
            $name = substr($name, 0, strrpos($name, '.'));
            if (!request()->ajax()) return view("admin.pages.${name}")->with('settings', $settings);
            else return view("admin.components.${name}")->with('settings', $settings);

        } else {
            if (strpos($name, '.') !== false) $name = substr($name, 0, strpos($name, '.'));
            if (!request()->ajax()) return view("admin.pages.${name}.${name}")->with('settings', $settings);
            else return view("admin.components.${name}.${name}")->with('settings', $settings);
        }
    }

    public function show($id, Request $request)
    {

        $string = get_class($this);
        $class = new $string();
        $name = substr(Route::currentRouteName(), strpos(Route::currentRouteName(), '.') + 1);
        $settings = Page::getInstance()->getSettings();
        if (substr_count($name, '.') >= 2) $name = substr($name, 0, strrpos($name, '.'));
        $view =  (request()->ajax()?view("admin.components.${name}"):view("admin.pages.${name}"));
        if (method_exists($class, 'showData')) $view->with('data', $class->showData($id, $request));
        $view->with('settings', $settings);

        return $view;
    }
}
