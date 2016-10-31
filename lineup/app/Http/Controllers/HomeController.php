<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\UserModule;
use App\ModuleTime;
use Auth;
use DB;


class HomeController extends Controller
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
        return view('home');
    }

    /**
     * Get the users modules
     */
    public function getModules()
    {
        $userId = Auth::user()->id; //user authentification

        //query for selecting the modules of the specified user
        $usermodules = DB::table('usermodule')
            ->join('module', 'usermodule.fk_module', '=', 'module.id')
            ->join('moduletime', 'module.id', '=', 'moduletime.fk_module')
            ->select('usermodule.fk_users', 'module.name', 'module.fullname', 'module.room', 'module.professor', 'module.location', 'moduletime.day', 'moduletime.timerange')
            ->where('fk_users', '=', $userId)
            ->get();

        //insert the modules in the schedule
        foreach ($usermodules as $usermodules) {

            //desktop version
            $id="d".$usermodules->day."r".$usermodules->timerange;
            echo "<script>$('#$id').parent().css({'background-color':'#89cbfe'});
                $('#$id').append('<div id=\"descriptioninfo\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" title=\"Module Info:\" data-html=\"true\" data-content=\"Professor: $usermodules->professor <br> Location: $usermodules->location\">$usermodules->fullname</div>');
                $('#$id').append('<div id=\"nameinfo\">$usermodules->name</div>');
                $('#$id').append('<div id=\"roominfo\">$usermodules->room</div>');
            </script>";

            //mobile version
            $id="m".$usermodules->day."r".$usermodules->timerange;
            echo "<script>$('#$id').parent().css({'background-color':'#89cbfe'});
                $('#$id').append('<div id=\"descriptioninfo\">$usermodules->fullname</div>');
                $('#$id').append('<div id=\"nameinfo\">$usermodules->name</div>');
                $('#$id').append('<div id=\"roominfo\">$usermodules->room</div>');
            </script>";
        }
        return true;
    }
}
