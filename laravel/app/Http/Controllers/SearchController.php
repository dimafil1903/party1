<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
class SearchController extends Controller
{
    public function query(Request $request)
    {
        $request= $request->query('query');
       return $request;
    }
}
