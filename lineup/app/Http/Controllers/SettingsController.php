<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\UserModule;
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
        $modules = $modules->where('fullname', 'LIKE', '%'.$moduleName.'%')->get();
        return $modules->toJson();
    }

    /**
     * Test function for filling the db with some data
     */
    public function populateDummy()
    {
        DB::statement("SET foreign_key_checks=0");
        Module::truncate();
        UserModule::truncate();
        DB::statement("SET foreign_key_checks=1");

        $modules = new Module;
        $modules->name = "BIM";
        $modules->fullname = "Betriebsinformation Management";
        $modules->professor = "Cavala";
        $modules->status = 1;
        $modules->save();

        $modules = new Module;
        $modules->name = "IUK_U";
        $modules->fullname = "Unix";
        $modules->professor = "Browser";
        $modules->status = 1;
        $modules->save();

        $modules = new Module;
        $modules->name = "IUK_W";
        $modules->fullname = "Webapplikationen";
        $modules->professor = "Browser";
        $modules->status = 1;
        $modules->save();

        $modules = new Module;
        $modules->name = "IUK_H";
        $modules->fullname = "Web Programmierung";
        $modules->professor = "Browser";
        $modules->status = 1;
        $modules->save();

        $modules = new Module;
        $modules->name = "KOM_III";
        $modules->fullname = "Kommunikation";
        $modules->professor = "Prete";
        $modules->status = 1;
        $modules->save();

        $usermodule = new UserModule;
        $usermodule->fk_users = 1;
        $usermodule->fk_module = 1;
        $usermodule->save();

        $usermodule = new UserModule;
        $usermodule->fk_users = 1;
        $usermodule->fk_module = 2;
        $usermodule->save();

        $usermodule = new UserModule;
        $usermodule->fk_users = 1;
        $usermodule->fk_module = 5;
        $usermodule->save();

        return $this->showView();
    }

}
