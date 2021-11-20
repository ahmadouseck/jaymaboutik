

<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.slidebar')
      <!-- partial -->

         @include('admin.navbar')

        <!-- partial -->


        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{ session()->get('message')}}
                    </div>
                @endif


                <table>
                    <tr style="background-color:red;">
                        <td style="padding: 20px;">Nom</td>
                        <td style="padding: 20px;">Description</td>
                        <td style="padding: 20px;">Quantité</td>
                        <td style="padding: 20px;">Prix</td>
                        <td style="padding: 20px;">Image</td>
                        <td style="padding: 20px;">Mettre à jour </td>
                        <td style="padding: 20px;">Supprimer</td>
                    </tr>

                    @foreach ($data as $product )

                    <tr align-items:center; style="background-color:black;">
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->price}}</td>
                        <td><img height="100px" width="100px" src="/productimage/{{$product->image}}" alt=""></td>
                         <td>
                             <a class="btn btn-primary" href="{{url('updateview',$product->id)}}">
                            <i class="fa fa-edit" aria-hidden="true"></i></a></td>
                         <td>
                             <a class="btn btn-danger" onclick="return confirm('Etes-vous de supprimer')" href="{{url('deleteproduct',$product->id)}}">
                            <i class="fa fa-trash "aria-hidden="true"></i></a>
                        </td>

                    </tr>

                    @endforeach
                </table>

            </div>

        </div>

        <!-- main-panel ends -->

        @include('admin.script')
  </body>
</html>
