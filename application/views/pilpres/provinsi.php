<style>
    .bg-biru {
        background: #6259ca;
    }

    .bg-wit {
        background-color: #ffffff;
    }

    .color-lime {

        color: #fefefe;

    }

    .btn-facebook {
        color: #ffffff !important;
        background-color: #3b5998;
    }

    .main-content {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .banner {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 125px;
        background: rgb(0,212,255);
background: linear-gradient(90deg, rgba(0,212,255,1) 15%, rgba(39,117,148,1) 51%, rgba(24,88,97,1) 79%);
        background-position: center;
        background-size: cover;
    }

    .img-circle {
        height: 130px;
        width: 130px;
      
        z-index: 1;
    }
    .social-links a {
        transition: all 0.2s;
    }

    .social-links a img {
        height: 30px;
    }

    .social-links a:hover {
        transform: translateY(-3px);
    }
</style>
<div class="container mt-3">
    <div class="card">
        <div class="card-header bg-biru">
            <center> <img src="<?= base_url() ?>/assets/images/rekapitung_light.png" class="mt-2 mb-2 rounded-circle" alt="thumbnail" style="height:auto;width:80px"></center>
            <h5 class="text-center color-lime text-uppercase">Perhitungan Suara <br> PRESIDEN & WAKIL PRESIDEN RI 2024</h5>
        </div>
        <div class="card-body bg-wit">
            <div class="row  justify-content-center">
                <div class="col-md-12">
                    <h6 class="text-center">TINGKAT NASIONAL</h6>

                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-md-4">
                    <center>

                        <canvas id="chartku" style="height: 250px;"></canvas>
                    </center>
                </div>
                <div class="col-md-12">
                    <p class="mt-2 text-center">
                       <b> 
                       Paslon 1 & Wakil Paslon 1 -<span id="suara0">0</span> <br>
                       Paslon 2 & Wakil Paslon 2 -<span id="suara1">0</span> <br>
                       Paslon 3 & Wakil Paslon 3 -<span id="suara2">0</span>
                       </b>
                    </p>
                </div>
                <div class="col-12 text-center">
                    <span class="badge text-white" style="background-color: #6259ca">Time Closed: - Progress 0% dari 100%</span>
                </div>

            </div>
           
          <table class="table mt-2">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Wilayah</th>
      <th scope="col">Paslon 1</th>
      <th scope="col">Paslon 2</th>
      <th scope="col">Paslon 3</th>
    </tr>
  </thead>
  <tbody id="data-suara">
       
  </tbody>
</table>
 <div class="card w-100 text-center py-1 mt-4" style="font-weight: bold; background: #ff022d; color: #fff">
                Hasil Perhitungan Tingkat Provinsi
            </div>
            
            <div class="row justify-content-center">
           
                <?php foreach ($provinsi as $hehe) :  ?>
                    <div class="col-12 col-lg-4 col-md-6 mt-3">
                        
                            <div class="card">
                                <div class="card-header fw-bold" style="background-color: #6259ca;">
                                      <a style="color: #fff !important; font-weight: bold" href="
                                        <?php 
                                        if ($hehe->id_prov == 36){
                                            echo "https://pilpres.banten.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 31){
                                            echo "https://pilpres.jakarta.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 32){
                                            echo "https://pilpres.jabar.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 13){
                                            echo "https://pilpres.sumbar.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 51){
                                            echo "https://pilpres.bali.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 11){
                                            echo "https://pilpres.aceh.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 12){
                                            echo "https://pilpres.sumut.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 14){
                                            echo "https://pilpres.riau.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 15){
                                            echo "https://pilpres.jambi.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 17){
                                            echo "https://pilpres.bengkulu.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 16){
                                            echo "https://pilpres.sumsel.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 18){
                                            echo "https://pilpres.lampung.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 19){
                                            echo "https://pilpres.babel.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 21){
                                            echo "https://pilpres.kepri.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 34){
                                            echo "https://pilpres.jogja.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 33){
                                            echo "https://pilpres.jateng.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 35){
                                            echo "https://pilpres.jatim.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 52){
                                            echo "https://pilpres.ntb.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 53){
                                            echo "https://pilpres.ntt.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 61){
                                            echo "https://pilpres.kalbar.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 62){
                                            echo "https://pilpres.kalteng.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 63){
                                            echo "https://pilpres.kalsel.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 64){
                                            echo "https://pilpres.kaltim.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 65){
                                            echo "https://pilpres.kalut.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 71){
                                            echo "https://pilpres.sulut.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 72){
                                            echo "https://pilpres.sulteng.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 73){
                                            echo "https://pilpres.sulsel.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 74){
                                            echo "https://pilpres.sultra.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 75){
                                            echo "https://pilpres.gorontalo.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 76){
                                            echo "https://pilpres.sulbar.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 81){
                                            echo "https://pilpres.maluku.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 82){
                                            echo "https://pilpres.malut.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 91){
                                            echo "https://pilpres.pabar.hisuara.id";
                                        }
                                        else if ($hehe->id_prov == 92){
                                            echo "https://pilpres.papua.hisuara.id";
                                        }
                                    
                                        else { 
                                            echo base_url() ."daerah/kota/". $hehe->id_prov; }?>"">
                                        
                                        <div class="row text-center">
                                            <div class="col-12">
                                                <img src="<?= base_url()  ?>assets/imagesProvinsi/<?= $hehe->logo_provinsi  ?>" class="h-100 w-auto" alt="<?= base_url()  ?>assets/imagesProvinsi/<?= $hehe->logo_provinsi  ?>">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <?= $hehe->nama  ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">

                                    <center>
                                        <canvas id="chart<?= $hehe->id_prov ?>" style="height: 250px;"></canvas>
                                        <div class="total-suara<?=$hehe->id_prov?>">
                                        <p class="mt-2">
                                            Paslon 1 & Wakil Paslon 1 - 0% <br>

                                            Paslon 2 & Wakil Paslon 2 - 0% <br>
                                            
                                            Paslon 3 & Wakil Paslon 3 - 0%
                                        </p>
                                        </div>
                                    </center>
                                </div>
                            </div>
                    </div>
                <?php endforeach  ?>
            </div>
        </div>
        <div class="card-footer bg-biru">
            <div class="container">
                <div class="mb-2">
                    &nbsp;
                </div>
                <div class="row justify-content-center mb-4">
                    <!-- <div class="col-lg-12">
                        <center>
                            <a href="https://acakey.com">
                                <img src="https://demo.tangsel.pilwalkot.hisuara.id/ui/images/aca22.png" alt="" srcset="" class="img-fluid mt-2 mb-3" style="width:210px;height:auto;border-radius:10px;padding: 10px;">
                            </a>
                        </center>
                    </div> -->
                    <table>

                        <tbody>
                            <tr>

                                <td><a class="btn btn-facebook btn-sm" href="https://www.facebook.com/sharer.php?u=https://demo.tangsel.pilwalkot.hisuara.id/datapublic"> <i class="fab fa-facebook  fa-2x"></i></a></td>
                                <td><a class="text-white btn btn-sm bg-info text-center ml-1" href="http://twitter.com/share?text=Hallo Saya Sudah Melihat Hasil Perhitungan Hisuara Dan Mengajak Anda Untuk Mengawasi Jalannya Perhitungan Suara Salam Demokrasi Klik Tautan  &amp;url=https://demo.tangsel.pilwalkot.hisuara.id/datapublic&amp;hashtags=survey"><i class="fab fa-twitter  fa-2x"></i></a></td>
                                <td><a class="text-white btn btn-sm bg-success text-center ml-1" href="https://api.whatsapp.com/send?text=Hallo%20Saya%20Sudah%20Melihat%20Hasil%20Perhitungan%20Hisuara%20Dan%20Mengajak%20Anda%20Untuk%20Mengawasi%20Jalannya%20Perhitungan%20Suara%0ASalam%20Demokrasi%0AKlik%20Tautan%20https://demo.tangsel.pilwalkot.hisuara.id/datapublic/"><i class="fab fa-whatsapp  fa-2x"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <strong>
                            <a class="text-light" href="<?= base_url() ?>daerah/disclaimer">Disclaimer</a>
                        </strong>
                    </div>
                    <div class="col-lg-12 text-white">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <b class="text-white">
                            <center>
                                © PT. Mahadaya Swara Teknologi <br> All Rights Reserved 2022.
                            </center>
                        </b>
                        <div class="mb-2">
                            &nbsp;
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
