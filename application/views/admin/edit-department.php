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
        <li class="active">UBAH NAMA MATKUL</li>
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
              <h3 class="box-title">UBAH NAMA MATKUL</h3>
            </div>
            <!-- /.box-header -->

            <?php if(isset($content)): ?>
              <?php foreach($content as $cnt): ?>
                <!-- form start -->
                <form role="form" action="<?php echo base_url(); ?>update-department" method="POST">
                  <div class="box-body">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>NAMA MATKUL</label>
                        <input type="hidden" name="txtid" value="<?php echo $cnt['id']; ?>" class="form-control">
                        <input type="text" name="txtdepartment" value="<?php echo $cnt['department_name']; ?>" class="form-control" placeholder="Department Name">
                      </div>
                    </div>
                    
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-success pull-right">Edit</button>
                    <a href="<?php echo base_url(); ?>manage-department/" class="btn btn-success">Kembali</a>
                  </div>
                </form>
              <?php endforeach; ?>
            <?php endif; ?>
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