<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{

	/* Addon has many user */
    public function User() {
    	return $this->belongsTo(User::class);
	}
}
