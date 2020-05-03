@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(count($statuses->statuses) != 0)
			<ul class="sp_list tweetslist">
				@foreach($statuses->statuses as $value)
					<li class="stream-item-header">
						<div class="account-group">
							<img src="{{ $value->user->profile_image_url_https }}" alt="{{ $value->user->name }}">
							<span class="FullNameGroup">{{ $value->user->name }}</span>
							<span class="username"><a href="https://twitter.com/{{ $value->user->screen_name }}" target="_blank">@{{ $value->user->screen_name }}</a></span>
							<small class="time">{{ $value->created_at }}</small>
						</div>
					</li>
				@endforeach
			</ul>
		@endif
     </div>
</div>
@endsection