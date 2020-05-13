<!DOCTYPE html>
<html>
<?php include  ('head.php');
      ?>
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
              <li class="breadcrumb-item active">Quick View</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Latest Order</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Recent Added Products</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Best Sellers</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Low Inventory Products</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
  </section>
  <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Online Store Visitors</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">820</span>
                    <span>Visitors Over Time</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <div class="chartjs-size-monitor">
                  <div class="chartjs-size-monitor-expand">
                  <div class="chartjs-size-monitor-shrink">
                  <canvas id="visitors-chart" height="200" class="chartjs-render-monitor"></canvas>
                </div></div></div></div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This Week
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Orders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Item</th>
                      <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="#">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      
                    </tr>
                    <tr>
                      <td><a href="#">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      
                    </tr>
                    <tr>
                      <td><a href="#">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      
                    </tr>
                    <tr>
                      <td><a href="#">OR7429</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-info">Processing</span></td>
                      
                    </tr>
                    <tr>
                      <td><a href="#">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      
                    </tr>
                    <tr>
                      <td><a href="#">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      
                    </tr>
                    <tr>
                      <td><a href="#">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

 
<?php include('footer.php')?>
  
  <aside class="control-sidebar control-sidebar-dark">
    
  </aside>
  
</div>

<?php include('script.php')?>
</body>
</html>
