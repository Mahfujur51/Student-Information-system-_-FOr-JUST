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
                <span class="menu-title">Manage Student</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="submenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('administration.addstudent') }}">Add Student</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('administration.showstudent') }}">All Student</a>
                  </li>
                 
                </ul>
              </div>
            </li>
  
            <!--main pages end-->
          
            <!--data rep end-->
         
          </ul>
        </nav>