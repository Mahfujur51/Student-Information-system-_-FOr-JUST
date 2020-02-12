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
              <a class="nav-link" data-toggle="collapse" href="#submenu" aria-expanded="false" aria-controls="submenu">
                <i class="mdi mdi-account-multiple"></i>
                <span class="menu-title">Student</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="submenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('biodean.register.user') }}">Register User</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('biodean.verfied.user') }}">Verified Student</a>
                  </li>
                  
                 
                </ul>
              </div>
            </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-home"></i>
                <span class="menu-title">Notice</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('biodean.upload.notice') }}">Upload Notice</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('biodean.view.notice') }}">View Upload Notice</a>
                  </li>
                  
                </ul>
              </div>
            </li>
            <!--main pages end-->
          
            <!--data rep end-->
         
          </ul>
        </nav>