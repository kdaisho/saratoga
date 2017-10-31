@extends('main')

@section('title', 'Contact')

@section('langSwitcher')
	<a href="/{{__('messages.langSwitch')}}/contact">{{__('messages.langSwitch')}}</a>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>{{ __('messages.contact') }}</h1>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
		<hr>
		<form action="{{ url('contact') }}" method="POST">
			{{ csrf_field() }}
			{{-- <div class="form-group">
				<lable for="name">Name:</label>
				<input type="text" id="name" name="name" class="form-control" placeholder="Name">
			</div>

			<div class="form-group">
				<lable for="email">Email:</label>
				<input type="text" id="email" name="email"  class="form-control" placeholder="Email">
			</div>

			<div class="form-group">
				<lable for="msg">Message:</label>
				<textarea type="text" id="mes" name="msg"  class="form-control" placeholder="Message"></textarea>
			</div> --}}
		</form>
	</div>
</div>

@endsection