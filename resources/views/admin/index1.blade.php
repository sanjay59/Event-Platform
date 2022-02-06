<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

       <div class="row mt-4">
        <div class="col-md-6 col-xl-3">
            <a href="{{url('reguser')}}" class="card-box tilebox-one d-block mb-4 rounded">
                <h6 class="text-uppercase my-0">Total Registration</h6>
                <div class="mt-3 d-flex align-items-center justify-content-between">
                    <div class="mr-3"><h3 class="my-0">{{$count}}</h3></div>
                    <div><i class="mdi mdi-folder-edit-outline h2"></i></div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a href="{{url('loginuser')}}" class="card-box tilebox-one d-block mb-4 rounded">
                <h6 class="text-uppercase my-0">Live Login</h6>
                <div class="mt-3 d-flex align-items-center justify-content-between">
                    <div class="mr-3"><h3 class="my-0">{{$lcount}}</h3></div>
                    <div><i class="mdi mdi-account-multiple-plus-outline h2"></i></div>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-xl-3">
            <a href="{{url('comments')}}" class="card-box tilebox-one d-block mb-4 rounded">
                <h6 class="text-uppercase my-0">Total Comments</h6>
                <div class="mt-3 d-flex align-items-center justify-content-between">
                    <div class="mr-3"><h3 class="my-0">{{$ccount}}</h3></div>
                    <div><i class="mdi mdi-comment-text-multiple-outline h2"></i></div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a href="{{url('attending-users')}}" class="card-box tilebox-one d-block mb-4 rounded">
                <h6 class="text-uppercase my-0">Attended User</h6>
                <div class="mt-3 d-flex align-items-center justify-content-between">
                    <div class="mr-3"><h3 class="my-0">{{$attucount}}</h3></div>
                    <div><i class="mdi mdi-account-check-outline h2"></i></div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a href="{{url('not-attending-users')}}" class="card-box tilebox-one d-block mb-4 rounded">
                <h6 class="text-uppercase my-0">Not Attended User</h6>
                <div class="mt-3 d-flex align-items-center justify-content-between">
                    <div class="mr-3"><h3 class="my-0">{{$attucount}}</h3></div>
                    <div><i class="mdi mdi-account-remove-outline h2"></i></div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a href="{{url('rating')}}" class="card-box tilebox-one d-block mb-4 rounded">
                <h6 class="text-uppercase my-0">Star Rating</h6>
                <div class="mt-3 d-flex align-items-center justify-content-between">
                    <div class="mr-3"><h3 class="my-0">{{$ratingcount}}</h3></div>
                    <div><i class="mdi mdi-star-outline h2"></i></div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a href="{{url('show-like')}}" class="card-box tilebox-one d-block mb-4 rounded">
                <h6 class="text-uppercase my-0">Total Likes</h6>
                <div class="mt-3 d-flex align-items-center justify-content-between">
                    <div class="mr-3"><h3 class="my-0">{{$likecount}}</h3></div>
                    <div><i class="mdi mdi-thumb-up-outline h2"></i></div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a href="{{url('footfall')}}" class="card-box tilebox-one d-block mb-4 rounded">
                <h6 class="text-uppercase my-0">All Footfall</h6>
                <div class="mt-3 d-flex align-items-center justify-content-between">
                    <div class="mr-3"><h3 class="my-0">{{$allfootfall}}</h3></div>
                    <div><i class="mdi mdi-foot-print h2"></i></div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a href="{{url('footfall')}}" class="card-box tilebox-one d-block mb-4 rounded">
                <h6 class="text-uppercase my-0">Unique Footfall</h6>
                <div class="mt-3 d-flex align-items-center justify-content-between">
                    <div class="mr-3"><h3 class="my-0">{{$uniquefootfall}}</h3></div>
                    <div><i class="mdi mdi-foot-print h2"></i></div>
                </div>
            </a>
        </div>

    </div>


    <div class="row">
    <div class="col-md-12 col-xl-12">
        <a href="#" class="p-4 border d-block mb-4 rounded bg-white">
            <h6 class="text-uppercase my-0">Star Rating</h6>
            <div class="mt-3 d-flex align-items-center justify-content-between">
                <div class="mr-3"><h3 class="my-0">{{$ratingcount}}</h3></div>
                <div><i class="mdi mdi-star-outline h2 text-danger"></i></div>
            </div>
            <div class="mt-3 d-flex align-items-center justify-content-between">
             <ul class="list-group w-100">
              <li class="border-bottom mb-2 pb-2 d-flex justify-content-between align-items-center">
                <div><i class="mdi mdi-star text-warning font-14"></i><i class="mdi mdi-star text-warning font-14"></i><i class="mdi mdi-star text-warning font-14"></i><i class="mdi mdi-star text-warning font-14"></i><i class="mdi mdi-star text-warning font-14"></i>  </div>
                <span class="badge badge-primary badge-pill">{{$ratingcount5}}</span>
            </li>
            <li class="border-bottom mb-2 pb-2 d-flex justify-content-between align-items-center">
                <div><i class="mdi mdi-star text-warning font-14"></i><i class="mdi mdi-star text-warning font-14"></i><i class="mdi mdi-star text-warning font-14"></i><i class="mdi mdi-star text-warning font-14"></i>  </div>
                <span class="badge badge-primary badge-pill">{{$ratingcount4}}</span>
            </li>
            <li class="border-bottom mb-2 pb-2 d-flex justify-content-between align-items-center">
                <div><i class="mdi mdi-star text-warning font-14"></i><i class="mdi mdi-star text-warning font-14"></i><i class="mdi mdi-star text-warning font-14"></i>  </div>
                <span class="badge badge-primary badge-pill">{{$ratingcount3}}</span>
            </li>
            <li class="border-bottom mb-2 pb-2 d-flex justify-content-between align-items-center">
                <div><i class="mdi mdi-star text-warning font-14"></i><i class="mdi mdi-star text-warning font-14"></i>  </div>
                <span class="badge badge-warning badge-pill">{{$ratingcount2}}</span>
            </li><li class=" d-flex justify-content-between align-items-center">
                <div><i class="mdi mdi-star text-warning font-14"></i>  </div>
                <span class="badge badge-danger badge-pill">{{$ratingcount1}}</span>
            </li></ul>
        </div></a>
    </div>

</div>
</div>