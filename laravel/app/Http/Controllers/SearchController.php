<?php

namespace App\Http\Controllers;

use App\Deputy;
use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    function index(Request $request)
    {
        $q = $request->query('query');

        $news = Post::search($q)->paginate(6);
        $deputies = Deputy::search($q)->paginate(3);
        $news->appends(array(
            'query' => $q
        ));
        $deputies->appends(array(
            'query' => $q
        ));
        return view('frontEnd.Search', compact('deputies', 'news'), ['request' => $q]);
    }

    function fetch_dep(Request $request)
    {
        if ($request->ajax()) {
            $q = $request->query('query');


            $deputies = Deputy::search($q)->paginate(3);


            return view('frontEnd.includes.pagination_dep', compact('deputies'))->render();
        }
    }

    function fetch_news(Request $request)
    {
        if ($request->ajax()) {
            $q = $request->query('query');

            $news = Post::search($q)->paginate(6);


            return view('frontEnd.includes.pagination_news', compact('news'))->render();
        }
    }
}
