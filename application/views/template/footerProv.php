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
    var myChart = new Chart(ctx, {
       type: 'pie',
       data: {
          labels: ['Paslon 1 & Wakil Paslon 1', 'Paslon 2 & Wakil Paslon 2', 'Paslon 3 & Wakil Paslon 3'],
          datasets: [{
             label: 'My First Dataset',
             data: [0, 0, 0],
             backgroundColor: [
                '#f82649',
                '#0774f8',
                '#e2a117',

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
 </script>






<script>
    let paslon0={
        voice : 0,
        paslon : "",
        color : ""
    };
    let paslon1={
        voice : 0,
        paslon : "",
        color : ""
    };;
    let paslon2={
        voice : 0,
        paslon : "",
        color : ""
    };;
    window.onload = function(){
    <?php  $domains =  $this->db->get('provinsi')->result(); ?>
    var requests = [
        <?php foreach($domains as $domain): ?>
            { url: '<?=base_url()?>Daerah/apiProvinsi/<?=$domain->id_prov?>/<?=$domain->subdomain?>/' ,
                data : {
                    id : <?=$domain->id_prov?>
                },
            },
            <?php endforeach; ?>
    
        ];
        $.each(requests, function(i, request) {
            $.ajax(request).then(function(response) {
               $('#data-suara').append(response)
            }).then(function(){  

               $('span#suara0').html(`${paslon0.voice}`)
               $('span#suara1').html(`${paslon1.voice}`)
               $('span#suara2').html(`${paslon2.voice}`)
                     if(myChart !== undefined){
                        myChart.destroy();
                     }
                  myChart = new Chart(document.getElementById('chartku').getContext('2d'), {
                        
                        type: 'pie',
                        data: {
                           labels: [paslon0.paslon, paslon1.paslon, paslon2.paslon],
                           datasets: [{
                              label: 'My First Dataset',
                              data:  [paslon0.voice, paslon1.voice, paslon2.voice],
                              backgroundColor:   [paslon0.color, paslon1.color, paslon2.color],
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

                  });
        });
        
    }
</script>


<?php $i = 1; ?>
<?php foreach ($provinsi as $hehe) :  ?>
 <script>
    
    const myChart<?= $hehe->id_prov ?> = new Chart(document.getElementById('chart<?= $hehe->id_prov ?>').getContext('2d'), {
       type: 'pie',
       data: {
          labels: ['Paslon 1 & Wakil Paslon 1', 'Paslon 2 & Wakil Paslon 2', 'Paslon 3 & Wakil Paslon 3'],
          datasets: [{
             label: 'My First Dataset',
             data: [0,0, 0],
             backgroundColor: [
                '#f82649',
                '#0774f8',
                '#e2a117',

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
 </script>



 <?php $i++ ?>
<?php endforeach  ?>



 </body>

 </html>