
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




<div class="container-fluid page-body-wrapper" >
  <div class="container" align="center">

<div class="row mt-2">
    <div class="col-md-8 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-row justify-content-between">
            <h4 class="card-title">Messages</h4>
            {{-- <p class="text-muted mb-1 small">Voir tous les messages</p> --}}
          </div>
          <div class="preview-list">


            @foreach ($message as $messages)

            <div class="preview-item border-bottom">
              <div class="preview-item-content d-flex flex-grow">
                <div class="flex-grow">
                  <div class="d-flex d-md-block d-xl-flex justify-content-between">
                    <h5 class="preview-subject">Message de {{$messages->name}}</h5>
                    <p class="text-muted text-small">{{$messages->created_at}}</p>
                  </div>
                  <h6>Sujet: {{$messages->subject}}</h6> <br>
                  <p class="text-muted">{{$messages->message}}</p>
                </div>
              </div>
            </div>

            @endforeach

          </div>
        </div>
      </div>
    </div>

</div>
</div>


   <!-- main-panel ends -->

   @include('admin.script')
</body>
</html>

