      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Edit Product</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/admin')?>">Home</a></li>
            <li class="breadcrumb-item active">Edit Product        </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                <!-- Content Header (Page header) -->
                <!-- Main content -->
                  <div class="row d-flex justify-content-center">
                      <!-- left column -->
                      <div class="col-md-4">
                        <!-- general form elements -->
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Edit Data Product</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <?php foreach($user as $u){ ?>
                          <?php echo form_open_multipart('Admin/crud/update');?>
                            <div class="card-body">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_produk" value="<?php echo $u->nama_produk ?>">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Deskripsi</label>
                                <textarea type="text" class="form-control" name="deskripsi"><?php echo $u->deskripsi?></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Harga</label>
                                <input type="text" class="form-control" name="harga" value="<?php echo $u->harga ?>">
                              </div>
                              <div class="form-group">
                                <label for="foto">Photo</label><br>
                                <img src="<?php echo base_url('gambar/product/'.$u->gambar) ?>" width="80"/>
                                <input class="form-control" type="file" name="berkas"/>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Kategori</label><br>
                                <input type="radio" name="kategori" value="1"> Converse</input><br>
                                <input type="radio" name="kategori" value="2"> Running</input><br>
                                <input type="radio" name="kategori" value="3"> Boots</input>
                              </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          <?php echo form_close(); ?>
                        <?php } ?>  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
