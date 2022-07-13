<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            
           
                $userrole = Auth()->user()->role;
                // echo "User Role:" . $userrole . '</br>';
                $currentroutername = Route::currentRouteName();
                // echo "Current Route Name:" . $currentroutername;
                
                if (in_array($currentroutername, $this->userAccessRole()[$userrole])) 
                    {
                        return $next($request);
                    }

                else
                    {
                        abort(403, 'You are not allowed to access this page');
                    }
            } 
        catch (Exception $e) 
            {
                abort(403, 'You are not allowed to access this page');
            }
           
    }


    private function userAccessRole()
    {
        return [
            'user'=>[
                'home',
                'post',
                'logout',
                'createrecord',
                'storerecord',
                'recordedit/{id}',
                'updateerecord',
                'recorddelete/{id}',
                'allrecord',
                
            ],
            'admin'=>[
                'home',
                'logout',
                'allusers',
                'useredit/{id}',
                'userdelete/{id}',
                'userupdate',
                'store',
                'createrecord',
                'storerecord',
                'recordedit/{id}',
                'updateerecord',
                'recorddelete/{id}',
                'allrecord',
            ],
            'superadmin'=>[
                'home',
                'post',
                'allusers',
                'useredit/{id}',
                'userdelete/{id}',
                'userupdate',
                'store',
                'createrecord',
                'storerecord',
                'allrecord',
                'recordedit/{id}',
                'updateerecord',
                'recorddelete/{id}',
                'data',
                'monthdata',
                'allmonthlydatachange',
                'monthlydatachangeedit/{id}',
                'monthdataupdate',
                'monthlydatachangedelete/{id}',
                'createyearlydatachange',
                'storeyearlydatachange',
                'allyearlydatachange',
                'yearlydatachangeedit/{id}',
                'updateyearlydatachange',
                'yearlydatachangedelete/{id}',
                'jobno/{job}',
                
            ],
            'hr'=>[
                'home',
                'post',
                'allusers',
                'useredit/{id}',
                'userdelete/{id}',
                'userupdate',
                'store',
                'createrecord',
                'storerecord',
                'allrecord',
                'recordedit/{id}',
                'updateerecord',
                'recorddelete/{id}',
                'data',
                'monthdata',
                'allmonthlydatachange',
                'monthlydatachangeedit/{id}',
                'monthdataupdate',
                'monthlydatachangedelete/{id}',
                'createyearlydatachange',
                'storeyearlydatachange',
                'allyearlydatachange',
                'yearlydatachangeedit/{id}',
                'updateyearlydatachange',
                'yearlydatachangedelete/{id}',
                'jobno/{job}',
                
            ]
        ];
    }
}
