<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use DB;

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
        /**
         * TODO: Change description to longName and moduleday o moduletime in the DB
         */

        $modules = new Module;
        $modules = $modules->where('description', 'LIKE', '%'.$moduleName.'%')->get();
        return $modules->toJson();
    }

    /**
     * Test function for filling the db with some data
     */
    public function populateDummy()
    {
        DB::statement("SET foreign_key_checks=0");
        Module::truncate();
        DB::statement("SET foreign_key_checks=1");

        $modules = new Module;
        $modules->name = "BIM";
        $modules->fullname = "Betriebsinformation Management";
        $modules->professor = "Cavala";
        $modules->save();

        $modules = new Module;
        $modules->name = "IUK_U";
        $modules->fullname = "Unix";
        $modules->professor = "Browser";
        $modules->save();

        $modules = new Module;
        $modules->name = "IUK_W";
        $modules->description = "Webapplikationen";
        $modules->professor = "Browser";
        $modules->save();

        $modules = new Module;
        $modules->name = "IUK_H";
        $modules->description = "Web Programmierung";
        $modules->professor = "Browser";
        $modules->save();

        $modules = new Module;
        $modules->name = "KOM_III";
        $modules->description = "Kommunikation";
        $modules->professor = "Prete";
        $modules->save();

        return $this->showView();
    }

}
