{{-- <div class="row">
    <div class="col-md-8 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">


          <div class="d-flex flex-row justify-content-between">
            <h4 class="card-title">Messages</h4>
            <p class="text-muted mb-1 small">Voir tous</p>
          </div>
          <div class="preview-list">


            @foreach ($message as $messages)

             <div class="preview-item border-bottom">
                 <div class="preview-thumbnail">
                 </div>
                 <div class="preview-item-content d-flex flex-grow">
                   <div class="flex-grow">
                     <div class="d-flex d-md-block d-xl-flex justify-content-between">
                       <h5 class="preview-subject">{{$messages->name}}</h5>
                       <p class="text-muted text-small">{{$messages->created_at}}</p>
                     </div>
                     <h6>{{$messages->subject}}</h6>
                     <p class="text-muted">{{$messages->message}}</p>
                   </div>
                 </div>
               </div>

            @endforeach





          </div>

        </div>
      </div>
    </div> --}}
                   {{-- <img src="assets/images/faces/face9.jpg" alt="image" class="rounded-circle" /> --}}



    {{-- <div class="col-md-6 col-xl-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Portfolio Slide</h4>
          <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
            <div class="item">
              <img src="assets/images/dashboard/Rectangle.jpg" alt="">
            </div>
            <div class="item">
              <img src="assets/images/dashboard/Img_5.jpg" alt="">
            </div>
            <div class="item">
              <img src="assets/images/dashboard/img_6.jpg" alt="">
            </div>
          </div>
          <div class="d-flex py-4">
            <div class="preview-list w-100">
              <div class="preview-item p-0">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                </div>
                <div class="preview-item-content d-flex flex-grow">
                  <div class="flex-grow">
                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                      <h6 class="preview-subject">CeeCee Bass</h6>
                      <p class="text-muted text-small">4 Hours Ago</p>
                    </div>
                    <p class="text-muted">Well, it seems to be working now.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p class="text-muted">Well, it seems to be working now. </p>
          <div class="progress progress-md portfolio-progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div> --}}



    <div class="col-md-16 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Mes Notes</h4>
          <div class="add-items d-flex">
            <input type="text" class="form-control todo-list-input" placeholder="entrer une tache..">
            <button class="add btn btn-primary todo-list-add-btn">Ajouter</button>
          </div>
          <div class="list-wrapper">
            <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
              <li>
                <div class="form-check form-check-primary">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox"> Create invoice </label>
                </div>
                <i class="remove mdi mdi-close-box"></i>
              </li>
              <li>
                <div class="form-check form-check-primary">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                </div>
                <i class="remove mdi mdi-close-box"></i>
              </li>
              <li class="completed">
                <div class="form-check form-check-primary">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                </div>
                <i class="remove mdi mdi-close-box"></i>
              </li>
              <li>
                <div class="form-check form-check-primary">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                </div>
                <i class="remove mdi mdi-close-box"></i>
              </li>
              <li>
                <div class="form-check form-check-primary">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                </div>
                <i class="remove mdi mdi-close-box"></i>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>