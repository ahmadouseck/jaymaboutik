

<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')

     <style type="text/css">
       .title{
        color: white;
        padding-top: 25px;
        font-size: 25px;
       }

       label
       {
           display: inline-block;
           width: 200px;
       }
     </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.slidebar')
      <!-- partial -->

         @include('admin.navbar')

        <!-- partial -->

        <div style="padding-bottom: 30px;" class="container-fluid page-body-wrapper">

            <div class="container" align="center">
               <h1 class="title">Ajouter un produit</h1>

                @if (session()->has('message'))

                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>

                        {{ session()->get('message')}}
                    </div>
                @endif



              <form action="{{url('uploadproduct')}}" method="POST" enctype="multipart/form-data">

                  @csrf

                   <div style="padding: 15px;">
                        <label for="title">Nom du Produit</label>
                        <input style="color: black;" type="text" name="title" placeholder="Donner le nom du produit" required>
                    </div>

                    <div style="padding: 15px;">
                        <label for="price">Prix du Produit</label>
                        <input style="color: black;" type="number" name="price" placeholder="Donner le prix du produit" required>
                    </div>

                    <div style="padding: 15px;">
                        <label for="des">Description du Produit</label>
                        <input style="color: black;" type="text" name="des" placeholder="Donner la description du produit" required>
                    </div>

                    <div style="padding: 15px;">
                            <label for="quantity">Quantité du Produit</label>
                            <input style="color: black;" type="text" name="quantity" placeholder="Donner la quantité du produit" required>
                    </div>

                    <div style="padding: 15px;">
                            <input type="file" name="file">
                    </div>

                    <div style="padding: 15px;">
                        <input type="submit" value="enregistrer" class="btn btn-success">
                   </div>

                </form>

            </div>
        </div>



        <!-- main-panel ends -->

        @include('admin.script')
  </body>
</html>
