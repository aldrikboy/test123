<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoopenFartenController extends Controller
{
	public function Index(): Factory|View|Application
    {
        $users = User::whereNot('email', 'hello')->get();
		return view("welcome", [ 'users' => $users ]);
	}
}
