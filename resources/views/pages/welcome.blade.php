@extends('main')

@section('title', 'Home')

@section('langSwitcher')
    <a href="/{{__('messages.langSwitch')}}">{{__('messages.langSwitch')}}</a>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Welcome to Saratoga</h1>
            <p>{{ __('messages.welcome') }}</p>
        </div>
    </div>
</div>

@endsection