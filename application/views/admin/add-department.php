  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        MATA KULIAH
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">MATA KULIAH</a></li>
        <li class="active">TAMBAH MATKUL</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

      

        <!-- column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">TAMBAH MATKUL</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(); ?>insert-department" method="POST">
              <div class="box-body">
               
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1">NAMA MATKUL</label>
                    <input type="text" name="txtdepartment" class="form-control" placeholder="Nama Matkul" required>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Kirim</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->