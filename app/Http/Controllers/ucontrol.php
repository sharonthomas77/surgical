<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uloginmodel;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Validator;

class ucontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('register');

    }
    public function uhome()
    {
        //
        $data=['loggeduserinfo'=>uloginmodel::where('email','=',session('loggeduser'))->first()];
        return view('index',$data);
    }
    public function ahome()
    {
        //

        return view('aindex');

    }
    
    // public function logout()
    // {
    //     //if(session()->has('loggeduser'))
    //     //{
    //       //  session()->pull('loggeduser');
    //         return redirect('/');
    //     //}

    // }

    public function logout()
    {
        if(session()->has('email'))
        {
            session()->pull('email');
            return redirect('/');
        }
        else
        {
            return redirect('/');
        }

    }

    public function contact()
    {
        //

        return view('contact');

    }
    public function aboutus()
    {
        //

        return view('aboutus');

    }
    public function ccontact()
    {
        //

        return view('ccontact');

    }
    public function caboutus()
    {
        //

        return view('caboutus');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
/*public function home()
{
 $data=['loggeduserinfo'=>uloginmodel::where('email','=',session('loggeduser'))->first()];
        return view('index',$data);
}*/

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:App\Models\uloginmodel,name',
            'email' => 'required|unique:App\Models\uloginmodel,email',
            'username' => 'required|email|unique:App\Models\uloginmodel,username',
            'phonenumber' => 'required|digits:10|unique:App\Models\uloginmodel,phonenumber',
            'password' => 'required|min:5',
            'repassword' => 'required|same:password',
            'cid' => 'required||digits:10|unique:App\Models\uloginmodel,cid'

        ]);
        $getname=request('name');
        $getemail=request('email');
        $getusername=request('username');
        $getphonenumber=request('phonenumber');
        $getpassword=request('password');
        $getrepassword=request('repassword');
        $getcid=request('cid');


    

        $user=new uloginmodel();
        $user->name=$getname;
        $user->email=$getemail;
        $user->username=$getusername;
        $user->phonenumber= $getphonenumber;
        $user->password=$getpassword;
        $user->repassword= $getrepassword;
        $user->cid=$getcid;

        $user->save();
        return view('login');
    }


    public function logs(Request $request)
    {
        

        $getemail=$request -> input('email');
        $getpass=$request -> input('password');
        $data = DB::select('select id from uloginmodels where email=? and password=?',[$getemail,$getpass]);
        
        $userinfo2 = uloginmodel::where([['email',$request->email],['password',$request->password]])->first();

        if($request->email=='admin@gmail.com' && $request->password=='admin')
        {
            $request-> session()->put('email','admin');
            return redirect('/aindex');

        }
        else if($userinfo2)
        {
            $request->session()->put('email',$userinfo2->email);
                    $request->session()->put('loggedusersid',$userinfo2->sid);
                    return redirect('/userindex');
        }
        else{
            return back()->with('fail','Invalid Credentials !');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
