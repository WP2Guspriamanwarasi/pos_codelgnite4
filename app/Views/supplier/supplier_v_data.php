<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data suppliers</h3>

                <div class="section-header-button">
                  <a href="<?=site_url('supplier/add')?>" class="btn btn-success float-right">Add New</a>
                </div>
              </div>
              
              <!-- untuk menampilakan berhasil -->
              <?php if(session()->getFlashdata('success')) :  ?>
                <div class="alert alert-success alert-dismissible show fade">
                  <div class="alert body">
                    <button class="close" data-dismiss="alert">X</button>
                    <b>Success !</b>
                    <?=session()->getFlashdata('success')?>
                  </div>
                </div>
              <?php endif; ?>
                    <!-- untuk menampilkan error -->
              <?php if(session()->getFlashdata('error')) :  ?>
                <div class="alert alert-danger alert-dismissible show fade">
                  <div class="alert body">
                    <button class="close" data-dismiss="alert">X</button>
                    <b>Error !</b>
                    <?=session()->getFlashdata('error')?>
                  </div>
                </div>
              <?php endif; ?>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tbody>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        <?php foreach ($supplier as $key => $value) : ?>
                        <tr>
                            <td><?= $key + 1?></td>
                            <td><?= $value->name ?></td>
                            <td><?= $value->phone ?></td>
                            <td><?= $value->address ?></td>
                            <td><?= $value->description ?></td>
                            <td class="text-center" width="160px">
                                <a href="#" class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i> Update
                                </a>
                                <a href="#" onclick="return confirm('Apakah anda yakin hapus data?')" class=" btn btn-danger btn-xs">
                                    <i class="fa fa-user-plus"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php  endforeach; ?>
                      </tbody>
                    
                  </thead>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>


    