@extends('layouts.front')

@section('content')

    <div class="container">
        <h1>検索結果：#今日の積み上げ</h1>
        @foreach ($statuses->statuses as $tweet)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="media">
                        <img src="{{ $tweet->user->profile_image_url_https }}" class="rounded-circle mr-4">
                        <div class="media-body">
                            <h5 class="d-inline mr-3"><strong>{{ $tweet->user->name }}</strong></h5>
                            <h6 class="d-inline text-secondary">{{ date('Y/m/d', strtotime($tweet->created_at)) }}</h6>
                            <p class="mt-3 mb-0">{{ $tweet->text }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection