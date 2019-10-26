<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class CommentsBlockController extends MainController
{
    public function getCommentBlocks() {

        $blocks = DB::table('blockcomments')->get();
        return $blocks;
    }

}
