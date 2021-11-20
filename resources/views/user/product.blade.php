
<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            {{-- <h2>Latest Products</h2> --}}
            {{-- <a href="nosproduit">voir tous les produits <i class="fa fa-angle-right"></i></a> --}}

            <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding:10px;">
                <input class="form-control" type="search" name="search" placeholder="Rechercher un produit">
                <input type="submit" value="Rechercher" class="btn btn-success">
            </form>


          </div>
        </div>




            @foreach ($data as $product )

                <div class="col-md-4">
                  <div class="product-item">
                        <a href="#"><img height="300" width="150" src="/productimage/{{$product->image}}" alt=""></a>
                        <div class="down-content">
                        <a href="#"><h4>{{$product->title}}</h4></a>
                        <h6>{{$product->price}} F CFA</h6>
                        <p>{{$product->description}}</p>

                        <form action="{{url('addcart',$product->id)}}" method="POST">
                            @csrf

                            <input type="number" value="1" min="1" class="form-control" name="quantity" style="width:100px;">
                            <br/>
                            <input type="submit" class="btn btn-primary" value="Ajout Panier">

                        </form>

                        </div>
                   </div>
                </div>

            @endforeach

            @if (method_exists($data,'links'))

              <div class="d-flex justify-content-center">

                 {!! $data->links()  !!}

              </div>
            @endif


      </div>
    </div>
  </div>
