<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class FirstBlockController extends MainController
{
    public function getBlocks() {

        $blocks = DB::table('first_blocks')->get();
        return $blocks;
    }

}
