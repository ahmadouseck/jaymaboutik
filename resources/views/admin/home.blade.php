

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

        @include('admin.body')
        <!-- main-panel ends -->

        @include('admin.script')
  </body>
</html>
