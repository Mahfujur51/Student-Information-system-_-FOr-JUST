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
          
            <li class="nav-item"  class="{{ (request()->is('student/cse/profile/*')) ? 'active' : '' }}">
              <a class="nav-link" data-toggle="collapse" href="#submenu" aria-expanded="false" aria-controls="submenu">
                <i class="mdi mdi-account-multiple"></i>
                <span class="menu-title">Student</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="submenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('cse.student.chariman') }}">Department Student</a>
                  </li>
                 
                  
                 
                </ul>
              </div>
            </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-home"></i>
                <span class="menu-title">Chairman Notice</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                <ul class="nav flex-column sub-menu">
                  
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('csechariman.upload.notice') }}">Upload Notice</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('csechariman.noticelist') }}">View Chairman Notice</a>
                  </li>
                  
                </ul>
              </div>
            </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts12" aria-expanded="false" aria-controls="sidebar_layouts12">
                <i class="mdi mdi-message-text"></i>             
                   <span class="menu-title">Other Notice</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts12">
                <ul class="nav flex-column sub-menu">
                  
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('chairman.dean.notice') }}">Dean Office</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('chairman.register.notice') }}">Register Office</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">Male Hall</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('chairman.fhall.notice') }}">Female Hall</a>
                  </li>
                  
                </ul>
              </div>
            </li>
               
            <!--main pages end-->
          
            <!--data rep end-->
         
          </ul>
        </nav>