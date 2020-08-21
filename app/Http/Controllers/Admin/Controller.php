<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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
    public function show()
    {
        $name = substr(Route::currentRouteName(), strpos(Route::currentRouteName(), '.') + 1);
        $settings = Page::getInstance()->getSettings();
     
        if (substr_count($name, '.') >= 2) {
            $name = substr($name, 0, strrpos($name, '.'));
            if (!request()->ajax()) return view("admin.pages.${name}")->with('settings', $settings);
            else return view("admin.components.${name}")->with('settings', $settings);

        }  else {
         
             // if (strpos($name, '.') !== false) $name = substr($name, 0, strpos($name, '.'));
            if (!request()->ajax())   return   view("admin.pages.${name}")->with('settings', $settings);
            else  return view("admin.components.${name}")->with('settings', $settings);
            
              
        }
    }
}
