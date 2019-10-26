<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class ProgramController extends MainController
{
     public function getPrograms() {

         $programs = DB::table('programs')->get();
            return $programs;
     }

}
