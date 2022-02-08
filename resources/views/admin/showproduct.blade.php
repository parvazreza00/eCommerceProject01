<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
  </head>
  <body>
      <!--partial|sidebar-->
            @include('admin.sidebar')

      <!-- partial|top-navbar -->
            <div class="container-fluid page-body-wrapper">
                <div class="container mt-3 mb-5">

                    @if(session()->has('message'))
                        <div class="alert alert-danger text-center" style="width: 90%">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            {{session()->get('message')}}

                        </div>
                    @endif

                    <h2>Products Details</h2>

                    <div style="width: 90%">
                        <div class="w-100">
                            <table class="table">
                                <thead>
                                    <tr class="table table-primary">
                                        <th style="color:white">Title</th>
                                        <th style="color:white">Price</th>
                                        <th style="color:white">Description</th>
                                        <th style="color:white">Quantity</th>
                                        <th style="color:white">Image</th>
                                        <th style="color:white">Update</th>
                                        <th style="color:white">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                    <tr class="text-white">
                                        <td>{{$data->title}}</td>
                                        <td>{{$data->price}}</td>
                                        <td>{{$data->description}}</td>
                                        <td>{{$data->quantity}}</td>
                                        <td>
                                            <img style="height: 100px;width:100px" src="/productimage/{{$data->image}}" alt="">
                                        </td>
                                        <td><a href="{{url('/updateproductview',$data->id)}}" class="btn btn-info">Update</a></td>
                                        <td><a onclick="return confirm('Are You Sure to Delete?')" href="{{url('/deleteproduct',$data->id)}}" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        <!-- partial -->

      <!-- partial|main-body start -->


            @include('admin.script')
  </body>
</html>
