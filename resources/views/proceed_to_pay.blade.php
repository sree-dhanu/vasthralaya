<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceed_to_pay</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 <style>
   .card{
    margin-top:150px;
   }
   /* body
   {
    background-image:url('/images/proceedtopay.jpg');
   }
    */
 </style>
</head>
<body>
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            
        </div>
        <div class="col-md-4">
    <div class="card">
        <div class="card-header bg-warning">
            <div class="card-text"><h2 style="color:balck"><b>Order Details</b></h2></div>
        </div>
        @foreach($placedata as $value)  
        <div class="card-body">
            <table class="table">
                <tr>
           <td> <label for="usrname"><b>Name:</b></lable></td>
           <td>{{$value->clientname}}</td>
            </tr>
            <tr>
                <td><label for="tamount"><b>Grand Total:</b></lable></td>
                <td> {{$value->Grandtotal}}</td>
            </tr>
           
            </table>
        </div>
        @endforeach
        <a href="/payment" class="btn btn-dark text-white">Proceed to pay</a>
    </div>
</div>
<div class="col-md-4">
            
            </div>
    </div>
   </div> 
</body>
</html>