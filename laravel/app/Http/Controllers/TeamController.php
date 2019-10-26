<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class TeamController extends MainController
{
    public function getdeps() {

        $blocks = DB::table('deputies')->get()->take('8');
        return $blocks;
    }

    public function index()
    {
        $deputies = DB::table('deputies')->get();


        return view('frontEnd.deputies', ['deputies'=>$deputies,'iter'=>0]) ;
    }
}
