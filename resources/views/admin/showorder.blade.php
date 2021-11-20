

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
                    <tr>
                        <tr style="background-color:red;">
                            <td style="padding: 20px;">Nom du Client</td>
                            <td style="padding: 20px;">Téléphone</td>
                            <td style="padding: 20px;">Adresse</td>
                            <td style="padding: 20px;">Nom du produit</td>
                            <td style="padding: 20px;">Prix</td>
                            <td style="padding: 20px;">Quantité</td>
                            <td style="padding: 20px;">Statut</td>
                            <td style="padding: 20px;">Action</td>
                        </tr>
                    </tr>

                    @foreach ($order as $orders)

                    <tr align-items:center; style="background-color:black;">
                        <td style="padding: 20px;">{{$orders->name}}</td>
                        <td style="padding: 20px;">{{$orders->phone}}</td>
                        <td style="padding: 20px;">{{$orders->address}}</td>
                        <td style="padding: 20px;">{{$orders->product_name}}</td>
                        <td style="padding: 20px;">{{$orders->price}}</td>
                        <td style="padding: 20px;">{{$orders->quantity}}</td>
                        <td style="padding: 20px;">{{$orders->status}}</td>
                        <td style="padding: 20px;"><a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">
                            Delivré</a></td>
                    </tr>

                    @endforeach
                </table>

            </div>
        </div>


        <!-- main-panel ends -->

        @include('admin.script')
  </body>
</html>
