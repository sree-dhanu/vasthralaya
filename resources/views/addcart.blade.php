


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Cart</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    var quantity,price,total;
   $(document).ready(function(){
    $("#qty1").on("change",function(){
        price=parseInt($("#price1").val());
        //alert(price);
        quantity=parseInt($("#qty1").val());
        
        total=$("#tot1").val(price*quantity);
        //alert(total);
    })
}) 
         
</script>
<style>
    .card
    {
      width: 400px;
      height:600px;  
    }
    body
    {
      /* background-image:url('/images/cartback.jpg');  */
        /* background-repeat:no-repeat; */
    }
</style>
</head>
<body>
    
<section class="membership-section section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                            <h2><span>Add</span> Cart</h2>
                        </div>
</div>
                        <div class="row ">
                        <div class="col-md-4"></div>
                <div class="col-md-4 product">
                 <center> 
                      <div class="card ">
                    @foreach($addcart as $val)
                    <form action="/addcartAction/{{$val->id}}" method="post">
                        @csrf
                        <div class="card-body">

                        
<center><img src="/productsimage/{{$val->pimage}}" alt="image" width="300px" height="300px"> </center><br>
<table>
    <tr>
        <td><label for="pname">Name:</label></td>
        <td>{{$val->pname}}</td>
    </tr>
    <tr>
          <td><label for="price">Price:</label></td>  
          <td>{{$val->price}}
                    <input type="hidden" name="price" id="price1" value="{{$val->price}}">
                <input type="hidden" name="category" id="category1" value="{{$val->pcategory}}"></td>
    </tr>
    <tr>
        <td><label for="qty">Quantity:</label></td>
        <td><input type="text" name="qty" id="qty1" value="1" min="1"></td>
    </tr>
    <tr>
        <td><label for="total">Total:</label></td>
        <td><input type="text" name="tot" id="tot1" value="{{$val->price}}"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="add" id="add" value="Add Cart" class="btn btn-success"></td>
    </tr>
    </table>

     </div>
        </div></center>
            </div>
                <div class="col-md-4"></div>
                 </div>
                 </form>
                @endforeach

            </div>
</div>
<div>
</section>

</body>
</html>























