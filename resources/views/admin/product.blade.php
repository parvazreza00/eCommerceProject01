<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
  </head>
  <body>
      <!--partial|sidebar-->
            @include('admin.sidebar')

      <!-- partial|top-navbar -->

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <div class="container text-center pt-2">
                <div>
                    <h1>Add Products</h1>
                </div>
                {{-- uploading success message--}}
                <div class="row">
                    <div class="col-md-4 pt-3">
                    </div>
                    <div class="col-md-4 pt-3">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                {{session()->get('message')}}

                            </div>
                        @endif
                    </div>
                    <div class="col-md-4 pt-3">
                    </div>
                </div>

                {{-- product image upload form --}}
                <form action="{{url('/uploadproduct')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row ">
                    <div class="col-md-4 pt-3">
                    </div>
                    <div class="col-md-4 pt-3">
                        <label for="" class="form-label">Product Title</label>
                        <input type="text" class="form-control text-white" name="title" placeholder="product title" required>
                    </div>
                    <div class="col-md-4 pt-3">
                    </div>

                    <div class="col-md-4 pt-3">
                    </div>
                    <div class="col-md-4 pt-3">
                        <label for="" class="form-label">Price</label>
                        <input type="number" class="form-control text-white" name="price" placeholder="price" required>
                    </div>
                    <div class="col-md-4 pt-3">
                    </div>

                    <div class="col-md-4 pt-3">
                    </div>
                    <div class="col-md-4 pt-3">
                        <label for="" class="form-label">Description</label>
                        <input type="text" class="form-control text-white" name="description" placeholder="description" required>
                    </div>
                    <div class="col-md-4 pt-3">
                    </div>

                    <div class="col-md-4 pt-3">
                    </div>
                    <div class="col-md-4 pt-3">
                        <label for="" class="form-label">Quantity</label>
                        <input type="text" class="form-control text-white" name="quantity" placeholder="quantity" required>
                    </div>
                    <div class="col-md-4 pt-3">
                    </div>

                    <div class="col-md-4 pt-3">
                    </div>
                    <div class="col-md-4 pt-3">
                         <label for="" class="form-label">Chooce File</label>
                        <input type="file" class="form-control " name="file" required>
                    </div>
                    <div class="col-md-4 pt-3">
                    </div>

                    <div class="col-md-4 pt-3">
                    </div>
                    <div class="col-md-4 pt-3">
                        <input type="submit" class="btn btn-primary" >
                    </div>
                    <div class="col-md-4 pt-3">
                    </div>

                </div>
                </form>

            </div>



         </div>


      <!-- partial|main-body start -->


            @include('admin.script')
  </body>
</html>
