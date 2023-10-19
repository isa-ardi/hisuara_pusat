<script>
    $(document).on('ready', function() {

        $(document).on('change', '#pemilu', function() {
            let pemilu = $('#pemilu').val()
            if (pemilu == 'pilpres') {
                $('#pilgub').hide()
                $('#pilkada').hide()
                $('#pilpres').show(200)
                $('#pilkadaKota').hide()
            } else if (pemilu == 'pilgub') {
                $('#pilpres').hide()
                $('#pilkada').hide()
                $('#pilgub').show(200)
                $('#pilkadaKota').hide()
            } else {
                $('#pilpres').hide()
                $('#pilkada').show(200)
                $('#pilkadaKota').show(200)
                $('#pilgub').hide()
            }
        });
        $('#provBup').on('change', function() {
            let id_prov = $('#provBup').val();
            ajax(`<?= base_url() ?>Daerah/getKab/`, {
                id_prov
            }, '#bupKada')
        });

        $('#profPres').on('change', function() {
            let profPres = $('#profPres').val()
            let slice = profPres.split('|')
            let id = slice[0]
            let subdomain = slice[1]

            window.open(`http://pilpres.${subdomain}.rekapitung.id`);

        });

        $('#bupKada').on('change', function() {
            let bupKada = $('#bupKada').val()
            let slice = bupKada.split('|')
            let id = slice[0]
            let subdomain = slice[1]
            let subdomainProvinsi = slice[2]
            let namaKota = slice[3]
            let jenis = namaKota.slice(0, 4);

            if (jenis === 'KAB.') {
                window.open(`http://pilbup.${subdomain}.${subdomainProvinsi}.rekapitung.id`);
            } else {
                window.open(`http://pilwali.${subdomain}.${subdomainProvinsi}.rekapitung.id`);
            }
        });
        $('#profGub').on('change', function() {
            let profGub = $('#profGub').val()
            let slice = profGub.split('|')
            let id = slice[0]
            let subdomain = slice[1]

            window.open(`http://pilGub.${subdomain}.rekapitung.id`);
        });

        function ajax(url, data, toHTML) {
            jQuery.ajax({
                url: url,
                data: data,
                type: 'POST',
                success: function(res) {
                    $(toHTML).html(res)
                }
            });
        }


    });
</script>
</body>

</html>