<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class CookieController extends Controller
{
	public function setCookie(Request $request){
		$minutes = 60 * 24 * 7;
		$response = new Response('Hello World');
		$response->withCookie(cookie('shared_cookie', 'my_shared_value', $minutes, null, '.web.test'));
		return $response;
	}
	public function getCookie(Request $request){
		$value = $request->cookie('share_cookie');
		echo $value;
	}
}*/
