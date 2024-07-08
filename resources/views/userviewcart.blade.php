


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userviewcart </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
//    var quantity,price,total;
//    $(document).ready(function(){
//     $("#qty1").on("change",function(){
//         price=parseInt($("#price1").val());
       
//         quantity=parseInt($("#qty1").val());
        
//         total=$("#tot1").val(price*quantity);
//         //alert(total);
//     })
// }) 
         
</script>
<style>
    
   /* input[type="submit"]
   {
        float:right;
   } */
   
</style>
</head>
<body>
    

                <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-12">
                    
                        <!-- <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4"> -->
                            <div class="card">
                                <div class="card-header bg-primary ">
                               <div class="card-title"><h2><span>Userview</span> Cart</h2></div>
                        </div>
                        <form action="" method="post">
                        <table class="table">
   <center> <thead>
        <th>ID</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <!-- <th>Size</th> -->
        <th>Price</th>
        <th>Total</th>
        <th>Duraton of Delivery</th>
    </thead></center>
    <tbody>
    @foreach($userviewcart as $val)
        <tr>
            <td>{{$val->id}}</td>
            <td>{{$val->pname}}</td>
            <td>{{$val->quantity}}</td>
            <td>{{$val->price}}</td>
            <td>{{$val->total}}</td>
            <td>Product delivered within one week </td>
            <td><a href="/cartdelete/{{$val->id}}">delete</a></td>
        </tr>
        @endforeach
    </tbody>

    </table>
    </form>
                     </div></div>

<!-- <input type="submit" name="addpro" id="addpro1" value="Addproducts" class="btn btn-success"> -->

                     </div>
                
                     <a href="/userindex" class="btn btn-success">Addproducts</a>
                    <a href="/placeorder" class="btn btn-info">Placeorder</a>
   




</body>
</html>























