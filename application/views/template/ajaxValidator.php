<script>
    //UNTUK Validator

    //hide and show select
    $('#jenisValidator').on('change', function() {
        let jenisval = $('#jenisValidator')
        $('#artiValidator').hide(200)
        if (jenisval.val() == 'pilpres') {
            $('#container-pilgub-validator').hide(200)
            $('#container-pilkada-validator').hide(200)
            $('#container-pilpres-validator').show(200)
        } else if (jenisval.val() == 'pilgub') {
            $('#container-pilpres-validator').hide(200)
            $('#container-pilkada-validator').hide(200)
            $('#container-pilgub-validator').show(200)
        } else if (jenisval.val() == 'pilkada') {
            $('#container-pilpres-validator').hide(200)
            $('#container-pilgub-validator').hide(200)
            $('#container-pilkada-validator').show(200)
        } else if (jenisval.val() == 'pileg') {
            $('#container-pilpres-validator').hide(200)
            $('#container-pilgub-validator').hide(200)
            $('#container-pilkada-validator').hide(200)
            $('#container-pileg-validator').show(200)
        } else {
            $('#container-pilpres-validator').hide(200)
            $('#container-pilgub-validator').hide(200)
            $('#container-pilkada-validator').hide(200)
        }
    });
    //PILPRES
    $('#ProvinsiPilpresValidator').on('change', function() {
        let prov = $('#ProvinsiPilpresValidator').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilpresValidator`)
    });
    $('#KotaPilpresValidator').on('change', function() {
        let value = $('#KotaPilpresValidator').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://pilpres.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //pilgub
    $('#ProvinsiPilgubValidator').on('change', function() {
        let prov = $('#ProvinsiPilgubValidator').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilgubValidator`)
    });
    $('#KotaPilgubValidator').on('change', function() {
        let value = $('#KotaPilgubValidator').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilgub.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //Pilkada
    $('#ProvinsiPilkadaValidator').on('change', function() {
        let prov = $('#ProvinsiPilkadaValidator').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilkadaValidator`)
    });
    $('#KotaPilkadaValidator').on('change', function() {
        let value = $('#KotaPilkadaValidator').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilkada.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //AKHIR PERIPIKASI
</script>