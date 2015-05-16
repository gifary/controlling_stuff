<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Form Penambahan Perusahaan
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                <form action="<?php echo $action_add ?>" method="post" enctype="multipart/form-data" id="form-company">
                    <div class="well">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="Nama Perusahaan" id="input-company-name" name="company_name">
                            </div>
                            <div class="col-sm-2"> 
                                <button type="submit" data-toggle="tooltip" title="Tambah" class="btn btn-primary">Tambah</button>
                            </div>
                            
                        </div>
                    
                    </div>
                    </div>
                </form>
                <form action="#" method="post" enctype="multipart/form-data" id="form-company">
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <td class="text-left">No</td>
                          <td class="text-left">Perusahaan</td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($companies!=null) { ?>
                        <?php foreach($companies as $company) { ?> 
                        <tr>
                          <td class="text-left"><?php echo $company->COMPANY_ID; ?></td>
                          <td class="text-left"><?php echo $company->COMPANY_NAME; ?></td>
                       </tr>
                        <?php } ?> 
                        <?php } else { ?>
                        <tr>
                          <td class="text-center" colspan="8">Tidak ada Perusahaan</td>
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