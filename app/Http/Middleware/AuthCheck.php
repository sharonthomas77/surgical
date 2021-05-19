<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('email') )
        {
            if(session('email')=='admin')
            {
                if($request->path()!='aindex' && $request->path()!='userview' && $request->path()!='vieworders' && $request->path()!='viewall'&& $request->path()!='edit/{id}'&& $request->path()!='delete/{id}'&& $request->path()!='order/{id}/edit')
                {
                    return back();
                }

            }
            else
            {
                if($request->path()!='userindex' && $request->path()!='userhome'&& $request->path()!='cartlist'&& $request->path()!='myorders'&& $request->path()!='au'&& $request->path()!='contact'&& $request->path()!='userhome'&& $request->path()!='ordernow'&& $request->path()!='card'&& $request->path()!='cancelorder/{id}/{userid}'&& $request->path()!='removecart/{id}'&& $request->path()!='psearch')
                {
                    return back();
                }

            }

        }
        else
        {
            if($request->path()!='log' && $request->path()!='register'&& $request->path()!='/'&& $request->path()!='cau'&& $request->path()!='ccontact')
            {
                return redirect('/log')->with ('fail','You must be logged in');
            }

        }



        return $next($request)->header('cache-control','no-cache,no-store,max-age=0,must-revalidate')
        ->header('pragma','no-cache')
        ->header('Expires','sat 01 Jan 1990 00:00:00 GMT');
    }
    
}
