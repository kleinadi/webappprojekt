<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;

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
         * TODO: Maybe change description to longName or so in the DB
         */
        $modules = new Module;
        $modules = $modules->where('name', 'LIKE', '%'.$moduleName.'%')->get();
        return $modules->toJson();
    }

    /**
     * Test function for filling the db with some data
     */
    public function populateDummy()
    {
        $modules = new Module;
        $modules->name = "BIM";
        $modules->description = "Betriebsinformation Management";
        $modules->professor = "Cavala";
        $modules->save();

        $modules = new Module;
        $modules->name = "IUK_U";
        $modules->description = "Unix";
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
