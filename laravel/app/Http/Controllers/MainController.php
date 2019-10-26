<?php


namespace App\Http\Controllers;
class MainController extends Controller
{
    public function index() {
        $bk = new FirstBlockController;
        $pr = new ProgramController;
        $cmbk = new CommentsBlockController;
        $dp = new TeamController;
        $ns = new NewsController;
        $st = new StatController;
        $statisticks=$st->getStats(4);
        $news = $ns->getNews(3);
        $deputies = $dp->getdeps();
        $programs = $pr->getPrograms();
        $blocks = $bk->getBlocks();
        $comment_blocks = $cmbk->getCommentBlocks();

        return view('frontEnd.home', ['programs' => $programs, 'blocks'=>$blocks,'comment_blocks'=>$comment_blocks,'deputies'=>$deputies,'news' =>$news,'statisticks'=>$statisticks]);
    }

}
