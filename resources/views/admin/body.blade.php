<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card corona-gradient-card">
            <div class="card-body py-0 px-0 px-sm-3">
              <div class="row align-items-center">
                <div class="col-4 col-sm-3 col-xl-2">
                  <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                </div>

                <div class="col-5 col-sm-7 col-xl-8 p-0">
                  <h3 class="mb-1 mb-sm-0">Les statistiques des produits et des commandes</h3>
                  {{-- <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p> --}}
                </div>

                {{-- <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                  <span>
                    <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                  </span>
                </div> --}}


              </div>
            </div>
          </div>
        </div>
      </div>



      @include('admin.bgadmin.stats')

      @include('admin.bgadmin.echange')

      @include('admin.bgadmin.commerce')

      @include('admin.bgadmin.showmessage')




    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block col-md-12">Copyright &copy; 2021 Amadou SECK</span>
      </div>
    </footer>
    <!-- partial -->
  </div>
