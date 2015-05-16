<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Form Penambahan Product
                        </h1>    
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="well">
                        <form action="<?php echo $action_add ?>" method="post" enctype="multipart/form-data" id="form-product" role="form">
                               <div class="form-group">
                                    <label class="inline">Kode Dus</label>
                                    <input name="box_code" placeholder="Kode Dus" id="input-box-code" class="form-control"/>

                                </div>
                                
                                <div class="form-group">
                                    <label>Nomor Imei</label>
                                     
                                        <input name="imei" placeholder="Imei" id="input-imei" class="form-control"/>
                                    
                                </div>
                    
                                <div class="form-group">
                                    <label class="control-label" for="input-box-code">Merk</label>
                                       <select name="merk_id" id="merk_id" class="form-control" onchange="selectState(this.options[this.selectedIndex].value)">
                                          <option value="-1">--Pilih Merk--</option>
                                          <?php foreach ($merks as $merk) { ?>
                                            <option value="<?php echo $merk->MERK_ID; ?>"><?php echo $merk->MERK_NAME; ?></option>
                                          <?php } ?>
                                      </select>
                                    
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label" for="input-box-code">Type</label>
                                      <select name="type_id" id="state_dropdown" class="form-control">
                                        <option value="-1">--Pilih Type--</option>
                                      </select>
                                    
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label" for="input-color">Warna</label>
                                      <select name="color_id" id="color-id" class="form-control" >
                                          <option value="-1">--Pilih Warna--</option>
                                          <?php foreach ($colors as $color) { ?>
                                            <option value="<?php echo $color->COLOR_ID; ?>"><?php echo $color->COLOR_NAME; ?></option>
                                          <?php } ?>
                                      </select>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="input-color">Vendor</label>
                                      <select name="company_id" id="color-id" class="form-control" >
                                          <option value="-1">--Pilih Perusahaan--</option>
                                          <?php foreach ($companies as $company) { ?>
                                            <option value="<?php echo $company->COMPANY_ID; ?>"><?php echo $company->COMPANY_NAME; ?></option>
                                          <?php } ?>
                                      </select>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="input-date-available">Harga</label>
                                    <input name="price" placeholder="Harga" id="input-imei" class="form-control"/>
                                    
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="input-date-available">Tanggal Beli</label>
                                    <input name="buy_date" placeholder="Tanggal Beli" id="input-imei" class="form-control" type="date"/>
                                    
                                </div>  
                                <button type="submit" data-toggle="tooltip" title="Tambah" class="btn btn-primary">Tambah</button>
                                <br></br>
                        </form>
                    </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- Add jQuery library -->
   
    <!-- jQuery -->
     <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datepicker();
            });
    </script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript">
    function selectState(merk_id){
         if(merk_id!="-1"){
            loadData('state',merk_id);
           
        }else{
            $("#state_dropdown").html("<option value='-1'>--Pilih Type--</option>");
           
        }
    }

    function loadData(loadType,loadId){
          var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
          $("#"+loadType+"_loader").show();
          $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="image/loading.gif" />');
          $.ajax({
                type: "POST",
                url: "<?php echo site_url('product/loadData') ?>",
                data: dataString,
                cache: false,
                success: function(result){
                  $("#"+loadType+"_loader").hide();
                  $("#"+loadType+"_dropdown").html("<option value='-1'>--Pilih Type--</option>");
                  $("#"+loadType+"_dropdown").append(result);
                }
           });
    }
    </script>

</body>

</html>