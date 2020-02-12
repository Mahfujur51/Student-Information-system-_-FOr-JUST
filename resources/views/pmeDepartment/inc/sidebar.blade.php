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
                    <a class="nav-link" href="{{ route('pme.student') }}">Department Student</a>
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
                    <a class="nav-link" href="{{ route('pme.chairman.notice') }}">View Chairman Notice</a>
                  </li>
                  
                </ul>
              </div>
            </li>
               <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts1" aria-expanded="false" aria-controls="sidebar_layouts1">
                <i class="mdi mdi-folder-multiple"></i>
                <span class="menu-title">Notice</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('pmedepartment.upload.notice') }}">Upload Notice for student</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('pmedepartment.show.notice') }}">View Upload Notice</a>
                  </li>
                  
                </ul>
              </div>
            </li>
            <!--main pages end-->
          
            <!--data rep end-->
         
          </ul>
        </nav>