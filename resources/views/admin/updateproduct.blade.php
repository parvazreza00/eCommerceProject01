<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
      @include('admin.css')
  </head>
  <body>
      <!--partial|sidebar-->
            @include('admin.sidebar')

        <div class="container-fluid page-body-wrapper">

            <div class="container text-center mt-2 mb-3">
                <div>
                    <h1>Update Products</h1>
                </div>
                {{-- uploading success message--}}
                <div class="row">
                    <div class="col-md-4 pt-3">
                    </div>
                    <div class="col-md-4 pt-3 text-center">
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

                {{-- product image update form --}}
                <form action="{{url('/updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row ">
                    <div class="col-md-4 pt-3">
                    </div>
                    <div class="col-md-4 pt-3">
                        <label for="" class="form-label">Product Title</label>
                        <input type="text" class="form-control text-white" name="title" value="{{$data->title}}" required>
                    </div>
                    <div class="col-md-4 pt-3">
                    </div>

                    <div class="col-md-4 pt-3">
                    </div>
                    <div class="col-md-4 pt-3">
                        <label for="" class="form-label">Price</label>
                        <input type="number" class="form-control text-white" name="price" value="{{$data->price}}" required>
                    </div>
                    <div class="col-md-4 pt-3">
                    </div>

                    <div class="col-md-4 pt-3">
                    </div>
                    <div class="col-md-4 pt-3">
                        <label for="" class="form-label">Description</label>
                        <input type="text" class="form-control text-white" name="description" value="{{$data->description}}" required>
                    </div>
                    <div class="col-md-4 pt-3">
                    </div>

                    <div class="col-md-4 pt-3">
                    </div>
                    <div class="col-md-4 pt-3">
                        <label for="" class="form-label">Quantity</label>
                        <input type="text" class="form-control text-white" name="quantity" value="{{$data->quantity}}" required>
                    </div>
                    <div class="col-md-4 pt-3">
                    </div>

                    <div class="col-md-4 pt-3">
                    </div>
                    <div class="col-md-4 pt-3">
                        <label for="" class="form-label">Old Image</label><br>
                        <img style="height: 100px;width:100px" src="/productimage/{{$data->image}}" alt="">
                    </div>
                    <div class="col-md-4 pt-3">
                    </div>

                    <div class="col-md-4 pt-3">
                    </div>
                    <div class="col-md-4 pt-3">
                         <label for="" class="form-label">Chooce Image</label>
                        <input type="file" class="form-control " name="file" >
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


            @include('admin.script')
  </body>
</html>
