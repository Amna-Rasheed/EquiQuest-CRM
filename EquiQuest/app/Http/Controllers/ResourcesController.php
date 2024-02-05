<?php


namespace App\Http\Controllers;

use App\Models\Article;

class ResourcesController extends Controller
{
    public function index()
{
    $articles =\App\Models\Article::all();
    return view('customer.resources', ['articles' => $articles]);
}

}
