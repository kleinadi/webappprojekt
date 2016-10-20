<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\UserModule;
use App\ModuleTime;
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
        //TODO: Query is incorrect
        $usermodules = DB::table('usermodule')
            ->join('module', 'usermodule.id', '=', 'module.id')
            ->join('moduletime', 'module.id', '=', 'moduletime.id')
            ->select('usermodule.fk_users', 'module.name', 'moduletime.day', 'moduletime.timerange')
            ->where('fk_users', '=', 1)
            ->get();

        foreach ($usermodules as $usermodules) {
            $id="d".$usermodules->day."r".$usermodules->timerange;
            echo "<script>document.getElementById('$id').innerHTML = '$usermodules->name'
            $('#$id').parent().css({'background-color':'#89cbfe'});</script>";
        }
        return true;
    }



}
