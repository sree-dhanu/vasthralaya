<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use App\Models\category;
use App\Models\product;
use App\Models\userreg;
use App\Models\contact;
use App\Models\adminlogin;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminindex()
    {
        return view('/admin.adminindex');
    }
    public function addabout()
    {
        return view('/admin.addabout');
    }
    public function addaboutAction(Request $req)
    {
        $title=$req->input('title');
        $desc=$req->input('description');


        $data=
        [
            'title'=>$title,
            'descript'=>$desc
        ];
        about::insert($data);
        return redirect('/addabout');
    }
    public function viewabout()
    {
        $data['contents']=about::get();
        return view('admin.viewabout',$data);
    }
    public function viewaboutedit($id)
    {
        $data['editcontents']=about::where('id',$id)->get();
        return view('admin.viewaboutedit',$data);
    }
    public function editviewaboutAction(Request $req,$id)
    {
        $title=$req->input('title');
        $desc=$req->input('description');

        $data=[
            'title'=>$title,
            'descript'=>$desc
        ];
        about::where('id',$id)->update($data);
        return redirect('/viewabout');
    }
    public function viewaboutdelete($id)
    {
       about::where('id',$id)->delete();
       return redirect('/viewabout');
    }
    public function addcategory()
    {
        return view('/admin.addcategory');
    }
    public function addcategoryAction(Request $req)
    {
       $catname=$req->input('catname');
       $catimage=$req->file('catimage');
       
       $image=$catimage->getClientOriginalName();
       $catimage->move(public_path().'/categoryimage/',$image);

       $data=[
          'catname'=>$catname,
          'catimage'=>$image
       ];
       category::insert($data);
       return redirect('/addcategory');
    }
    public function viewcategory()
    {
        $data['category']=category::get();
        return view('admin.viewcategory',$data);
    }
    public function viewcatedit($id)
    {
        $data['editcategory']=category::where('id',$id)->get();
        return view('admin.viewcatedit',$data);
    }
    public function editcategoryAction(Request $req,$id)
    {
         echo "hii";
        $categoryname=$req->input('catname');
        $categoryimage=$req->file('catimage');

         if($categoryimage == "")
       {
         $data=['catname' =>$categoryname];
       }

       else{
        $image=$categoryimage->getClientOriginalName();
       $categoryimage->move(public_path().'/categoryimage/',$image);

       
       $data=[
          'catname'=>$categoryname,
          'catimage'=>$image
       ];
    }
       category::where('id',$id)->update($data);
       return redirect('/viewcategory');
    }
    public function viewcatdelete($id)
    {
        category::where('id',$id)->delete();
        return redirect('/viewcategory');
    }
   
    public function addproducts()
    {
        $data['selectcategory']=category::get();
        return view('admin.addproducts',$data);
    }
    public function addproductAction(Request $req)
    {
        $name=$req->input('pname');  
        $predes=$req->input('pdesc');    
        $category=$req->input('pcat');  
        $pimage=$req->file('pimg');
        $psize=$req->input('size1');  
        $price=$req->input('rate');  
        $stock=$req->input('stock');  
        $astock=$req->input('astock');  
        
        $products=$pimage->getClientOriginalName();
        $pimage->move(public_path().'/productsimage/',$products);
        
        $data=[
            'pname'=>$name,
            'pdescription'=>$predes,
            'pcategory'=> $category,
            'pimage'=>$products,
            'size'=>$psize,
            'price'=>$price,
            'stock'=>$stock,
            'availstock'=>$astock
        ];
        product::insert($data);
        return redirect('/addproducts');
    }

public function viewproducts()
{
 $data['products']=product::get();
 return view('/admin.viewproducts',$data);
}
public function viewproductsedit($id)
{
  $catname['selectcategory']=category::get();
  $data['editproducts']=product::where('id',$id)->get();
  return view('/admin.viewproductsedit',$data,$catname);
}
public function viewproductsupdateAction(Request $req,$id)
{
   $productname=$req->input('pname');
   $description=$req->input('pdesc');
   $category=$req->input('pcat');
   $Pimage=$req->file('pimg');
   $price=$req->input('rate');
   $stock=$req->input('stock');
   $availstock=$req->input('astock');

   if($Pimage == "")
   {
    $productupdate=['pname'=>$productname,
                    'pdescription'=>$description,
                    'pcategory'=>$category,
                    'price'=>$price,
                    'stock'=>$stock,
                    'availstock'=>$availstock
];
   }
   else{
    $proimage=$Pimage->getClientOriginalName();
    $Pimage->move(public_path().'/productsimage/',$proimage);

   

   $productupdate=[
    'pname'=>$productname,
    'pdescription'=>$description,
    'pcategory'=>$category,
    'pimage'=>$proimage,
    'price'=>$price,
    'stock'=>$stock,
    'availstock'=>$availstock
   ];
}
   product::where('id',$id)->update($productupdate);
   return redirect('/viewproducts');

}
public function viewproductsdelete($id)
{
   product::where('id',$id)->delete();
   return redirect('/viewproducts');
}
    /**
     * Store a newly created resource in storage.
     */
    public function viewusers()
    {
        $viewuser['viewprofile']=userreg::get();
       return view('/admin.viewusers',$viewuser);
    }
    public function viewcontact()
    {
        $viewcontact['viewcontacts']=contact::get();
        return view('/admin.viewcontact',$viewcontact);
    }
    public function adminlogin()
    {
        return view('/admin.adminlogin');
    }
    public function adminloginAction(Request $req)
    {
        $username=$req->input('user');
        $password=$req->input('pass');

        $login=adminlogin::where('user',$username)->where('pass',$password)->first();

        if(isset($login))
        {
            $req->session()->put(array('adminsession'=>$login->id));
            return redirect('/adminindex');
        }
        else{
            return redirect('/adminlogin')->with('error',"invalid username or password");
        }
    }
    /**
     * Display the specified resource.
     */
    public function adminlogout(Request $req)
    {
        $req->session()->forget('adminsession');
        return redirect('/adminlogin');
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

    /**0
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
