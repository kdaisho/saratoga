<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class PagesController extends Controller
{
	// public function getIndex() {
	// 	return view('pages.welcome');
	// }

	// public function getAbout() {
	// 	return view('pages.about');
	// }

	// public function getContact() {
	// 	return view('pages.contact');
	// }

	public function postContact(Request $request) {
		$this->validate($request, [
			'name' => 'required|min:3|max:20',
			'email' => 'required|email',
			'message' => 'required|min:3'
		]);

		$data = [
			'name' => $request->name,
			'email' => $request->email,
			'bodyMessage' => $request->message
		];

		Mail::send('emails.contact', $data, function($message) use ($data) {
			$message->from($data['email']);
			$message->to('info@daishodesign.com');
			$message->subject('Email from Your Site');
		});

		Session::flash('success', 'Your email was sent!');

		return redirect('/en');
	}
}