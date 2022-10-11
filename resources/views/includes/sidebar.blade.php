<div class="sidebar transition overlay-scrollbars animate__animated animate__slideInLeft">
  <div class="sidebar-content">
    <div id="sidebar">
      <!-- Logo -->
      <div class="logo">
        <h2 class="mb-0"><img src="{{url('assets/images/logo.png')}}">BLOG</h2>
      </div>
      <ul class="side-menu">
        <li>
          <a href="{{ route('home' )}}" class="active"><i class='bx bxs-dashboard icon'></i> Dashboard </a>
        </li>
        <!-- Divider-->
        <li class="divider" data-text="STARTER">MASTER</li>
        <li>
          <a href="#"><i class='bx bx-columns icon'></i> Category <i class='bx bx-chevron-right icon-right'></i></a>
          <ul class="side-dropdown">
            <li>
              <a href="{{ route('category') }}">Category</a>
            </li>
            <li>
              <a href="{{ route('tag') }}">Tag</a>
            </li>
          </ul>
        </li>
        <!-- Divider-->
        <li class="divider" data-text="Atrana">Transaction</li>
        <li>
          <a href="#"><i class='bx bx-columns icon'></i> Post <i class='bx bx-chevron-right icon-right'></i></a>
          <ul class="side-dropdown">
            <li>
              <a href="{{route('post')}}">Post List</a>
            </li>
          </ul>
        </li>
      </ul>
      <div class="ads">
        <div class="wrapper">
          <div class="help-icon">
            <i class="fa fa-sign-out-alt size-icon-1 text-white"></i>
          </div>
          <a class="btn-upgrade" href="{{ route('logout')}}">Sign Out</a>
        </div>
      </div>
    </div>
  </div>
</div>