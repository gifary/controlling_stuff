<div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            List Barang yang Ada di Gudang
                        </h1>
                        
                    </div>
                </div>
                <!-- Page Heading -->
                <form action="#" method="post" enctype="multipart/form-data" id="form-product">
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <td class="text-left"><b>No</b></td>
                          <td class="text-left"><b>Kode Dus</b></td>
                          <td class="text-left"><b>Imei</b></td>
                          <td class="text-left"><b>Merk</b></td>
                          <td class="text-left"><b>Type</b></td>
                          <td class="text-left"><b>Warna</b></td>
                          <td class="text-left"><b>Vendor</b></td>
                          <td class="text-left"><b>Tanggal PO</b></td>
                          <td class="text-left"><b>Action</b></td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($products!=null) { ?>
                        <?php foreach($products as $product) { ?> 
                        <tr>
                          <td class="text-left"><?php echo $product->PRODUCT_ID; ?></td>
                          <td class="text-left"><?php echo $product->BOX_CODE; ?></td>
                          <td class="text-left"><?php echo $product->IMEI; ?></td>
                          <td class="text-left"><?php echo $product->MERK_NAME; ?></td>
                          <td class="text-left"><?php echo $product->TYPE_NAME; ?></td>
                          <td class="text-left"><?php echo $product->COLOR_NAME; ?></td>
                          <td class="text-left"><?php echo $product->COMPANY_NAME; ?></td>
                          <td class="text-left"><?php echo $product->BOX_CODE; ?></td>
                          <td class="text-left"><button type="submit" formaction="<?php echo site_url('warehouse/sell/'.$product->PRODUCT_ID.''); ?>" data-toggle="tooltip" title="Tambah" class="btn btn-primary">Jual</button></td>
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