<?php

namespace App\Gates;
use App\Models\User;
use App\Models\Record;
use Auth;
use Carbon\Carbon;
class AdminGate
{
	public function checkadmin($user)
	{
		if ($user->role === 'superadmin' || $user->role === 'admin' || $user->role === 'hr') 
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function permission($perm)
	{
		$date =  date("Y-m-d");
		$user = User::where('id', Auth::user()->id)->first();
		$create = Record::where('user_id', $user->id)
							->whereDate('created_at', Carbon::today()->toDateString())->pluck('id');
		if ($create != null || Auth::user()->role == 'superadmin' || Auth::user()->role == 'hr') {
			return true;
		}
		else
		{
			return false;
		}
	}

	Public function hrper($hrp)
	{
		if (Auth::user()->status == on && Auth::user()->role == 'hr') 
		{
			return true;
		}
		elseif(Auth::user()->role == 'superadmin')
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}