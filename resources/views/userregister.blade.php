<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registeration</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body
        {
          background-image:url('images/blackback.jpg'); 
        /* background-repeat: no-repeat; */
        }
        .jumbotron
        {
          background-color:white;
          opacity:0.8;
          /* //padding-top:500px; */
          width:1200px;
          height:1100px;
          
        }
        form
        {
          background-color:lightblue;
         /* color:darkred; */
        }
        /* input[type="text"],input[type="submit"]
        {
          color:maroon;
          text-weight:bold;
        } */
        input[type="text"],input[type="tel"],input[type="password"]
        {
          border:none;
          border-bottom:2px solid black;
        }
        textarea{
          border:none;
          /* borer-bottom:2px solid black; */
        }
    </style>
</head>
<body>
  <div class="container">
    <div class="row">
     
      <div class="col-sm-12">
      <div class="jumbotron">
        <div class="row">
        <div class="col-sm-6">
          <img src="/images/reg.jpg" alt="register" height="950px" width="600px">
        </div>
        <div class="col-sm-6">
        <h2 style="color:black">User Registration</h2>
      <form action="/userregAction" method="post" autocomplete="off">
        @csrf
        <table class="table">
          <tr>
            <td>
            <label for="Name"><b>Name</b></label>
           <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control">
            </td>
          </tr>
          <tr>
            <td>
            <label for="age"><b>Age</b></label>
            <input type="text" name="age" id="age" placeholder="Enter your age" class="form-control">
            </td>
          </tr>
          <tr>
            <td>
            <label for="gender"><b>Gender</b></label>
            <input type="radio" name="gen" id="gender" value="male" ><b>Male</b>
            <input type="radio" name="gen" id="gender" value="female" ><b>Female</b>
            </td>
          </tr>
          <tr>
            <td>
            <label for="place"><b>Place</b></label>
           <input type="text" name="place" id="place" placeholder="Enter your place" class="form-control">
            </td>
          </tr>
          <tr>
            <td>
            <label for="phone"><b>Phone</b></label>
           <input type="tel" name="phn" id="phn" placeholder="Enter your contact number" class="form-control">
            </td>
          </tr>
          <tr>
            <td>
            <label for="Item"><b>Item</b></label>
            <input type="text" name="item" id="item" placeholder="Enter the item u want?" class="form-control">
            </td>
          </tr>
          <tr>
            <td>
            <label for="address"><b>Address</b></label>
             <textarea name="adrs" id="adrs" placeholder="Enter your contact details" class="form-control"></textarea>
            </td>
          </tr>
          <tr>
            <td>
            <label for="username"><b>Username</b></label>
            <input type="text" name="uname" id="uname" placeholder="Enter your username" class="form-control">
            </td>
          </tr>
          <tr>
            <td>
            <label for="password"><b>Password</b></label>
            <input type="password" name="passwd" id="passwd" placeholder="Enter your password" class="form-control">
            </td>
          </tr>
          <tr>
            <td><input type="submit" value="Register" name="reg" id="reg" class="btn btn-info"></td>
          </tr>
        </table>
     
      
      </form>
      </div>
      </div>
      </div>
      </div>
    
     
     
    </div>
  </div>
</body>
</html>