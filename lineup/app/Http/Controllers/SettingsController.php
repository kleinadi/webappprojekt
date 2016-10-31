<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\UserModule;
use App\ModuleTime;
use Auth;
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
     * Show the settings view
     */
    public function showView()
    {
        return view('settings');
    }

    /**
     * Show the list of matching module (search field)
     */
    public function getModuleList($moduleName)
    {
        // Gets and returns the list
        $modules = new Module;
        $modules = $modules->where('name', 'LIKE', '%'.$moduleName.'%')->orWhere('fullname', 'LIKE', '%'.$moduleName.'%')->get();
        return $modules->toJson();
    }

    /**
     * Join/Subscribe module from settings page
     */
    public function subscribeModule($moduleId)
    {
        // First check if the module are already been subscribed by the user
        $userId = Auth::user()->id;

        $joinedModules = DB::table('usermodule')
            ->where('fk_users', '=', $userId)
            ->where('fk_module', '=', $moduleId)
            ->get();

        // If so return with error
        if(sizeof($joinedModules) > 0) // When already subscribed to this
        {
            return redirect('/settings?successfullyJoined=false');
        }

        // Check if the module has been already reviewed
        $thisModule = new Module;
        $thisModule = $thisModule->where('id', $moduleId)->get();

        if($thisModule[0]->status == 1)
        {
            return redirect('/settings?moduleReview='.$moduleId);
        }
        else
        {
            $usermodule = new UserModule;
            $usermodule->fk_users = $userId;
            $usermodule->fk_module = $moduleId;
            $usermodule->save();

            return redirect('/settings?successfullyJoined=true');
        }
    }

    /**
     * Show the modal and fills the inputs with the module that need to be reviewed
     */
    public function reviewModule($moduleId)
    {
        // Generate the modal content
        $thisModule = new Module;
        $thisModule = $thisModule->where('id', $moduleId)->get();

        echo '
        <input type="hidden" class="form-control" name="moduleId" value="'.$moduleId.'">
            <div class="form-group">
                <label for="modulName">Name:</label>
                <input type="text" class="form-control" name="moduleName" value="'.$thisModule[0]->name.'">
            </div>
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" class="form-control" name="fullName" value="'.$thisModule[0]->fullname.'">
            </div>
            <div class="form-group">
                <label for="professor">Professor:</label>
                <input type="text" class="form-control" name="professor" value="'.$thisModule[0]->professor.'">
            </div>
            <div class="form-group">
                <label for="room">Room:</label>
                <input type="text" class="form-control" name="room" value="'.$thisModule[0]->room.'">
            </div>';

        // Opens the modal
        echo "<script>$('#myModal').modal();</script>";
    }

    /**
     * Unsubscribe from a module
     */
    public function unsubscribeModule($moduleId)
    {
        $usermodule = new UserModule;
        $usermodule->where('fk_module', $moduleId)->delete();

        return redirect('/settings?successfullyDeleted=true');
    }

    /**
     * Show the list of the module that are already been subscribed.
     */
    public function joinedModuleList()
    {
        $userId = Auth::user()->id;
        $joinedModules = DB::table('usermodule')
            ->join('module', 'module.id', '=', 'usermodule.fk_module')
            ->where('fk_users', '=', $userId)
            ->get();


        echo '<table class="table table-striped">';

        if(sizeof($joinedModules) > 0)
        {
            foreach ($joinedModules as $joinedModule)
            {
                echo '<tr>
                            <td class="table-text"><div>' . $joinedModule->fullname . '</div></td>
                            <td class="table-text">' . $joinedModule->name . '</td>
                            <td align="right">
                                <form action="settings/unsubscribeModule/'.$joinedModule->id.'" method="GET">
                                    <button type="submit" class="btn btn-danger" >Unsubscribe</button>
                                </form>
                            </td>
                      </tr>';
            }
        }
        else
        {
            echo '<tr>
                        <td class="table-text"><div><i>You haven\'t subscribed any module yet...</i></div></td>
                        <td></td>
                        <td align="right"></td>
                    </tr>';
        }
        echo '</table>';
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
                'location' => 'required|max:255',
                'time0' => 'required|max:255',
                'day0' => 'required|max:255',
                'day0' => 'required|max:255',
            ]);


        if(isset($filledData->moduleId) & $filledData->moduleId != '')
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
            $module->location = $filledData->location;
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
        $modules->room = "A2.09";
        $modules->status = 1;
        $modules->location = "St. Gallen";
        $modules->save();

        $modules = new Module;
        $modules->name = "IUK_U";
        $modules->fullname = "Unix";
        $modules->professor = "Browser";
        $modules->room = "B2.01";
        $modules->status = 0;
        $modules->location = "Chur";
        $modules->save();

        $modules = new Module;
        $modules->name = "IUK_W";
        $modules->fullname = "Webapplikationen";
        $modules->professor = "Browser";
        $modules->room = "A1.05";
        $modules->status = 0;
        $modules->location = "Buchs";
        $modules->save();

        $modules = new Module;
        $modules->name = "IUK_H";
        $modules->fullname = "Web Programmierung";
        $modules->professor = "Browser";
        $modules->room = "A2.09";
        $modules->status = 0;
        $modules->location = "St. Gallen";
        $modules->save();

        $modules = new Module;
        $modules->name = "KOM_III";
        $modules->fullname = "Kommunikation";
        $modules->professor = "Prete";
        $modules->room = "C2.23";
        $modules->status = 0;
        $modules->location = "Chur";
        $modules->save();

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
        $moduletime->timerange = 4;
        $moduletime->day = 6;
        $moduletime->fk_module = 4;
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
