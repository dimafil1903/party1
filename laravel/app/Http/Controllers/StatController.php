<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class StatController extends MainController
{
    public function getStats($count) {

        $programs = DB::table('blockstats')->orderBy('id', 'desc')->take($count)->get();
        return $programs;
    }

}
