<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Create a new controller instance for authentication.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showView()
    {
        return view('settings');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getModuleList($moduleName)
    {
        /*
         * TODO: Add Module Model
         *    $modules = new Module;
         *    $modules = $modules->where('name', 'LIKE', '%'.$moduleName.'%')->get();
         *    return $modules->toJson();
         */

        return "";
    }

}
