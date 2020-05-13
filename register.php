<?php include('head.php'); ?>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index">Admin Register</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="fname" placeholder="Full name" required="Enter Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" required="Enter Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" placeholder="Password" required="Enter Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="cpass" placeholder="Retype password" required="Enter Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            
          </div>
          <div class="col-4">
            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
          </div>
        </div>


      <a href="index" class="text-center">I already have a membership</a>
    </div>
  </div>
</div>
</body>

<?php include('script.php'); ?>