<style>
    .bg-biru {
        background: rgb(24,88,97);
background: linear-gradient(90deg, rgba(24,88,97,1) 10%, rgba(39,117,148,1) 51%, rgba(0,212,255,1) 86%);
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
<div class="container mt-2 mb-3">
    <div class="card">
        <div class="card-header bg-biru">
            <center> <img src="<?= base_url() ?>/assets/images/rekapitung_light.png" class="mt-2 mb-2 rounded-circle" alt="thumbnail" style="height:auto;width:80px"></center>
            <h5 class="text-center color-lime text-uppercase">Perhitungan Suara <br> PRESIDEN & WAKIL PRESIDEN RI 2019</h5>
        </div>
        <div class="card-body bg-wit">
            <div class="row  justify-content-center">
                <div class="col-md-12">
                    <h6 class="text-center text-uppercase">WILAYAH PEMILIHAN PROV. <?= $prov->nama ?></h6>

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
                        <b> Jokowi Ma'ruf - <?= $prov->suara1 ?>% <br>

                            Prabowo Sandi - <?= $prov->suara2 ?>%</b>
                    </p>

                </div>


            </div>
            <div class="row justify-content-center">

                <?php foreach ($kota as $hehe) :  ?>
                    <div class="col-12 col-lg-4 col-md-6 mt-3">
                        <!-- <a href="<?= customBaseUrl(false, ['demo', 'tangsel', 'pilwalkot'], 'id')  ?>" class="text-dark"> -->
                        <a href="<?= base_url() ?>/daerah/form_2" class="text-dark">
                        <div class="profile-card card rounded-lg shadow p-4 p-xl-5 mb-4 text-center position-relative overflow-hidden h-100">
                          
                        <div class="banner"></div>
                         <img src="<?= base_url() ?>assets/images/1.png" id="menang1<?= $hehe->id_kab ?>" alt="" class="img-circle mx-auto">
                        <img src="<?= base_url() ?>assets/images/2.png" id="menang2<?= $hehe->id_kab ?>" alt="" class="img-circle mx-auto">
                               
                                <div class="card-body">
                                    <center>
                                        <h5 class="card-title"><?= $hehe->nama  ?></h5>
                                        <canvas id="chart<?= $hehe->id_kab ?>"></canvas>

                                    </center>
                                </div>
                              <b>  <h6 class="text-danger">PRESENTASI HANYA SIMULASI</h6></b>
                            </div>
                        </a>
                    </div>
                <?php endforeach  ?>
            </div>
        </div>
        <div class="card-footer" style=" background: rgb(24,88,97);
background: linear-gradient(90deg, rgba(24,88,97,1) 10%, rgba(39,117,148,1) 51%, rgba(0,212,255,1) 86%);">
            <div class="container">
                <div class="mb-2">
                    &nbsp;
                </div>
                <div class="row justify-content-center mb-4">
                    <!-- <div class="col-lg-12">
                        <center>
                            <a href="https://acakey.com">
                                <img src="https://demo.tangsel.pilwalkot.rekapitung.id/ui/images/aca22.png" alt="" srcset="" class="img-fluid mt-2 mb-3" style="width:210px;height:auto;border-radius:10px;padding: 10px;">
                            </a>
                        </center>
                    </div> -->
                    <table>

                        <tbody>
                            <tr>

                                <td><a class="btn btn-facebook btn-sm" href="https://www.facebook.com/sharer.php?u=https://demo.tangsel.pilwalkot.rekapitung.id/datapublic"> <i class="fab fa-facebook  fa-2x"></i></a></td>
                                <td><a class="text-white btn btn-sm bg-info text-center ml-1" href="http://twitter.com/share?text=Hallo Saya Sudah Melihat Hasil Perhitungan Rekapitung Dan Mengajak Anda Untuk Mengawasi Jalannya Perhitungan Suara Salam Demokrasi Klik Tautan  &amp;url=https://demo.tangsel.pilwalkot.rekapitung.id/datapublic&amp;hashtags=survey"><i class="fab fa-twitter  fa-2x"></i></a></td>
                                <td><a class="text-white btn btn-sm bg-success text-center ml-1" href="https://api.whatsapp.com/send?text=Hallo%20Saya%20Sudah%20Melihat%20Hasil%20Perhitungan%20Rekapitung%20Dan%20Mengajak%20Anda%20Untuk%20Mengawasi%20Jalannya%20Perhitungan%20Suara%0ASalam%20Demokrasi%0AKlik%20Tautan%20https://demo.tangsel.pilwalkot.rekapitung.id/datapublic/"><i class="fab fa-whatsapp  fa-2x"></i></a></td>
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

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const ctx = document.getElementById('chartku').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Jokowi Ma`ruf', 'Prabowo Sandi'],
            datasets: [{
                label: 'My First Dataset',
                data: [<?= $prov->suara1 ?>, <?= $prov->suara2 ?>],
                backgroundColor: [
                    '#41555f',
                '#599bce',


                ],
                hoverOffset: 4
            }]
        },
        options: {
            plugins: {
                legend: {
                    position: "bottom"
                },

            }
        }

    });


    <?php foreach ($kota as $hehe) :  ?>

        <?php
        $suara01 = rand(10,100);
        $suara02 = rand(10,100);
        ?>
        new Chart(document.getElementById('chart<?= $hehe->id_kab ?>').getContext('2d'), {
            type: 'pie',
            data: {
                labels: ['Jokowi Ma`ruf', 'Prabowo Sandi'],
                datasets: [{
                    label: 'My First Dataset',
                    data: [<?= $suara01?>,<?= $suara02?> ],
                    backgroundColor: [
                        '#41555f',
                '#599bce',


                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        position: "bottom"
                    },

                }
            }

        });
        
        <?php if($suara01 < $suara02) : ?>
            $('#menang1<?= $hehe->id_kab ?>').show();
            $('#menang2<?= $hehe->id_kab ?>').hide();
        <?php endif;?>
        <?php if($suara01 > $suara02) : ?>
            $('#menang1<?= $hehe->id_kab ?>').hide();
            $('#menang2<?= $hehe->id_kab ?>').show();
        <?php endif;?>

    <?php endforeach ?>



</script>
</body>

</html>