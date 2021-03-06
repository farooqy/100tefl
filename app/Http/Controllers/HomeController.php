<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\newsModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function newPost()
    {
        return view('admin.addnews');
    }
    public function getNews()
    {
        $newsList = newsModel::where('status', 'active')->get();
        return view('admin.newsview', compact('newsList'));
    }
}
