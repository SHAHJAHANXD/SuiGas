<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Record;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $superadmins = User::where('role','superadmin')->count();
        $admins = User::where('role','admin')->count();
        $users = User::where('role','user')->count();
        $records = Record::count();
        return view('suigas.index',compact('superadmins','admins','users','records'));
    }
}
