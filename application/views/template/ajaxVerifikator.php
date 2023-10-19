<script>
    //UNTUK PERIPIKASI

    //hide and show select
    $('#jenisVerifikator').on('change', function() {
        let jenisval = $('#jenisVerifikator')
        $('#artiVerifikator').hide(200)
        if (jenisval.val() == 'pilpres') {
            $('#container-pilgub-verif').hide(200)
            $('#container-pilkada-verif').hide(200)
            $('#container-pilpres-verif').show(200)
        } else if (jenisval.val() == 'pilgub') {
            $('#container-pilpres-verif').hide(200)
            $('#container-pilkada-verif').hide(200)
            $('#container-pilgub-verif').show(200)
        } else if (jenisval.val() == 'pilkada') {
            $('#container-pilpres-verif').hide(200)
            $('#container-pilgub-verif').hide(200)
            $('#container-pilkada-verif').show(200)
        } else if (jenisval.val() == 'pileg') {
            $('#container-pilpres-verif').hide(200)
            $('#container-pilgub-verif').hide(200)
            $('#container-pilkada-verif').hide(200)
            $('#container-pileg-verif').show(200)
        } else {
            $('#container-pilpres-verif').hide(200)
            $('#container-pilgub-verif').hide(200)
            $('#container-pilkada-verif').hide(200)
        }
    });
    //PILPRES
    $('#ProvinsiPilpresVerifikator').on('change', function() {
        let prov = $('#ProvinsiPilpresVerifikator').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilpresVerifikator`)
    });
    $('#KotaPilpresVerifikator').on('change', function() {
        let value = $('#KotaPilpresVerifikator').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://pilpres.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //pilgub
    $('#ProvinsiPilgubVerifikator').on('change', function() {
        let prov = $('#ProvinsiPilgubVerifikator').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilgubVerifikator`)
    });
    $('#KotaPilgubVerifikator').on('change', function() {
        let value = $('#KotaPilgubVerifikator').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilgub.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //Pilkada
    $('#ProvinsiPilkadaVerifikator').on('change', function() {
        let prov = $('#ProvinsiPilkadaVerifikator').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilkadaVerifikator`)
    });
    $('#KotaPilkadaVerifikator').on('change', function() {
        let value = $('#KotaPilkadaVerifikator').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilkada.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //AKHIR PERIPIKASI
</script>