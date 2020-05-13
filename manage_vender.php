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
                <table class="table table-hover text-nowrap">
                	<thead>
                		<th>Sr no</th>
                		<th>Vender Name</th>
                		<th>Email</th>
                    <th>Shop Name</th>
                		<th>Status</th>
                    <th></th>
                	</thead>
                	<tbody>
                		<tr>
                			<td><?php $counter=0; echo ++$counter;?></td>
                			<td>Stefen Peeterson</td>
                			<td>stefen@gmail.com</td>
                      <td>Nykaa</td>
                      <td><button class="btn-sm btn btn-success">Active</button></td>
                			<td><button class="btn-sm btn btn-primary">Edit details</button></td>
                		</tr>
                    <tr>
                      <td><?php  echo ++$counter;?></td>
                      <td>Suzy Lockords</td>
                      <td>suzy@aol.com</td>
                      <td>Hermes</td>
                      <td><button class="btn-sm btn btn-danger">Deactive</button></td>
                      <td><button class="btn-sm btn btn-primary">Edit details</button></td>
                    </tr>
                    <tr>
                      <td><?php  echo ++$counter;?></td>
                      <td>Joseph A. Hernandez</td>
                      <td>Joseph@yahoo.com</td>
                      <td>Nike</td>
                      <td><button class="btn-sm btn btn-success">Active</button></td>
                      <td><button class="btn-sm btn btn-primary">Edit details</button></td>
                    </tr>
                    <tr>
                      <td><?php  echo ++$counter;?></td>
                      <td>Beverly T. Lee</td>
                      <td>beverly@aol.com</td>
                      <td>Sony</td>
                      <td><button class="btn-sm btn btn-success">Active</button></td>
                      <td><button class="btn-sm btn btn-primary">Edit details</button></td>
                    </tr>
                    <tr>
                      <td><?php  echo ++$counter;?></td>
                      <td>Daniel R. Prentiss</td>
                      <td>daniel@aol.com</td>
                      <td>Nikon</td>
                      <td><button class="btn-sm btn btn-danger">Deactive</button></td>
                      <td><button class="btn-sm btn btn-primary">Edit details</button></td>
                    </tr>
                	</tbody>
                </table>
              </div>
              <div class="card-footer">
                  
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
