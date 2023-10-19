
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Daftar Admin</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <script type="text/javascript" src="ajax_daerah.js"></script>
        <link rel="shortcut icon" href="<?= base_url()?>ui/images/favicon.ico">

        <link href="<?= base_url()?>ui/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url()?>ui/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url()?>ui/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h2 class="text-center">
                        Rekapitung
                    </h2>

                    <div class="p-3">
                    <form method="POST" action="<?= base_url('daerah/loginadmin')?>" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="pilkada" class="col-form-label">Pemilu:</label>
                    <select name="prop" id="prop" class="form-control">
                    <option value="">PILPRES</option>
                    <option value="">PILGUB</option>
                    <option value="">PILBUP/PILWALKOT</option>
                    </select>
                    </div>
                  
                  <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Provinsi:</label>
                  <select name="prop" id="prop" class="form-control" onchange="ajaxkota(this.value)">
          <option value="">Pilih Provinsi</option>
          <?php 
          foreach($provinsi as $data){
            echo '<option value="'.$data->id_prov.'">'.$data->nama.'</option>';
          }
          ?>
        <select>

          
            

          </div>
          
          <div class="form-group">
            <label for="recipient-name"class="col-form-label">Kota/Kabupaten:</label>
            <select name="kota" class="form-control" required id="kota" onchange="ajaxkec(this.value)">
          <option value="">Pilih Kota</option>
        </select>


          </div>

          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Kecamatan:</label>
          <select name="kec"  class="form-control" required id="kec" onchange="ajaxkel(this.value)">
          <option value="">Pilih Kecamatan</option>
        </select>
          </div>

          </div>
          
      <div class="modal-footer">
      <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Login</button>
      
      </div>
      <!-- <div class="container">
     <center> Sudah Punya Akun?? <a href="<?= base_url('login') ?>">Login</a></center>
      </div> -->
        </form>
                    </div>

                </div>
            </div>
        </div>



        <!-- jQuery  -->
        <script src="<?= base_url()?>ui/js/jquery.min.js"></script>
        <script src="<?= base_url()?>ui/js/popper.min.js"></script>
        <script src="<?= base_url()?>ui/js/bootstrap.min.js"></script>
        <script src="<?= base_url()?>ui/js/modernizr.min.js"></script>
        <script src="<?= base_url()?>ui/js/detect.js"></script>
        <script src="<?= base_url()?>ui/js/fastclick.js"></script>
        <script src="<?= base_url()?>ui/js/jquery.blockUI.js"></script>
        <script src="<?= base_url()?>ui/js/waves.js"></script>
        <script src="<?= base_url()?>ui/js/jquery.nicescroll.js"></script>

        <!-- App js -->
        <script src="<?= base_url()?>ui/js/app.js"></script>

    </body>
</html>