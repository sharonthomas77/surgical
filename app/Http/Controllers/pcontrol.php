<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pmodel;
use App\Models\uloginmodel;
use App\Models\cartmodel;
use App\Models\order;

use DB;
use Validator;

//use Illuminate\Support\Facades\DB;
use Session;

class pcontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('aindex');
    }
    public function userhome()
    {
        //

        return view('uindex');

    }

    public function userindex()
    {
        //
        $data=['loggeduserinfo'=>uloginmodel::where('email','=',session('email'))->first()];
        return view('userindex',$data);
       // return view('userindex');

    }


    public function cartadd($pid)
    {
        $row=DB::table('pmodels')->where('pid',$pid)->first();
        $items=['info'=>$row];
        return view('cart',compact('items'));
    }

    public function usrview()
    {
        $user=pmodel::all();
       // $data=['loggeduserinfo'=>pmodel::where('email','=',session('loggeduser'))->first()];
        return view('apview',compact('user'));
    }   
    public function adminpdt()
    {
        return view('adminpdt');
    }

    public function addtocart(Request $request)
    {

         $cartmodels=new cartmodel();
            $cartmodels->email=session('email');//$request->session()->get('newmodel')['id'];
            $cartmodels->pid=$request->pid;
            $cartmodels->save();
            if($cartmodels)
            {
                return redirect('/userhome')->with('success','Added to cart');
                // echo "success";
            }
        else
        {
            echo "fail";
            //return redirect('auth/login');
        }
}

public function cartview()  
{
    $cats=cartmodel::all();
    return view('cart',compact('cats'));
}



public function cartlist()
{
    $products=pmodel::all();
    $userId=Session::get('email');
    $products= DB::table('cartmodels')
    ->join('pmodels', 'cartmodels.pid', '=', 'pmodels.pid')
    ->where('cartmodels.email', $userId)
    ->select('pmodels.*','cartmodels.id as cart_id')
    ->get();
     return view('cart', compact('products'));
}

public function removecart($id)
{
    cartmodel::destroy($id);

    return redirect('/cartlist');
}


public function ordernow()
{
    $products=pmodel::all();
    $userId=Session::get('email');
    $total= $products= DB::table('cartmodels')
    ->join('pmodels', 'cartmodels.pid', '=', 'pmodels.pid')
    ->where('cartmodels.email', $userId)
    ->sum('pmodels.price');
     return view('ordernow', ['total'=>$total]);
}

function orderplace (Request $req)
{
    $userId= Session::get('email');
    $allCart=cartmodel::where('email', $userId)->get();
    foreach($allCart as $cart)
  {
    $order= new order;
    $order->pid=$cart['pid'];
    $order->userid=$cart['email']; 
    $order->address=$req->address;
    $order->status="pending";
    $order->paymentmethod=$req->payment; 
    $order->paymentstatus="pending";
    $order->save();
  } 
      cartmodel::where('email', $userId)->delete();
      if($req->payment=='cod')
      {
        return redirect('/myorders')->with('success','Thank you for your order');
      }
      else 
      { 
         return redirect('/card');

      }
    }


public function myorder()
{
   // $products=pmodel::all();
    $userId=Session::get('email');
    $orders= DB::table('orders')
    ->join('pmodels', 'orders.pid', '=', 'pmodels.pid')
    ->where('orders.userid', $userId)
    ->get();
     return view('myorders', ['orders'=>$orders]);
}

public function card()
    {
        return view('card');

    }

    public function vieworders()
    { 
        $prod=order::all();
        return view('vieworders',compact('prod'));

    }

    public function orderedit($id)
    {
        $prod=order::find($id);
        return view('editorder',compact('prod'));
    }


    public function updateorder(Request $request, $id)
    {
        $prod=order::find($id);


        $getstatus=request('status');

        $prod->status = $getstatus;


        $prod->save();


        return redirect('/vieworders');

    }

    public function cancelorder($id,$uid)
    {
        DB::table('orders')
        ->where('pid',$id)
        ->where('userid',$uid)
        ->delete();
       return redirect('/myorders')->with('success','Your order has been Cancelled');

    }
public function viewall()
{
    $prod=order::all();

    return view('viewall',compact('prod'));
}
    public function update(Request $request)
    {


    //     $user=pmodel::find($id);



    //     $getpid=request('pid');
    //     $getpname=request('pname');
    //     $getdesc=request('desc');
    //     $getprice=request('price');
    //    /* $getpimage=$request->file('pimage');
    //     $name=$getpimage->getClientOriginalName();
    //     $getpimage->move(public_path('assets/project_img'),$name);*/






    //    $user=new pmodel();
    //     $user->pid=$getpid;
    //     $user->pname=$getpname;
    //     $user->desc= $getdesc;
    //     $user->price=$getprice;
    //    // $user->pimage=$name;


    //     $user->save();
    $updating=DB::table('pmodels')->where('id',$request->input('id'))->update([
        'pname'=>$request->input('pname'),
        'price'=>$request->input('price'),
        'desc'=>$request->input('desc')
    ]);
       return redirect('/userview');

    }

    function edit($id)
         {

            $user=pmodel::find($id);
            return view('pedit',compact('user'));

         }
         public function deleteview($id)
         {
             $user=pmodel::find($id);
             return view('pdelete',compact('user'));
         }
        
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'pid' => 'required|unique:App\Models\pmodel,pid',
            'pname' => 'required',
            'price' => 'required',
            'desc' => 'required'
            

        ]);
        $getpid=request('pid');
        $getpname=request('pname');
        $getprice=request('price');
        $getdesc=request('desc');
        $getpimage=$request->file('pimage');
        $name=$getpimage->getClientOriginalName();
        $getpimage->move(public_path('assets/project_img'),$name);


    //return $request->input();
    

    

        $user=new pmodel();
        $user->pid=$getpid;
        $user->pname=$getpname;
        $user->price=$getprice;
        $user->desc= $getdesc;
        $user->pimage=$name;

        $user->save();
        return redirect('/aindex')->with('success','New product added');
    }

    public function prodview()
    { 
        $prod=pmodel::all();
        return view('uindex',compact('prod'));

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
    public function search(Request $request)
    {
        $getpname=request('pname');
        $prod=pmodel::query()
        ->where('pname','LIKE',"%{$getpname}%")
        ->get();
        return view('uindex',compact('prod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=pmodel::find($id);

        $user->delete();


        return redirect('/userview');

    }
}
