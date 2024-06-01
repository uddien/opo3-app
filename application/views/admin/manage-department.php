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
        <li class="active">DAFTAR MATKUL</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

       

        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">DAFTAR MATKUL</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>NAMA MATKUL</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  if(isset($content)):
                  $i=1; 
                  foreach($content as $cnt): 
                ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $cnt['department_name']; ?></td>
                      <td>
                        <a href="<?php echo base_url(); ?>edit-department/<?php echo $cnt['id']; ?>" class="btn btn-success">Edit</a>
                        <a href="<?php echo base_url(); ?>delete-department/<?php echo $cnt['id']; ?>" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                  <?php 
                    $i++;
                    endforeach;
                    endif; 
                  ?>
                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    