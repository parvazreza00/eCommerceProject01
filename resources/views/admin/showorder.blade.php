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

            <div class="container" style="width: 95%;" >
                <div class="d-flex align-items-center justify-content-center">
                    <h2>Customer Orders Details</h2>
                </div>
                <div class="w-100">
                    <table class="table table-secondary">
                        <thead>
                            <th>Customer Name</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>

                            @foreach ($data as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->phone}}</td>
                                    <td>{{$data->address}}</td>
                                    <td>{{$data->product_name}}</td>
                                    <td>{{$data->price}}</td>
                                    <td>{{$data->quantity}}</td>
                                    <td>{{$data->status}}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{url('/updatestatus',$data->id)}}">Delivered</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>





        </div>


            @include('admin.script')
  </body>
</html>
