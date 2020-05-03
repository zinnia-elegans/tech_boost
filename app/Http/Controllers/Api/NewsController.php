<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\News;

class NewsController extends Controller
{
    public function index(Request $request)  {
        return News::all()->sortByDesc('updated_at');
    }
    
    public function apiview(Request $request) {
        $news = new News();
        $input = $request->all();
        $news->fill($input);
        $news->save();
        return response($input);
        
    }

    
}