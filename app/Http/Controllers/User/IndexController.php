<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		$user = Auth::user();
		return view('dashboard.index', [
			'user' => $user
		]);
	}

	public function profile()
	{
		$user = Auth::user();
		$user_url = User::where("id", $user->id)->where("username", \request("user"))->first();
		if (!$user_url) {
			return redirect()->back();
		}
		return view('home.user.index', [
			'user' => $user
		]);
	}
}
