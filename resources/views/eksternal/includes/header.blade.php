
   
  <!-- Page Header-->
  <header class="masthead" @if(!Request::is('detail/*')) style="background-image: url('eksternal/assets/img/home-bg.jpg')" @else style="background-image: url('../eksternal/assets/img/home-bg.jpg')" @endif>
      <div class="container position-relative px-4 px-lg-5">
          <div class="row gx-4 gx-lg-5 justify-content-center">
              <div class="col-md-10 col-lg-8 col-xl-7">
                @if(Request::is('/') || Request::is('/*')) 
                  <div class="site-heading">
                      <h1>Lorem Ipsum</h1>
                      <span class="subheading">Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
                  </div>
                @endif
              </div>
          </div>
      </div>
  </header>