  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        MATERI KULIAH
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">MATERI KULIAH</a></li>
        <li class="active">TAMBAH MATERI</li>
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
              <h3 class="box-title">Tambah Materi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <?php echo form_open_multipart('Staff/insert');?>
          <div class="box-body">
            <div class="col-md-6">
                  <div class="form-group">
                    <label>Pertemuan ke</label>
                    <select class="form-control" name="slcgender">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama Matkul</label>
                    <select class="form-control" name="slcdepartment">
                      
                      <?php
                      if(isset($department))
                      {
                        foreach($department as $cnt)
                        {
                          print "<option value='".$cnt['id']."'>".$cnt['department_name']."</option>";
                        }
                      } 
                      ?>
                    </select>
                  </div>
                </div>

                
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Judul Materi</label>
                    <input type="text" name="txtname" class="form-control" placeholder="" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Deskripsi Materi</label>
                    <textarea class="form-control" name="txtaddress" required></textarea>
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