

<?php include('head.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <section class="content">
      <div class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><img src="img/favicon.png" width="30%" height="100px"></a>
  </div>
  <div class="login-logo">
    <a href="index"><b>Admin Login</b></a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
<br>

        <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                     <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email Address">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                          </div>
                        </div>
                      </div>
                       <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                      <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                          </div>
                        </div>
                      </div>
                  </div>
                   <div class="form-group mb-0">
                    
                   <a href="register"><label>Register a new membership</label></a> 
                   
                  </div>
                  <br>
                  <div class="" style="text-align: center;">
                  <a href="home"><button type="submit" name="login" class="btn btn-primary">Login</button></a>
                </div>

     
    </div>
  </div>
</div>
</div>
    </section>
</div>
</body>

<?php include('script.php'); ?>