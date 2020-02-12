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
    <li class="nav-item" class="{{ (request()->is('upload/register/student')) ? 'active' : '' }}">
      <a class="nav-link" data-toggle="collapse" href="#upload" aria-expanded="false" aria-controls="upload">
        <i class="mdi mdi-cloud-upload"></i>
        <span class="menu-title">Upload</span>
        <i class="mdi mdi-chevron-down menu-arrow"></i>
      </a>
      <div class="collapse" id="upload">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.upload.student') }}">Upload Student Roll & Department</a>
          </li>
          

        </ul>
      </div>
    </li>
    
    <li class="nav-item" class="{{ (request()->is('student/register/font')) ? 'active' : '' }}">
      <a class="nav-link" data-toggle="collapse" href="#submenu" aria-expanded="false" aria-controls="submenu">
        <i class="mdi mdi-account-multiple"></i>
        <span class="menu-title">Show Student</span>
        <i class="mdi mdi-chevron-down menu-arrow"></i>
      </a>
      <div class="collapse" id="submenu">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('student.register.view') }}">Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('student.admited') }}">Admited Student</a>
          </li>
          

        </ul>
      </div>
    </li>
    <li class="nav-item" class="{{ (request()->is('student/register/notice')) ? 'active' : '' }}">
      <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
        <i class="mdi mdi-home"></i>
        <span class="menu-title">Notice</span>
        <i class="mdi mdi-chevron-down menu-arrow"></i>
      </a>
      <div class="collapse" id="sidebar_layouts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.upload.notice') }}">Upload Notice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.view.notice') }}">View Notice</a>
          </li>
          
        </ul>
      </div>
    </li>
    <li class="nav-item" class="{{ (request()->is('register/bio/*')) ? 'active' : '' }}">
      <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts12" aria-expanded="false" aria-controls="sidebar_layouts12">
        <i class="mdi mdi-bio"></i>
        <span class="menu-title">Biology Faculty</span>
        <i class="mdi mdi-chevron-down menu-arrow"></i>
      </a>
      <div class="collapse" id="sidebar_layouts12">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.pharmacy') }}">Pharmacy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.genetics') }}">Genetics Engineering & Biotechnology</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.microbiology') }}">Micro Biology</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.fisharies') }}">Fisharies & Merine BioScinec</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.physio') }}">Physio Therapy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.nurshing') }}">Nurshing</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item" class="{{ (request()->is('register/eng')) ? 'active' : '' }}">
      <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts1" aria-expanded="false" aria-controls="sidebar_layouts1">
        <i class="mdi mdi-server-network"></i>
        <span class="menu-title">Engineering Faculty</span>
        <i class="mdi mdi-chevron-down menu-arrow"></i>
      </a>
      <div class="collapse" id="sidebar_layouts1">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item" class="">
            <a class="nav-link" href="{{ route('register.cse') }}">Computer Science & Engineering</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.eee') }}">Electronice & Electrical Engineering</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.ipe') }}">Indrustrial & Production Engineering</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.che') }}">Chemical Engineering</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.pme') }}">Petroliam and Minging Engineering</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.te') }}">TextTile Engineering</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.bme') }}">Bio Medical Engineering</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item" >
      <a class="nav-link" data-toggle="collapse" href="#applied" aria-expanded="false" aria-controls="applied">
        <i class="mdi mdi-flower"></i>
        <span class="menu-title">Applied Science</span>
        <i class="mdi mdi-chevron-down menu-arrow"></i>
      </a>
      <div class="collapse" id="applied">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.phy') }}">Physics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.chemi') }}">Chemistry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.math') }}">Math</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.est') }}">Environment Science & Technology</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.nft') }}">Nutrition & Food Technology</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.appt') }}">Agro Product & Procession Engineering</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item" class="{{ (request()->is('register/business/*')) ? 'active' : '' }}">
      <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts120" aria-expanded="false" aria-controls="sidebar_layouts120">
        <i class="mdi mdi-trending-up"></i>
        <span class="menu-title">Business Faculty</span>
        <i class="mdi mdi-chevron-down menu-arrow"></i>
      </a>
      <div class="collapse" id="sidebar_layouts120">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.ais') }}">Accounting & Information System</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.mark') }}">Marketing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.manage') }}">Management</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.finance') }}">Finance & Banking</a>
          </li>
          
        </ul>
      </div>
    </li>
    <li class="nav-item"class="{{ (request()->is('register/humanity/*')) ? 'active' : '' }}">
      <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts123" aria-expanded="false" aria-controls="sidebar_layouts123">
        <i class="mdi mdi-library"></i>
        <span class="menu-title">Huminity</span>
        <i class="mdi mdi-chevron-down menu-arrow"></i>
      </a>
      <div class="collapse" id="sidebar_layouts123">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.english') }}">English</a>
          </li>
          

        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts100" aria-expanded="false" aria-controls="sidebar_layouts100">
        <i class="mdi mdi-xbox-controller"></i>
        <span class="menu-title">Sports</span>
        <i class="mdi mdi-chevron-down menu-arrow"></i>
      </a>
      <div class="collapse" id="sidebar_layouts100">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register.pess') }}">Physical Education & Sports Science</a>
          </li>
          

        </ul>
      </div>
    </li>
    <!--main pages end-->
    <!--data rep end-->
  </ul>
</nav>