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
        $userId = Auth::user()->id;

        //TODO: Query is incorrect
        $usermodules = DB::table('usermodule')
            ->join('module', 'usermodule.fk_module', '=', 'module.id')
            ->join('moduletime', 'module.id', '=', 'moduletime.fk_module')
            ->select('usermodule.fk_users', 'module.name', 'module.fullname', 'module.room', 'moduletime.day', 'moduletime.timerange')
            ->where('fk_users', '=', $userId)
            ->get();

        foreach ($usermodules as $usermodules) {

            $id="d".$usermodules->day."r".$usermodules->timerange;
            echo "<script>$('#$id').parent().css({'background-color':'#89cbfe'})
                $('#$id').append('<div id=\"descriptioninfo\">$usermodules->fullname</div>')
                $('#$id').append('<div id=\"nameinfo\">$usermodules->name</div>')
                $('#$id').append('<div id=\"roominfo\">$usermodules->room</div>')
            </script>";

            $id="m".$usermodules->day."r".$usermodules->timerange;
            echo "<script>$('#$id').parent().css({'background-color':'#89cbfe'})
                $('#$id').append('<div id=\"descriptioninfo\">$usermodules->fullname</div>')
                $('#$id').append('<div id=\"nameinfo\">$usermodules->name</div>')
                $('#$id').append('<div id=\"roominfo\">$usermodules->room</div>')
            </script>";
        }
        return true;
    }
}
