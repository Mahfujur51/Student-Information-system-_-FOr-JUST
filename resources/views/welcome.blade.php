<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Login</title>
  <!-- plugins:css -->
  @include('inc._css')
</head>

<body>


   <div class="container">
    <div class="header card">
      <a href="{{ route('student.index') }}" class="logo">
        <img src="{{ asset('images/Logo.png') }}" width="100px" alt="">
      </a>
      <div class="pull-right text-center">
        <h1 style="font-size:33px">Jashore University of Science & Technology</h1>
        <h1 style="font-size:33px">যশোর বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়</h1>
      </div>
    </div>
    
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="https://just.edu.bd"  style="font-size:20px;">JUST Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.login') }}" style="font-size:20px">Admin Login</a>
      </li>
      
    </ul>
   <div class="card col-lg-8 mx-auto">

        <div class="card-body px-5 py-5">
          <h3 class="card-header text-left mb-3">Student Login</h3>
          @if (Session::has('success'))
          <div class="alert alert-danger">
            <p>{{Session::get('success')}}</p>
          </div>
          @endif
          <form method="POST" action="{{ route('login.student') }}">
            @csrf
            <div class="form-group">
              <label>User ID * <small>(SSC Registration Number)</small></label>
              <input type="text" name="sreg_no" class="form-control p_input" required>
            </div>
            <div class="form-group">
              <label>Password *</label>
              <input type="password" name="student_password" class="form-control p_input" required>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between">
              <div class="icheck-square">
                <input tabindex="1" type="checkbox" id="remember">
                <label for="remember">Remember me</label>
              </div>

            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
            </div>


          </form>
        </div>
      </div>

    <div class="card">
      <div class="card-body ">
        <div class="text-center">
           <p>&copy; Jashore University of Science & Technology</p>
        </div>
      </div>
    </div>




  </div>

<!-- container-scroller -->
@include('inc._js')
<!-- endinject -->
</body>
</html>
