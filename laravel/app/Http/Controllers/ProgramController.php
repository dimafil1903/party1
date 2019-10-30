<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class ProgramController extends Controller
{
     public function getPrograms($count) {

         $programs = DB::table('programs')->take($count)->get();
            return $programs;
     }
     public function index()
     {
         $programs = DB::table('programs')->get();
         return view('frontEnd.program',['programs'=>$programs]);
     }

}
