<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="user-info">
    <div class="profile">
      <img src="http://via.placeholder.com/47x47" alt="">
    </div>
    <div class="details">
      <p class="user-name">Mahfujur</p>
      <p class="designation">Developer</p>
    </div>
  </div>
  <ul class="nav">
    <!--main pages start-->

    <li class="nav-item">
      <a class="nav-link" href="{{ route('student.profile') }}">
       <i class="mdi mdi-account-star"></i>
       <span class="menu-title">Student Profile</span>
     </a>
   </li>
   <li class="nav-item">
    <a class="nav-link" href="{{ route('student.update') }}">
      <i class="mdi mdi-account-settings-variant"></i>
      <span class="menu-title">Update Profile</span>
    </a>
  </li>
    <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu1" aria-expanded="false" aria-controls="layoutsSubmenu1">
      <i class="mdi mdi-cash-usd"></i>
      <span class="menu-title">Payment</span>
      <i class="mdi mdi-chevron-down menu-arrow"></i>
    </a>
    <div class="collapse" id="layoutsSubmenu1">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('student.payment') }}" >Hall Fee</a>
        </li>
       
      </ul>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
      <i class="mdi mdi-file-outline"></i>
      <span class="menu-title">Download</span>
      <i class="mdi mdi-chevron-down menu-arrow"></i>
    </a>
    <div class="collapse" id="layoutsSubmenu">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('student.registration') }}" >Registration Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('student.admission') }}" >Admission Form</a>
        </li>
       
      </ul>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu22" aria-expanded="false" aria-controls="layoutsSubmenu22">
      <i class="mdi mdi-folder-multiple"></i>
      <span class="menu-title">Notice</span>
      <i class="mdi mdi-chevron-down menu-arrow"></i>
    </a>
    <div class="collapse" id="layoutsSubmenu22">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('student.dean.notice') }}" >Dean Office</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('student.register.notice') }}" >Register Office</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="{{ route('stuent.hall.notice') }}" >Hall Notice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('student.noice.department') }}" >Department Notice</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('student.changepassword') }}">
      <i class="mdi mdi-key"></i>
      <span class="menu-title">Change Password</span>

    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{route('slogout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
     <i class="mdi mdi-exit-to-app"></i>
     <span class="menu-title">   Logout</span>
   </a>
   <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none;">
    @csrf
  </form>
</li>

<!--main pages end-->

<!--data rep end-->

</ul>
</nav>