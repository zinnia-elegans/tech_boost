<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;
use App\Facades\Twitter;

class TweetsController extends Controller
{
    
    // public function index(Request $request)
    // {
    //     define('TWITTER_API_KEY', 'd9ktYK8Pj12uAiBB6qX4wZGwD'); //Consumer Key (API Key)
    //     define('TWITTER_API_SECRET', 'X2j9gdo1TjtfQLN86c43zk1KJCwLsJOfSlCHHMwVBUJS47eMsh');//Consumer Secret (API Secret)
        
    //     $connection = new TwitterOAuth(TWITTER_API_KEY, TWITTER_API_SECRET);
        
    //     $statuses = $connection->get('search/tweets', array("q" =>"#今日の積み上げ", "count" => 10));
        
    //     return view('twitter.tweets',['statuses' => $statuses]);
        
    // }
    
        public function tweet(Request $request)
    {
        
        $statuses = \Twitter::get('search/tweets', array("q" =>"#今日の積み上げ", "count" => 20));
        
        return view('twitter.hash',['statuses' => $statuses]);
        
    }
}
