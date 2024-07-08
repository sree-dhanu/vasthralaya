<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>placeorder</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        // var  total,grandtot=0, result;
        // $(document).ready(function(){
        // $("#gtotal").click(function(){
        //     if()
        //     total=parseInt($("#tot").val());
        //     alert(total);
        //     grandtot=grandtot+total;
        // });
            // $("#gtot").on("change",function(){
            //     total=parseInt($("#tot").val());
            //     grandtot=grandtot+total;

            //   result= parseInt($("#gtot").val(grandtot));
            // });
        // });
    </script>
    <style>
        .card-body{
            background-color:lightyellow;
        }
        .cus1{
            float:left;
        }
    </style>

</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="card-text"><h2>Place Order</h2></div>
            </div>
            <div class="card-body">
                <!-- @foreach($aa as $value)
            <label for="cusname" class="cus1"><b>Customer Name:{{$value->cusname}}</b></label>
            @endforeach -->

               
                <form action="/placeorderAction" method="POST">
                @csrf
             <table class="table">
                <thead>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Total Amount</th>
                </thead>
                <tbody>
                @foreach($vv as $value)  
                    <tr>
                        <td>{{$value->pname}}</td>
                        <td>{{$value->quantity}}</td>
                        <td>{{$value->total}}</td>
                        <input type="hidden" name="tot11" id="tot" value="{{$value->total}}">
                    </tr>
                    @endforeach
                </tbody>
             </table>
             <!-- <label for="gtotal">Grand Total:<input type="text" name="gtotal" id="gtot" value="{{}}"></label> -->
             <button id="gtotal" class="btn btn-success text-white">Proceed</button>
                <!-- <input type="submit" name="grand" id="gtotal" value="Grand Total" class="btn btn-success text-dark"> -->
                <!-- <p id="grandtot"></p> -->
             </form>
             
                         </div>

        </div>
    </div>
</body>
</html>