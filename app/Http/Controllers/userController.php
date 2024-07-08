<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userreg;
use App\Models\about;
use App\Models\product;
use App\Models\category;
use App\Models\cart;
use App\Models\plceorder;



class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function userindex()
    {
        $userid=session('sessid');
        $data1['aboutcont']=about::get();
        $data1['procontents']=product::get();
        $data1['cate']=category::get();
        $data1['profile']=userreg::where('id',$userid)->get();
        //return view('frontend.index',$data,$productss);
        return view('userindex',$data1);
    }
    public function userregister()
    {
       return view('userregister');
    }

    public function userregAction(Request $request)
    {
        $name=$request->input('name');
        $age=$request->input('age');
        $gender=$request->input('gen');
        $place=$request->input('place');
        $phone=$request->input('phn');
        $item=$request->input('item');
        $address=$request->input('adrs');
        $uname=$request->input('uname');
        $passwd=$request->input('passwd');
       

        $data=[
            'cusname'=>$name,
            'age'=>$age,
            'gender'=>$gender,
            'place'=>$place,
            'phone'=>$phone,
            'item'=>$item,
            'address'=>$address,
            'uname'=>$uname,
            'passwd'=>$passwd

        ];
        userreg::insert($data);
        return redirect('/');
    }

    public function userloginAction(Request $request)
    {
        $username=$request->input('user');
        $password=$request->input('password');

       $result=userreg::where('uname',$username)->where('passwd',$password)->first();
        if($result == true)
        {
            $request->session()->put(array('sessid'=>$result->id));
            $request->session()->put(array('sessname'=>$result->cusname));
            return redirect('/userindex');
        }
        else
        {
            //echo "<p style='color:red'>Invalid username  or password </p>";
          return redirect('')->with('error','Invalid username  or password');
        }
    }
    public function view($id)
    {
        $procat['prod']=where('id',$id)->get();
        return redirect('/userindex');
    }
    public function addcart($id)
    {
        $cart['addcart']=product::where('id',$id)->get();
        return view('addcart',$cart);
    }
    public function addcartAction(Request $request,$id)
    {
        $userid=session('sessid');
        $productid=$id;
        $category=$request->input('category');
        $quantity=$request->input('qty');
        $total=$request->input('tot');
        
        //$product=$request->input('')


        $data=[
            'userid'=>$userid,
            'productid'=>$productid,
            'category'=>$category,
            'quantity'=>$quantity,
            'total'=>$total
        ];
        cart::insert($data);
       return redirect('/userviewcart');
    }

    public function userprofile()
    {
        return view('userprofile');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function userviewcart()
    {
       // $count=1;
        
         $userid=session('sessid');
         $data['userviewcart']=cart::join('products','carts.productid','=','products.id')
                     ->where('carts.userid',$userid)
                     ->where('carts.status','cart')
                     ->select('carts.quantity',
                     'carts.total',
                     'products.pname',
                     'products.price',
                    //  'product.pcategory',
                     'carts.id')
                     ->get();
        //         $data['sum']=cart::select('sum()');

                     return view('userviewcart',$data);


    }
    public function addingproducts()
    {
        
            return redirect('/userindex');
           // $value++;
     }
    
  
    public function cartdelete($id)
    {
        cart::where('id',$id)->delete();
        return redirect('/userviewcart');
    }
    public function placeorder()
    {
         $uid=session('sessid');
        //  if($uid<=1){
         $order['aa']=cart::join('userregs','carts.userid','=','userregs.id')
         ->where('carts.userid',$uid)
         ->select('userregs.cusname')->get();
        //  }
         $order['vv']=cart::join('products','carts.productid','=','products.id')
                                //  ->join('userregs','carts.userid','=','userregs.id')
                                  ->where('carts.userid',$uid)
                                  ->where('carts.status','cart')
                                  ->select( 'products.pname',
                                            'carts.quantity',
                                            'carts.total')
                                            ->get();
        $order['data']=cart::join('userregs','carts.userid','=','userregs.id')
        ->where('carts.userid',$uid)
        ->update(['status'=>'order']);
       
     return view('/placeorder',$order);
    }
    // public function userviewcart()
    // {

    //     return view('userviewcart');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function userlogout(Request $request)
    {
       $request->session()->forget('sessid');
       return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function placeorderAction(Request $req)
    {
        $grand=0;
        $userid=session('sessid');
        $customer=session('sessname');
        //$tot=$request->input('tot11');
        $grand=cart::join('userregs','carts.userid','=','userregs.id')
        ->where('carts.status','order')
        ->where('carts.userid',$userid)
        ->SUM('carts.total');
         $data12=[
            'custid'=>$userid,
            'clientname'=>$customer,
            'grandtotal'=>$grand
         ];
         plceorder::insert($data12);
         return redirect('/proceed_to_pay');
        
    }
    public function proceed_to_pay()
    {
        $userid=session('sessid');
        $data22['placedata']=plceorder::where('custid',$userid)->get();
        return view('proceed_to_pay',$data22);
    }
    public function payment()
    {
        return view('payment');
    }
    public function message()
    {
        return view('message');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
