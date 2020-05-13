<!DOCTYPE html>
<html>
<?php include  ('head.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  
  <?php include  ('sidebar.php') ?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quick View</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vender</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Vender Information</h3>
              </div>
              <div class="card-body">
                <div class="row">
              	  <div class="col-md-2">
	                <div class="form-group">
	                  <select class="form-control" name="salutation" required="">
	                    <option selected="selected" >MR.</option>
	                    <option>MRS.</option>
	                    <option>MISS</option>
	                  </select>
	                </div>
	                </div>
	                <div class="col-md-3">
	                <div class="form-group">
	                   <input type="text" class="form-control" name="first_name" placeholder="First Name" required="">
	                </div>
	               </div>
	               <div class="col-md-3">
	                <div class="form-group">
	                   <input type="text" class="form-control" name="middle_name" placeholder="Middle Name" required="">
	                </div>
	               </div>
	                <div class="col-md-4">
	                <div class="form-group">
	                   <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="">
	                </div>
	               </div>
            	</div>
                <div class="row">
	               <div class="col-md-4">
		                <div class="input-group">
	                    <div class="input-group-prepend">
	                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
	                    </div>
	                    <input type="text" class="form-control" data-inputmask-alias="datetime" placeholder="dd/mm/yyyy" data-mask>
	                  	</div>
	              </div>
	               <div class="col-md-4">
		                <div class="input-group">
	                    <div class="input-group-prepend">
	                      <span class="input-group-text"><i class="fa fa-at"></i></span>
	                    </div>
	                    <input type="text" class="form-control" placeholder="Email-id">
	                  	</div>
	               </div>
	                <div class="col-md-4">
		                <div class="input-group">
	                    <div class="input-group-prepend">
	                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
	                    </div>
	                    <input type="text" class="form-control" placeholder="Phone no">
	                  	</div>
	               </div>
              </div>
                <div class="row" style="padding-top: 1.5%">
	               <div class="col-md-4">
		                <div class="form-group">
                  		<label style="padding-right: 3%;">Gender : </label>
                        <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="gender" value="male"checked>
                        <label for="radioPrimary1" style="font-size: 15px;">Male
                        </label>
                      </div>

                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="gender" value="female" > 
                        <label for="radioPrimary2" style="font-size: 15px;">Femail
                        </label>
                      </div>
                	  </div>
	              </div>
	               <div class="col-md-4">
		                <div class="input-group">
	                    <div class="input-group-prepend">
	                      <span class="input-group-text"><i class="fa fa-id-card"></i></span>
	                    </div>
	                    <input type="text" class="form-control" placeholder="PAN card no">
	                  	</div>
	               </div>
	                <div class="col-md-4">
		                <div class="input-group">
	                    <div class="input-group-prepend">
	                      <span class="input-group-text"><i class="fa fa-id-card"></i></span>
	                    </div>
	                    <input type="text" class="form-control" placeholder="Adhar No">
	                  	</div>
	               </div>
              </div>
              <div class="row" style="padding-top: 1.5%">
	               <div class="col-md-6">
		                <div class="input-group">
	                    
	                    <input type="text" class="form-control" data-inputmask-alias="datetime" placeholder="Shop Name" data-mask>
	                  	</div>
	              </div>
	               <div class="col-md-6">
		                <div class="input-group">
	                    <textarea class="form-control" rows="3" placeholder="Shop Address"></textarea>
	                  	</div>
	               </div>
              </div>
                <div class="row" style="padding-top: 1.5%">
	               <div class="col-md-6">
		                <div class="input-group">
	                    <div class="input-group-prepend">
	                      <span class="input-group-text"><i class="fa fa-id-card"></i></span>
	                    </div>
	                    <input type="text" class="form-control" data-inputmask-alias="datetime" placeholder="GST No" data-mask>
	                  	</div>
	              </div>
	               <div class="col-md-6">
		                <div class="input-group">
	                    <div class="input-group-prepend">
	                      <span class="input-group-text"><i class="fa fa-id-card"></i></span>
	                    </div>
	                    <input type="text" class="form-control" data-inputmask-alias="datetime" placeholder="License No." data-mask>
	                  	</div>
	               </div>
              </div>
              <div class="row" style="padding-top: 1.5%">
              	<div class="col-md-12">
                <div class="form-group">
                    <div class="custom-file">
                   	<input type="file" class="custom-file-input" name="file" id="exampleInputFile" placeholder="Select Image" >
                    <label class="custom-file-label" for="exampleInputFile">ID Proof</label>
                    </div>
                </div>
                </div>
                </div>
              </div>
              <div class="card-footer">
                  <button style="float:right;" type="submit" name="add_notice1" class="btn btn-info">Add Information</button>
                </div>
            </div>
          </div>
         </div>
       
        </div>
	</section>


    

  </div>

 
<?php include('footer.php')?>
  
  <aside class="control-sidebar control-sidebar-dark">
    
  </aside>
  
</div>

<?php include('script.php')?>
</body>
</html>
