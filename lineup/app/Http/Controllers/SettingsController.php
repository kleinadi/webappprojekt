<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\UserModule;
use App\ModuleTime;
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
     * Add a Module to the database
     *
     */
    public function addModuleToDB(Request $filledData)
    {
        $this->validate($filledData,[
                'moduleName' => 'required|max:255',
                'fullName' => 'required|max:255',
                'professor' => 'max:255',
                'room' => 'required|max:255',
                'time0' => 'required|max:255',
                'day0' => 'required|max:255',
            ]);


        if(isset($filledData->id) & $filledData->id != '')
        {
            /*
             * TODO: Code for updating the module information
            */
        }
        else
        {
            // Add Module
            $module = new Module;
            $module->name = $filledData->moduleName;
            $module->fullname = $filledData->fullName;
            $module->professor = $filledData->professor;
            $module->room = $filledData->room;
            $module->status = 0;
            $module->save();

            // Add Moduletime Reference (Max 5 times)
            $timeArray = array($filledData->time0, $filledData->time1, $filledData->time2, $filledData->time3, $filledData->time3);
            $dayArray = array($filledData->day0, $filledData->day1, $filledData->day2, $filledData->day3, $filledData->day4);
            for($i = 0; $i<5; $i++)
            {
                if($timeArray[$i] != '' & $dayArray[$i] != '')
                {
                    $moduleTime = new ModuleTime;
                    $moduleTime->timerange = $timeArray[$i];
                    $moduleTime->day = $dayArray[$i];
                    $moduleTime->fk_module = $module->id;
                    $moduleTime->save();
                }
            }

        }
        return redirect('/settings?successfullyAdded=1');
    }

    /**
     * Private Insert/Update Functions for DB connection
     */
    private function update(Request $request)
    {
        $task = new Task;
        $task = $task->find($request->id);
        $task->name = $request->name;
        $task->save();
    }

    /**
     * Test function for filling the db with some data
     */
    public function populateDummy()
    {
        DB::statement("SET foreign_key_checks=0");
        Module::truncate();
        UserModule::truncate();
        ModuleTime::truncate();
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

        $moduletime = new ModuleTime;
        $moduletime->timerange = 1;
        $moduletime->day = 1;
        $moduletime->fk_module = 1;
        $moduletime->save();

        $moduletime = new ModuleTime;
        $moduletime->timerange = 2;
        $moduletime->day = 1;
        $moduletime->fk_module = 2;
        $moduletime->save();

        $moduletime = new ModuleTime;
        $moduletime->timerange = 4;
        $moduletime->day = 1;
        $moduletime->fk_module = 3;
        $moduletime->save();

        $moduletime = new ModuleTime;
        $moduletime->timerange = 2;
        $moduletime->day = 3;
        $moduletime->fk_module = 5;
        $moduletime->save();

        $moduletime = new ModuleTime;
        $moduletime->timerange = 3;
        $moduletime->day = 5;
        $moduletime->fk_module = 5;
        $moduletime->save();



        return $this->showView();
    }

}
