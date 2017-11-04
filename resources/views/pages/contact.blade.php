@extends('main')

@section('title', 'Contact')

@section('langSwitcher')
	<a href="/{{__('messages.langSwitch')}}/contact">{{__('messages.langSwitch')}}</a>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>{{ __('messages.contact') }}</h1>
		<p>Contact3! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
		<hr>
		{{-- <form action="/{{ __('messages.lang') }}/contact" method="POST"> --}}
		<form action="{{ url('/en/contact') }}" method="POST">
			{{ csrf_field() }}
			<div class="form-group">
				<lable for="name">Name:</label>
				<input type="text" id="name" name="name" class="form-control" placeholder="Name">
			</div>

			<div class="form-group">
				<lable for="email">Email:</label>
				<input type="text" id="email" name="email" class="form-control" placeholder="Email">
			</div>

			<div class="form-group">
				<lable for="message">Message:</label>
				<textarea type="text" id="message" name="message" class="form-control" placeholder="Message"></textarea>
			</div>

			<input type="submit" value="Send" class="btn btn-success">
		</form>
	</div>
</div>

{{-- <div class="row">
    <div class="col-md-12">
        <h1>Contact Us</h1>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
        <hr>
        <form action="/{{__('messages.lang')}}/contact" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email" name="email">Email:</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="email" name="subject">Subject:</label>
                <input type="text" name="subject" id="subject" class="form-control">
            </div>

            <div class="form-group">
                <label for="message" name="message">Message:</label>
                <textarea name="message" id="message" class="form-control">Type your message here...</textarea>
            </div>

            <input type="submit" value="Send Message" class="btn btn-success">
        </form>
    </div>
</div> --}}

@endsection