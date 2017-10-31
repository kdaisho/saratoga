@extends('main')

@section('title', 'About')

@section('langSwitcher')
	<a href="/{{__('messages.langSwitch')}}/about">{{__('messages.langSwitch')}}</a>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>{{ __('messages.about') }}</h1>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
		<hr>
	</div>
</div>

@endsection