<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use phpDocumentor\Reflection\DocBlock;
use Validator;
use Auth;
use Session;
use Cookie;


class LoginController extends Controller
{
	public function getLogin() {
		if (Auth::check()) {
			return redirect()->route('home');
		} else {
			return view('login');
		}
	}
	public function postLogin(Request $request) {
		$this->validate($request,
			[
				'email' =>'required|email',
				'password' => 'required|min:8'
			],
			[
				'email.required' => 'Email là trường bắt buộc',
				'email.email' => 'Email không đúng định dạng',
				'password.required' => 'Mật khẩu là trường bắt buộc',
				'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
			]
		);
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
			//$sessionId = Session::getId();
			//dd($sessionId);
			//$user = Auth::user()->name;
			$time = 60 * 24 * 7; // one week
			Cookie::queue('shared_cookie', 'value', $time, null, '.web.test');
			return redirect()->route('home');
		} else {
			return redirect()->back()->with('message', 'Tài khoản hoặc mật khẩu không chính xác');
		}
	}
	public function getLogout()
	{
		Auth::logout();
		Cookie::queue(
			Cookie::forget('shared_cookie')
		);
		return redirect('/');
	}
}
