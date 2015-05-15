<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Form Penambahan Merk
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <form action="<?php echo $action_add ?>" method="post" enctype="multipart/form-data" id="form-product">
                    <div class="well">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="Nama Merek" id="input-merk-name" name="merk_name">
                            </div>
                            <div class="col-sm-2"> 
                                <button type="submit" data-toggle="tooltip" title="Tambah" class="btn btn-primary">Tambah</button>
                            </div>
                            
                        </div>
                    
                    </div>
                    </div>
                </form>
                <form action="#" method="post" enctype="multipart/form-data" id="form-product">
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <td class="text-left">No</td>
                          <td class="text-left">Nama Merk</td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($products) { ?>
                        <?php for($i=1;$i<10;$i++) { ?> 
                        <tr>
                          
                          <td class="text-left"><?php echo $i; ?></td>
                          <td class="text-left">Ini Contoh</td>
                       </tr>
                        <?php } ?> 
                        <?php } else { ?>
                        <tr>
                          <td class="text-center" colspan="8">Ga ada Merk</td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </form>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- Add jQuery library -->
   
    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

</body>

</html>