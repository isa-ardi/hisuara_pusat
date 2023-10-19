<script>
    //UNTUK Saksi

    //hide and show select
    $('#jenisSaksi').on('change', function() {
        let jenisval = $('#jenisSaksi')

        $('#artiSaksi').hide(200)
        if (jenisval.val() == 'pilpres') {
            $('#container-pilgub-Saksi').hide(200)
            $('#container-pilkada-Saksi').hide(200)
            $('#container-pilpres-Saksi').show(200)
        } else if (jenisval.val() == 'pilgub') {
            $('#container-pilpres-Saksi').hide(200)
            $('#container-pilkada-Saksi').hide(200)
            $('#container-pilgub-Saksi').show(200)
        } else if (jenisval.val() == 'pilkada') {
            $('#container-pilpres-Saksi').hide(200)
            $('#container-pilgub-Saksi').hide(200)
            $('#container-pilkada-Saksi').show(200)
        } else if (jenisval.val() == 'pileg') {
            $('#container-pilpres-Saksi').hide(200)
            $('#container-pilgub-Saksi').hide(200)
            $('#container-pilkada-Saksi').hide(200)
            $('#container-pileg-Saksi').show(200)
        } else {
            $('#container-pilpres-Saksi').hide(200)
            $('#container-pilgub-Saksi').hide(200)
            $('#container-pilkada-Saksi').hide(200)
        }
    });
    //PILPRES
    $('#ProvinsiPilpresSaksi').on('change', function() {
        let prov = $('#ProvinsiPilpresSaksi').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilpresSaksi`)
    });
    $('#KotaPilpresSaksi').on('change', function() {
        let value = $('#KotaPilpresSaksi').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://pilpres.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //pilgub
    $('#ProvinsiPilgubSaksi').on('change', function() {
        let prov = $('#ProvinsiPilgubSaksi').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilgubSaksi`)
    });
    $('#KotaPilgubSaksi').on('change', function() {
        let value = $('#KotaPilgubSaksi').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilgub.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //Pilkada
    $('#ProvinsiPilkadaSaksi').on('change', function() {
        let prov = $('#ProvinsiPilkadaSaksi').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilkadaSaksi`)
    });
    $('#KotaPilkadaSaksi').on('change', function() {
        let value = $('#KotaPilkadaSaksi').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilkada.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //AKHIR PERIPIKASI
</script>