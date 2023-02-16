<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $news = News::simplePaginate(2);
        return view('pages/index', compact('news'));
    }
}
