


    <section class="content">
      <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Created Supplier</h3>
                    <div class="section-header-back">
                        <a href="<?=site_url('supplier')?>" class="btn btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                    </div>
                    <form action="<?site_url('supplier')?>" method="post" autocomplete="off">

                </div>
                <div class="card-header">   
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <input type="hidden" name="id">
                            <label>Supplier Name *</label>
                            <input type="text" name="supplier_name"  class="form-control" required autofocus>
                        </div>

                        <div class="form-group">
                            <label>Phone *</label>
                            <input type="number" name="phone" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Address *</label>
                            <textarea name="addr" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Description *</label>
                            <textarea name="desc" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">
                                <i class="fas fa-paper-plane"></i> Save
                            </button>
                            <button type="Reset" class="btn btn-danger btn-flat">Reset</button>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
      </div> 
    </section>
</div>

