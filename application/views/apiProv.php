
<?php  $domain =  $this->db->where('id_prov',$id)->get('provinsi')->row(); 
if($domain->subdomain != 'banten' && $domain->subdomain != 'jakarta'){
 
}else{
        $url = 'https://pilpres.'.$domain->subdomain.'.hisuara.id/api/public/get-voice-to-center';
        // if($domain->subdomain == 'jakarta'){
        //   $url = 'https://pilpres.'.$domain->subdomain.'.rekapitung.com/api/public/get-voice-to-center';
        // }
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION=> true
        ));
        $response = curl_exec($curl);
        if(http_response_code()!=200)
        {
        $data= 0;
        }else{
            $data = json_decode($response);
        }
        curl_close($curl);
}

?>



    <tr>
      <th scope="row">
            <a href="<?php
         
              echo "https://pilpres.$domain->subdomain.hisuara.id";

          
            
            ?>">
                <?= $domain->nama  ?>
            </a>      
      </th>
      <?php if($data != 0){ ?>
            <?php foreach($data as $i => $dat): ?>
              <script>
                paslon<?=$i?>.voice += <?=$dat->voice?>;
                paslon<?=$i?>.paslon = '<?=$dat->paslon?>';
                paslon<?=$i?>.color = '<?=$dat->color?>';
              </script>
            <td><?=$dat->voice?></td>

            <?php endforeach; ?>
      <?php }else{ ?>

        <td>0</td>
        <td>0</td>
        <td>0</td>
      <?php } ?>
     
    </tr>

               <script>
                $('.total-suara<?= $id ?>').html(`
                        <p class="mt-2">
                        <?php if($data != 0){ ?>
                    <?php foreach($data as $i => $dat): ?>
                      
                      <?=$dat->paslon?> - <?=$dat->voice?> <br>
                      <?php endforeach ?>  
                           <?php }else{?>
                                <p class="mt-2">
                                            Paslon 1 & Wakil Paslon 1 - 0% <br>

                                            Paslon 2 & Wakil Paslon 2 - 0% <br>
                                            
                                            Paslon 3 & Wakil Paslon 3 - 0%
                                        </p>

                            <?php }?>
                        </p>
                `)

                    <?php if($data != 0){ ?>
                            if (myChart<?= $id ?> !== undefined) {
                                myChart<?= $id ?>.destroy()
                            }
                            <?php }else{
                                                  
                                
                          }?>
          myChart<?= $id ?> = new Chart( document.getElementById('chart<?= $id ?>').getContext('2d'), {
            type: 'pie',
            data: {
                
                  labels: [
                      <?php if($data != 0){ ?>
                    <?php foreach($data as $i => $dat): ?>
                      '<?=$dat->paslon?>', 
                      <?php endforeach ?>
                            <?php }else{
                                
                                
                            }?>
                    ],
                datasets: [{
                  label: 'My First Dataset',
                  
                  data: [
                      
                       <?php if($data != 0){ ?>
                    <?php foreach($data as $i => $dat): ?>
                      <?=$dat->voice?>, 
                      <?php endforeach ?>  
                           <?php }else{
                                
                                
                            }?>
                    ],
                  backgroundColor: [
                          <?php if($data != 0){ ?>
                      <?php foreach($data as $i => $dat): ?>
                      '<?=$dat->color?>', 
                      <?php endforeach ?> 
                           <?php }else{
                                
                                
                            }?>

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





   