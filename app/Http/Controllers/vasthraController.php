<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use App\Models\contact;
use App\Models\product;

class vasthraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['aboutcont']=about::get();
        $productss['contents']=product::get();
        return view('frontend.index',$data,$productss);
    }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    
    
     public function contactAction(Request $request)
     {
        $customername=$request->input('full-name');
        $email=$request->input('email');
        $message=$request->input('message');


        $data=[
            'custname'=>$customername,
            'custemail'=>$email,
            'message'=>$message
        ];
        contact::insert($data);
        return redirect('/');
     } 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
