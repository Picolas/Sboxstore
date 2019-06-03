<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use kanalumaddela\LaravelSteamLogin\Http\Controllers\AbstractSteamLoginController;
use kanalumaddela\LaravelSteamLogin\SteamUser;

class SteamLoginController extends AbstractSteamLoginController
{
	/**
	 * {@inheritdoc}
	 */
	public function authenticated(Request $request, SteamUser $steamUser)
	{
		// find user by their steam account id, example assumes `steam_account_id` on `users` table
		$user = User::where('steam_account_id', $steamUser->accountId)->first();

		// if the user doesn't exist, create them
		if (!$user) {
			$steamUser->getUserInfo(); // retrieve and set user info pulled from steam

			$user = User::create([
				'name' => $steamUser->name, // personaname
				'steam_account_id' => $steamUser->accountId,
				'avatar' => $steamUser->avatar,
				'steam_profile_url' => $steamUser->profileUrl,
			]);
		}

		// login the user using the Auth facade
		Auth::login($user);

		// let the extended controller handle redirect back to the page the user was just on
	}
}
