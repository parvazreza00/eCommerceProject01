 <div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}

        </div>
    @endif
</div>
 
 <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>

                <form action="{{url('/search')}}" method="get" class="form-inline" style="float: right">
                @csrf
                  <input type="search" class="form-control" name="search" placeholder="Search...">
                  <input type="submit" value="Search" class="btn btn-primary" >
                </form>

            </div>
          </div>
          @foreach($data as $product)
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="productimage/{{$product->image}}" alt="" style="width: 300px; height:240px" class="rounded mg-thumbnail"></a>
              <div class="down-content">
                <a href="#"><h4>{{$product->title}}</h4></a>
                <h6>{{$product->price}}</h6>
                <p>{{$product->description}}</p>
                <form action="{{url('/addcart',$product->id)}}" method="post">
                  @csrf
                  <input type="number" class="form-control mb-2" value="1" min="1" name="quantity" style="width:90px">
                  <input type="submit" value="Add Cart" class="btn btn-primary">
                </form>

                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
            </div>
          </div>
          @endforeach

        </div>
        @if(method_exists($data,'links'))
                <div class="d-flex justify-content-center">
                    {!! $data->links() !!}
                </div>
            @endif
      </div>
    </div>
