<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;
use App\Facades\Twitter;

class TwitterController extends Controller
{
    public function index(Request $request)
    {
        
        $result = \Twitter::get('statuses/home_timeline', array("count" => 10));
        // $result = \Twitter::get('search/tweets', array("q" => "#今日の積み上げ", "count" => 10));

        return view('twitter.twitter', [
            "result" => $result
        ]);
    }
}