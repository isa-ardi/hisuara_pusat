<style>
    .bg-biru {
        background: linear-gradient(90deg, rgba(24,88,97,1) 10%, rgba(39,117,148,1) 51%, rgba(0,212,255,1) 86%);
    }
    
    h5.text-uppercase{
        color: white;
    }
</style>

<div class="container mt-2 mb-3">
    
    <div class="card">
        <div class="card-header bg-biru">
            <center>
                <img src="https://rekapitung.id//assets/images/rekapitung_light.png" class="mt-2 mb-2 rounded-circle" alt="thumbnail" style="height:auto;width:80px">
            </center>
            <h5 class="text-center text-uppercase">Perhitungan Suara <br> Gubernur & Wakil Gubernur 2019</h5>
        </div>
        <div class="card-body">
            <div class="row  justify-content-center">
                <div class="col-md-12">
                    <h6 class="text-center text-uppercase">WILAYAH PEMILIHAN PROV. <?= $prov->nama  ?></h6>

                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <center>
                        <canvas id="chartku" style="height: 250px;"></canvas>
                    </center>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <?php foreach ($kota as $hehe) :  ?>
                    <div class="col-md-3 mt-3">
                        <a href="<?= customBaseUrl(false, ['demo', 'tangsel', 'pilwalkot'], 'id')  ?>" class="text-dark">
                            <div class="card">
                                <div class="card-body">
                                    <center>
                                        <h5 class="card-title"><?= $hehe->nama  ?></h5>
                                        <canvas id="chart<?= $hehe->id_kab ?>"></canvas>

                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach  ?>
            </div>
        </div>
        
    </div>
    <!--<div class="row">-->
    <!--    <div class="col-lg-12">-->
    <!--        <div class="jumbotron">-->
    <!--            <h1 class="text-dark display-3">-->
    <!--                <center>-->
    <!--                    Pilgub <?= $prov->nama  ?> 2019-->
    <!--                </center>-->
    <!--            </h1>-->
    <!--        </div>-->
    <!--        <div class="row justify-content-center">-->
    <!--            <div class="col-md-4">-->
    <!--                <center>-->
    <!--                    <canvas id="chartku" style="height: 250px;"></canvas>-->
    <!--                </center>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row justify-content-center">-->

    <!--            <?php foreach ($kota as $hehe) :  ?>-->
    <!--                <div class="col-3 mt-3">-->
    <!--                    <a href="<?= customBaseUrl(false, ['demo', 'tangsel', 'pilwalkot'], 'id')  ?>" class="text-dark">-->
    <!--                        <div class="card">-->
    <!--                            <div class="card-body">-->
    <!--                                <center>-->
    <!--                                    <h5 class="card-title"><?= $hehe->nama  ?></h5>-->
    <!--                                    <canvas id="chart<?= $hehe->id_kab ?>"></canvas>-->

    <!--                                </center>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            <?php endforeach  ?>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
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
        type: 'doughnut',
        data: {
            labels: ['Calon 1', 'Calon 2'],
            datasets: [{
                label: 'My First Dataset',
                data: [85607362, 68650239],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',

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

        new Chart(document.getElementById('chart<?= $hehe->id_kab ?>').getContext('2d'), {
            type: 'doughnut',
            data: {
                labels: ['Calon 1', 'Calon 2'],
                datasets: [{
                    label: 'My First Dataset',
                    data: [Math.floor(Math.random() * 10000), Math.floor(Math.random() * 10000)],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',

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
    <?php endforeach ?>
</script>
</body>

</html>