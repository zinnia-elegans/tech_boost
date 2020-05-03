<?php

return [
    'api_key' => env('TWITTER_CLIENT_KEY', 'd9ktYK8Pj12uAiBB6qX4wZGwD'),
    'secret_key' => env('TWITTER_CLIENT_SECRET', 'X2j9gdo1TjtfQLN86c43zk1KJCwLsJOfSlCHHMwVBUJS47eMsh'),
    'access_token' => env('TWITTER_CLIENT_ID_ACCESS_TOKEN', '1222697852377260040-exI2zDBmaSoe0QTcZXOTtNIkI3PXt8'),
    'access_token_secret' => env('TWITTER_CLIENT_ID_ACCESS_TOKEN_SECRET', 'dc75bznB5f20TmExdrQ86MxGWfsukezyysjkDj1hyUF4I'),
    'call_back_url' => env('TWITTER_CALLBACK_URL', 'https://boiling-cliffs-96461.herokuapp.com/callback/twitter.html'),
];