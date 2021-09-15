<?= $this->Html->css('dashboard.css') ?>
<?= $this->Html->css('dashboard.css') ?>

<div class="content-body"><div id="user-profile">
  <!-- profile header -->
  <div class="row">
    <div class="col-12">
      <div class="card profile-header mb-2">
        <!-- profile cover photo -->
        <img class="card-img-top" src="../../../app-assets/images/profile/user-uploads/timeline.jpg" alt="User Profile Image">
        <!--/ profile cover photo -->

        <div class="position-relative">
          <!-- profile picture -->
          <div class="profile-img-container d-flex align-items-center">
            <div class="profile-img">
              <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" class="rounded img-fluid" alt="Card image">
            </div>
            <!-- profile title -->
            <div class="profile-title ms-3">
              <h2 class="text-white">Kitty Allanson</h2>
              <p class="text-white">UI/UX Designer</p>
            </div>
          </div>
        </div>

        <!-- tabs pill -->
        <div class="profile-header-nav">
          <!-- navbar -->
          <nav class="navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100">
            <button class="btn btn-icon navbar-toggler waves-effect waves-float waves-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify font-medium-5"><line x1="21" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="3" y2="18"></line></svg>
            </button>

            <!-- collapse  -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="profile-tabs d-flex justify-content-between flex-wrap mt-1 mt-md-0">
                <ul class="nav nav-pills mb-0">
                  <li class="nav-item">
                    <a class="nav-link fw-bold active" href="#">
                      <span class="d-none d-md-block">Feed</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rss d-block d-md-none"><path d="M4 11a9 9 0 0 1 9 9"></path><path d="M4 4a16 16 0 0 1 16 16"></path><circle cx="5" cy="19" r="1"></circle></svg>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">
                      <span class="d-none d-md-block">About</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info d-block d-md-none"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">
                      <span class="d-none d-md-block">Photos</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image d-block d-md-none"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">
                      <span class="d-none d-md-block">Friends</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users d-block d-md-none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </a>
                  </li>
                </ul>
                <!-- edit button -->
                <button class="btn btn-primary waves-effect waves-float waves-light">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit d-block d-md-none"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                  <span class="fw-bold d-none d-md-block">Edit</span>
                </button>
              </div>
            </div>
            <!--/ collapse  -->
          </nav>
          <!--/ navbar -->
        </div>
      </div>
    </div>
  </div>
  <!--/ profile header -->

  <!-- profile info section -->
  <section id="profile-info">
    <div class="row">
      <!-- left profile info section -->
      <div class="col-lg-3 col-12 order-2 order-lg-1">
        <!-- about -->
        <div class="card">
          <div class="card-body">
            <h5 class="mb-75">About</h5>
            <p class="card-text">
              Tart I love sugar plum I love oat cake. Sweet ⭐️ roll caramels I love jujubes. Topping cake wafer.
            </p>
            <div class="mt-2">
              <h5 class="mb-75">Joined:</h5>
              <p class="card-text">November 15, 2015</p>
            </div>
            <div class="mt-2">
              <h5 class="mb-75">Lives:</h5>
              <p class="card-text">New York, USA</p>
            </div>
            <div class="mt-2">
              <h5 class="mb-75">Email:</h5>
              <p class="card-text">bucketful@fiendhead.org</p>
            </div>
            <div class="mt-2">
              <h5 class="mb-50">Website:</h5>
              <p class="card-text mb-0">www.pixinvent.com</p>
            </div>
          </div>
        </div>
        <!--/ about -->

        <!-- suggestion pages -->
        <div class="card">
          <div class="card-body profile-suggestion">
            <h5 class="mb-2">Suggested Pages</h5>
            <!-- user suggestions -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar me-1">
                <img src="../../../app-assets/images/avatars/12-small.png" alt="avatar img" width="40" height="40">
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Peter Reed</h6>
                <small class="text-muted">Company</small>
              </div>
              <div class="profile-star ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star font-medium-3"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div>
            </div>
            <!-- user suggestions -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar me-1">
                <img src="../../../app-assets/images/avatars/1-small.png" alt="avatar" width="40" height="40">
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Harriett Adkins</h6>
                <small class="text-muted">Company</small>
              </div>
              <div class="profile-star ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star font-medium-3"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div>
            </div>
            <!-- user suggestions -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar me-1">
                <img src="../../../app-assets/images/avatars/10-small.png" alt="avatar" width="40" height="40">
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Juan Weaver</h6>
                <small class="text-muted">Company</small>
              </div>
              <div class="profile-star ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star font-medium-3"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div>
            </div>
            <!-- user suggestions -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar me-1">
                <img src="../../../app-assets/images/avatars/3-small.png" alt="avatar img" width="40" height="40">
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Claudia Chandler</h6>
                <small class="text-muted">Company</small>
              </div>
              <div class="profile-star ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star font-medium-3"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div>
            </div>
            <!-- user suggestions -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar me-1">
                <img src="../../../app-assets/images/avatars/5-small.png" alt="avatar img" width="40" height="40">
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Earl Briggs</h6>
                <small class="text-muted">Company</small>
              </div>
              <div class="profile-star ms-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star profile-favorite font-medium-3"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              </div>
            </div>
            <!-- user suggestions -->
            <div class="d-flex justify-content-start align-items-center">
              <div class="avatar me-1">
                <img src="../../../app-assets/images/avatars/6-small.png" alt="avatar img" width="40" height="40">
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Jonathan Lyons</h6>
                <small class="text-muted">Beauty Store</small>
              </div>
              <div class="profile-star ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star font-medium-3"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div>
            </div>
          </div>
        </div>
        <!--/ suggestion pages -->

        <!-- twitter feed card -->
        <div class="card">
          <div class="card-body">
            <h5>Twitter Feeds</h5>
            <!-- twitter feed -->
            <div class="profile-twitter-feed mt-1">
              <div class="d-flex justify-content-start align-items-center mb-1">
                <div class="avatar me-1">
                  <img src="../../../app-assets/images/avatars/5-small.png" alt="avatar img" width="40" height="40">
                </div>
                <div class="profile-user-info">
                  <h6 class="mb-0">Gertrude Stevens</h6>
                  <a href="#">
                    <small class="text-muted">@tiana59</small>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  </a>
                </div>
                <div class="profile-star ms-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star font-medium-3"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                </div>
              </div>
              <p class="card-text mb-50">I love cookie chupa chups sweet tart apple pie ⭐️ chocolate bar.</p>
              <a href="#">
                <small>#design #fasion</small>
              </a>
            </div>
            <!-- twitter feed -->
            <div class="profile-twitter-feed mt-2">
              <div class="d-flex justify-content-start align-items-center mb-1">
                <div class="avatar me-1">
                  <img src="../../../app-assets/images/avatars/12-small.png" alt="avatar img" width="40" height="40">
                </div>
                <div class="profile-user-info">
                  <h6 class="mb-0">Lura Jones</h6>
                  <a href="#">
                    <small class="text-muted">@tiana59</small>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  </a>
                </div>
                <div class="profile-star ms-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star font-medium-3 profile-favorite"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                </div>
              </div>
              <p class="card-text mb-50">Halvah I love powder jelly I love cheesecake cotton candy. 😍</p>
              <a href="#">
                <small>#vuejs #code #coffeez</small>
              </a>
            </div>
            <!-- twitter feed -->
            <div class="profile-twitter-feed mt-2">
              <div class="d-flex justify-content-start align-items-center mb-1">
                <div class="avatar me-1">
                  <img src="../../../app-assets/images/avatars/1-small.png" alt="avatar img" width="40" height="40">
                </div>
                <div class="profile-user-info">
                  <h6 class="mb-0">Norman Gross</h6>
                  <a href="#">
                    <small class="text-muted">@tiana59</small>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  </a>
                </div>
                <div class="profile-star ms-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star font-medium-3"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                </div>
              </div>
              <p class="card-text mb-50">Candy jelly beans powder brownie biscuit. Jelly marzipan oat cake cake.</p>
              <a href="#">
                <small>#sketch #uiux #figma</small>
              </a>
            </div>
          </div>
        </div>
        <!--/ twitter feed card -->
      </div>
      <!--/ left profile info section -->

      <!-- center profile info section -->
      <div class="col-lg-6 col-12 order-1 order-lg-2">
        <!-- post 1 -->
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-start align-items-center mb-1">
              <!-- avatar -->
              <div class="avatar me-1">
                <img src="../../../app-assets/images/portrait/small/avatar-s-18.jpg" alt="avatar img" width="50" height="50">
              </div>
              <!--/ avatar -->
              <div class="profile-user-info">
                <h6 class="mb-0">Leeanna Alvord</h6>
                <small class="text-muted">12 Dec 2018 at 1:16 AM</small>
              </div>
            </div>
            <p class="card-text">
              Wonderful Machine· A well-written bio allows viewers to get to know a photographer beyond the work. This
              can make the difference when presenting to clients who are looking for the perfect fit.
            </p>
            <!-- post img -->
            <img class="img-fluid rounded mb-75" src="../../../app-assets/images/profile/post-media/2.jpg" alt="avatar img">
            <!--/ post img -->

            <!-- like share -->
            <div class="row d-flex justify-content-start align-items-center flex-wrap pb-50">
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2">
                <a href="#" class="d-flex align-items-center text-muted text-nowrap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart profile-likes font-medium-3 me-50"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                  <span>1.25k</span>
                </a>

                <!-- avatar group with tooltip -->
                <div class="d-flex align-items-center">
                  <div class="avatar-group ms-1">
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Trina Lynes">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" width="26" height="26">
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Lilian Nenez">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="Avatar" width="26" height="26">
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Alberto Glotzbach">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="Avatar" width="26" height="26">
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="George Nordic">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" width="26" height="26">
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Vinnie Mostowy">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-4.jpg" alt="Avatar" width="26" height="26">
                    </div>
                  </div>
                  <a href="#" class="text-muted text-nowrap ms-50">+140 more</a>
                </div>
                <!-- avatar group with tooltip -->
              </div>

              <!-- share and like count and icons -->
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2">
                <a href="#" class="text-nowrap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square text-body font-medium-3 me-50"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                  <span class="text-muted me-1">1.25k</span>
                </a>

                <a href="#" class="text-nowrap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 text-body font-medium-3 mx-50"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                  <span class="text-muted">1.25k</span>
                </a>
              </div>
              <!-- share and like count and icons -->
            </div>
            <!-- like share -->

            <!-- comments -->
            <div class="d-flex align-items-start mb-1">
              <div class="avatar mt-25 me-75">
                <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" width="34" height="34">
              </div>
              <div class="profile-user-info w-100">
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="mb-0">Kitty Allanson</h6>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart text-body font-medium-3"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                    <span class="align-middle text-muted">34</span>
                  </a>
                </div>
                <small>Easy &amp; smart fuzzy search🕵🏻 functionality which enables users to search quickly.</small>
              </div>
            </div>
            <div class="d-flex align-items-start mb-1">
              <div class="avatar mt-25 me-75">
                <img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" width="34" height="34">
              </div>
              <div class="profile-user-info w-100">
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="mb-0">Jackey Potter</h6>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart profile-likes font-medium-3"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                    <span class="align-middle text-muted">61</span>
                  </a>
                </div>
                <small>
                  Unlimited color🖌 options allows you to set your application color as per your branding 🤪.
                </small>
              </div>
            </div>
            <!--/ comments -->

            <!-- comment box -->
            <fieldset class="mb-75">
              <label class="form-label" for="label-textarea">Add Comment</label>
              <textarea class="form-control" id="label-textarea" rows="3" placeholder="Add Comment"></textarea>
            </fieldset>
            <!--/ comment box -->
            <button type="button" class="btn btn-sm btn-primary waves-effect waves-float waves-light">Post Comment</button>
          </div>
        </div>
        <!--/ post 1 -->

        <!-- post 2 -->
        <div class="card">
          <div class="card-body">
            <!-- avatar image and title -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar me-1">
                <img src="../../../app-assets/images/portrait/small/avatar-s-22.jpg" alt="avatar img" width="50" height="50">
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Rosa Walters</h6>
                <small class="text-muted">11 Dec 2019 at 1:16 AM</small>
              </div>
            </div>
            <!--/ avatar image and title -->
            <p class="card-text">
              Wonderful Machine· A well-written bio allows viewers to get to know a photographer beyond the work. This
              can make the difference when presenting to clients who are looking for the perfect fit.
            </p>
            <!-- post img -->
            <img class="img-fluid rounded mb-75" src="../../../app-assets/images/profile/post-media/25.jpg" alt="avatar img">
            <!--/ post img -->

            <!-- like share -->
            <div class="row d-flex justify-content-start align-items-center flex-wrap pb-50">
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2">
                <a href="#" class="d-flex align-items-center text-muted text-nowrap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart profile-likes font-medium-3 me-50"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                  <span>1.25k</span>
                </a>

                <!-- avatar group with tooltip -->
                <div class="d-flex align-items-center">
                  <div class="avatar-group ms-1">
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Trina Lynes">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" width="26" height="26">
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Lilian Nenez">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="Avatar" width="26" height="26">
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Alberto Glotzbach">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="Avatar" width="26" height="26">
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="George Nordic">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" width="26" height="26">
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Vinnie Mostowy">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-4.jpg" alt="Avatar" width="26" height="26">
                    </div>
                  </div>
                  <a href="#" class="text-muted text-nowrap ms-50">+271 more</a>
                </div>
                <!-- avatar group with tooltip -->
              </div>

              <!-- share and like count and icons -->
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2">
                <a href="#" class="text-nowrap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square text-body font-medium-3 me-50"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                  <span class="text-muted me-1">1.25k</span>
                </a>

                <a href="#" class="text-nowrap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 text-body font-medium-3 mx-50"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                  <span class="text-muted">1.25k</span>
                </a>
              </div>
              <!-- share and like count and icons -->
            </div>
            <!-- like share -->

            <!-- comments -->
            <div class="d-flex align-items-start mb-1">
              <div class="avatar mt-25 me-50">
                <img src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="Avatar" width="34" height="34">
              </div>
              <div class="profile-user-info w-100">
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="mb-0">Kitty Allanson</h6>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart text-body font-medium-3"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                    <span class="align-middle text-muted">34</span>
                  </a>
                </div>
                <small>Easy &amp; smart fuzzy search🕵🏻 functionality which enables users to search quickly. </small>
              </div>
            </div>
            <!--/ comments -->

            <!-- comment text area -->
            <fieldset class="mb-75">
              <label class="form-label" for="label-textarea2">Add Comment</label>
              <textarea class="form-control" id="label-textarea2" rows="3" placeholder="Add Comment"></textarea>
            </fieldset>
            <!--/ comment text area -->
            <button type="button" class="btn btn-sm btn-primary waves-effect waves-float waves-light">Post Comment</button>
          </div>
        </div>
        <!--/ post 2 -->

        <!-- post 3 -->
        <div class="card">
          <div class="card-body">
            <!-- avatar image title -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar me-1">
                <img src="../../../app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar img" width="50" height="50">
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Charles Watson</h6>
                <small class="text-muted">12 Dec 2019 at 1:16 AM</small>
              </div>
            </div>
            <!--/ avatar image title -->

            <p class="card-text">
              Wonderful Machine· A well-written bio allows viewers to get to know a photographer beyond the work. This
              can make the difference when presenting to clients who are looking for the perfect fit.
            </p>

            <!-- video -->
            <iframe src="https://www.youtube.com/embed/6stlCkUDG_s" class="w-100 rounded border-0 height-250 mb-50"></iframe>
            <!--/ video -->

            <!-- like share -->
            <div class="row d-flex justify-content-start align-items-center flex-wrap pb-50">
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2">
                <a href="#" class="d-flex align-items-center text-muted text-nowrap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart profile-likes font-medium-3 me-50"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                  <span>1.25k</span>
                </a>

                <!-- avatar group with tooltip -->
                <div class="d-flex align-items-center">
                  <div class="avatar-group ms-1">
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Vinnie Mostowy">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" width="26" height="26">
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Elicia Rieske">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" width="26" height="26">
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Julee Rossignol">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-10.jpg" alt="Avatar" width="26" height="26">
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Darcey Nooner">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" width="26" height="26">
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Elicia Rieske">
                      <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" width="26" height="26">
                    </div>
                  </div>
                  <a href="#" class="text-muted text-nowrap ms-50">+264 more</a>
                </div>
                <!-- avatar group with tooltip -->
              </div>

              <!-- share and like count and icons -->
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2">
                <a href="#" class="text-nowrap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square text-body font-medium-3 me-50"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                  <span class="text-muted me-1">1.25k</span>
                </a>

                <a href="#" class="text-nowrap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 text-body font-medium-3 mx-50"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                  <span class="text-muted">1.25k</span>
                </a>
              </div>
              <!-- share and like count and icons -->
            </div>
            <!-- like share -->

            <!-- comment -->
            <div class="d-flex align-items-start mb-1">
              <div class="avatar mt-25 me-50">
                <img src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="Avatar" width="34" height="34">
              </div>
              <div class="profile-user-info w-100">
                <div class="d-flex align-content-center justify-content-between">
                  <h6 class="mb-0">Kitty Allanson</h6>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart text-body font-medium-3"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                    <span class="align-middle text-muted">34</span>
                  </a>
                </div>
                <small>Easy &amp; smart fuzzy search🕵🏻 functionality which enables users to search quickly.</small>
              </div>
            </div>
            <!-- comment -->

            <!-- comment text area -->
            <fieldset class="mb-75">
              <label class="form-label" for="label-textarea3">Add Comment</label>
              <textarea class="form-control" id="label-textarea3" rows="3" placeholder="Add Comment"></textarea>
            </fieldset>
            <!-- comment text area -->
            <button type="button" class="btn btn-sm btn-primary waves-effect waves-float waves-light">Post Comment</button>
          </div>
        </div>
        <!--/ post 3 -->
      </div>
      <!--/ center profile info section -->

      <!-- right profile info section -->
      <div class="col-lg-3 col-12 order-3">
        <!-- latest profile pictures -->
        <div class="card">
          <div class="card-body">
            <h5 class="mb-0">Latest Photos</h5>
            <div class="row">
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img src="../../../app-assets/images/profile/user-uploads/user-13.jpg" class="img-fluid rounded" alt="avatar img">
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img src="../../../app-assets/images/profile/user-uploads/user-02.jpg" class="img-fluid rounded" alt="avatar img">
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img src="../../../app-assets/images/profile/user-uploads/user-03.jpg" class="img-fluid rounded" alt="avatar img">
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img src="../../../app-assets/images/profile/user-uploads/user-04.jpg" class="img-fluid rounded" alt="avatar img">
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img src="../../../app-assets/images/profile/user-uploads/user-05.jpg" class="img-fluid rounded" alt="avatar img">
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img src="../../../app-assets/images/profile/user-uploads/user-06.jpg" class="img-fluid rounded" alt="avatar img">
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img src="../../../app-assets/images/profile/user-uploads/user-07.jpg" class="img-fluid rounded" alt="avatar img">
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img src="../../../app-assets/images/profile/user-uploads/user-08.jpg" class="img-fluid rounded" alt="avatar img">
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="#">
                  <img src="../../../app-assets/images/profile/user-uploads/user-09.jpg" class="img-fluid rounded" alt="avatar img">
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--/ latest profile pictures -->

        <!-- suggestion -->
        <div class="card">
          <div class="card-body">
            <h5>Suggestions</h5>
            <div class="d-flex justify-content-start align-items-center mt-2">
              <div class="avatar me-75">
                <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" alt="avatar" width="40" height="40">
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Peter Reed</h6>
                <small class="text-muted">6 Mutual Friends</small>
              </div>
              <button type="button" class="btn btn-primary btn-icon btn-sm ms-auto waves-effect waves-float waves-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
              </button>
            </div>
            <div class="d-flex justify-content-start align-items-center mt-1">
              <div class="avatar me-75">
                <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="avtar img holder" width="40" height="40">
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Harriett Adkins</h6>
                <small class="text-muted">3 Mutual Friends</small>
              </div>
              <button type="button" class="btn btn-primary btn-sm btn-icon ms-auto waves-effect waves-float waves-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
              </button>
            </div>
            <div class="d-flex justify-content-start align-items-center mt-1">
              <div class="avatar me-75">
                <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="avatar" width="40" height="40">
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Juan Weaver</h6>
                <small class="text-muted">1 Mutual Friends</small>
              </div>
              <button type="button" class="btn btn-sm btn-primary btn-icon ms-auto waves-effect waves-float waves-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
              </button>
            </div>
            <div class="d-flex justify-content-start align-items-center mt-1">
              <div class="avatar me-75">
                <img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="avatar img" width="40" height="40">
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Claudia Chandler</h6>
                <small class="text-muted">16 Mutual Friends</small>
              </div>
              <button type="button" class="btn btn-sm btn-primary btn-icon ms-auto waves-effect waves-float waves-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
              </button>
            </div>
            <div class="d-flex justify-content-start align-items-center mt-1">
              <div class="avatar me-75">
                <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="avatar img" width="40" height="40">
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Earl Briggs</h6>
                <small class="text-muted">4 Mutual Friends</small>
              </div>
              <button type="button" class="btn btn-sm btn-primary btn-icon ms-auto waves-effect waves-float waves-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
              </button>
            </div>
            <div class="d-flex justify-content-start align-items-center mt-1">
              <div class="avatar me-75">
                <img src="../../../app-assets/images/portrait/small/avatar-s-10.jpg" alt="avatar img" width="40" height="40">
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Jonathan Lyons</h6>
                <small class="text-muted">25 Mutual Friends</small>
              </div>
              <button type="button" class="btn btn-sm btn-primary btn-icon ms-auto waves-effect waves-float waves-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
              </button>
            </div>
          </div>
        </div>
        <!--/ suggestion -->

        <!-- polls card -->
        <div class="card">
          <div class="card-body">
            <h5 class="mb-1">Polls</h5>
            <p class="card-text mb-0">Who is the best actor in Marvel Cinematic Universe?</p>

            <!-- polls -->
            <div class="profile-polls-info mt-2">
              <!-- custom radio -->
              <div class="d-flex justify-content-between">
                <div class="form-check">
                  <input type="radio" id="bestActorPoll1" name="bestActorPoll" class="form-check-input">
                  <label class="form-check-label" for="bestActorPoll1">RDJ</label>
                </div>
                <div class="text-end">82%</div>
              </div>
              <!--/ custom radio -->

              <!-- progressbar -->
              <div class="progress progress-bar-primary my-50">
                <div class="progress-bar" role="progressbar" aria-valuenow="58" aria-valuemin="58" aria-valuemax="100" "=""></div>
              </div>
              <!--/ progressbar -->

              <!-- avatar group with tooltip -->
              <div class="avatar-group my-1">
                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Tonia Seabold">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-12.jpg" alt="Avatar" width="26" height="26">
                </div>
                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Carissa Dolle">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" width="26" height="26">
                </div>
                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Kelle Herrick">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="26" height="26">
                </div>
                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Len Bregantini">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-10.jpg" alt="Avatar" width="26" height="26">
                </div>
                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="John Doe">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="Avatar" width="26" height="26">
                </div>
              </div>
              <!--/ avatar group with tooltip -->
            </div>

            <div class="profile-polls-info mt-2">
              <div class="d-flex justify-content-between">
                <!-- custom radio -->
                <div class="form-check">
                  <input type="radio" id="bestActorPoll2" name="bestActorPoll" class="form-check-input">
                  <label class="form-check-label" for="bestActorPoll2">Chris Hemswort</label>
                </div>
                <!--/ custom radio -->
                <div class="text-end">67%</div>
              </div>
              <!-- progressbar -->
              <div class="progress progress-bar-primary my-50">
                <div class="progress-bar" role="progressbar" aria-valuenow="16" aria-valuemin="16" aria-valuemax="100" "=""></div>
              </div>
              <!--/ progressbar -->

              <!-- avatar group with tooltips -->
              <div class="avatar-group mt-1">
                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Liliana Pecor">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="26" height="26">
                </div>
                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Kasandra NaleVanko">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" width="26" height="26">
                </div>
                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Jonathan Lyons">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" width="26" height="26">
                </div>
              </div>
              <!--/ avatar group with tooltips-->
            </div>
            <!--/ polls -->
          </div>
        </div>
        <!--/ polls card -->
      </div>
      <!--/ right profile info section -->
    </div>

    <!-- reload button -->
    <div class="row">
      <div class="col-12 text-center">
        <button type="button" class="btn btn-sm btn-primary block-element border-0 mb-1 waves-effect waves-float waves-light">Load More</button>
      </div>
    </div>
    <!--/ reload button -->
  </section>
  <!--/ profile info section -->
</div>
</div>

<!-- <div class="card bg-analytics text-white">
    <div class="card-content">
        <div class="card-body text-center">
            <img src="< ?= $this->Url->Image('decore-left.png') ?>" class="img-left" alt="card-img-left">
            <img src="< ?= $this->Url->Image('decore-right.png') ?>" class="img-right" alt="card-img-right">
            <div class="avatar avatar-xl bg-primary shadow mt-0">
                <div class="avatar-content">
                    <i class="feather icon-award white font-large-1"></i>
                </div>
            </div>
            <div class="text-center">
                <h1 class="mb-2 text-white">¡Hola <?= $userData["name_and_lastname"] ?>!</h1>
                <p class="m-auto w-75">Tienes <strong>mucho</strong> por descubrir hoy. Revisa tu <strong>perfil</strong> para actualizar.</p>
            </div>
        </div>
    </div>
</div> -->