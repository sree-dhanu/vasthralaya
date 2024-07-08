
@include('admin.adminmain')
        

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Products</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/addproductAction" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputpname">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputpname" name="pname" placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputpdesc">Product Description</label>
                    <textarea  class="form-control"  name="pdesc" id="exampleInputdescription" placeholder="Enter description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputpcat">Product Category</label>
                    <select name="pcat" id="cat1">
                      <option value="select">--Select--</option>
                      @foreach($selectcategory as $value)
                      <option value="{{$value->id}}">{{$value->catname}}</option>
                      @endforeach
                    </select>
                    <!-- <input type="text" class="form-control" id="exampleInputTitle" name="title" placeholder="Enter title"> -->
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputpimg">Product Image</label>
                    <input type="file" class="form-control" id="exampleInputpimg" name="pimg" placeholder="Enter product image">
                  </div>
                  <div class="form-group">
                    <label for="size"> Size:</label>
                    <input type="text" class="form-control" id="size" name="size1" placeholder="Enter the size of products">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputrate">Rate</label>
                    <input type="text" class="form-control" id="exampleInputrate" name="rate" placeholder="Enter rate">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputstock">Stock</label>
                    <input type="text" class="form-control" id="exampleInputstock" name="stock" placeholder="Enter stock">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputastock">Available Stock</label>
                    <input type="text" class="form-control" id="exampleInputastock" name="astock" placeholder="Enter availble stock">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           
            
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
