<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{

    public function allusers()
    {
        if (Auth::user()->role == 'superadmin') {
            $users = User::where('id', '!=', Auth::user()->id)->get();
            return view('suigas.patient', compact('users'));
        }
        elseif (Auth::user()->role == 'admin') {
            $users = User::where('user_id', Auth::user()->id)->get();
            return view('suigas.patient', compact('users'));
        }

    }
    public function allhrusers()
    {
            $users = User::where('role', 'hr')->where('id','<>',Auth::id())->where('admin_id', Auth::id())->get();
            return view('suigas.patient', compact('users'));
    }
    public function alladminusers()
    {
            $users = User::where('admin_id', Auth::id())->get();
            return view('suigas.adminpatient', compact('users'));
    }
    public function alladminhrusers()
    {
        $users = User::where('role', 'hr')->where('id','<>',Auth::id())->where('admin_id', Auth::id())->get();
            return view('suigas.adminpatient', compact('users'));
    }

    public function useredit($id)
    {
        $users = User::where('id',$id)->get();
        return view('suigas.userupdate', compact('users'));
    }



    public function userupdate(Request $data)
    {
        $validated = $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $users = User::find($data->id);
        $users->name = $data->name;
        $users->role = $data->role;
        $users->email = $data->email;
        $users->status = $data->status;
        $users->save();
        return redirect('allusers');

    }


    public function userdelete($id)
    {
        $users = User::find($id)->delete();
        return redirect()->back();
    }



    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'user_id' => [],
            'admin_id' => [],
            'role' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->user_id = Auth::id();
        $user->admin_id = Auth::id();
        $user->role = $request->role;
        $user->email = $request->email;
        $user->otp = mt_rand(100000,999999);
        $user->password = Hash::make($request->password);
        $user->save();
        // User::create([
        //     'name' => $request['name'],
        //     'user_id' => Auth::user()->id,
        //     'admin_id' => Auth::user()->id,
        //     'role' => $request['role'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        // ]);
        return redirect()->back();
    }

    public function adminstore(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'user_id' => [],
            'admin_id' => [],
            'role' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->user_id = Auth::id();
        $user->admin_id = Auth::id();
        $user->role = $request->role;
        $user->email = $request->email;
        $user->otp = Auth::user()->otp;
        $user->password = Hash::make($request->password);
        $user->save();
        // User::create([
        //     'name' => $request['name'],
        //     'user_id' => Auth::user()->id,
        //     'admin_id' => Auth::user()->id,
        //     'role' => $request['role'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        // ]);
        return redirect()->back();
    }

    public function profile0(Request $request)
    {
        $update_id = $request->id;
        if (isset($update_id) && $update_id > 0) {
            $userr = User::find($update_id);
            $userr->AllowStatus = 0;
            $userr->save();
            return redirect()->back()->with('message', 'Status Updated Successfully!');
        }
    }
    public function profile1(Request $request)
    {
        $update_id = $request->id;
        if (isset($update_id) && $update_id > 0) {
            $userr = User::find($update_id);
            $userr->AllowStatus = 1;
            $userr->save();
            return redirect()->back()->with('message', 'Status Updated Successfully!');
        }
    }
}
