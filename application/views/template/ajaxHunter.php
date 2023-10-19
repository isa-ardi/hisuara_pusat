<script>
    //UNTUK Hunter

    //hide and show select
    $('#jenisHunter').on('change', function() {
        let jenisval = $('#jenisHunter')
        $('#artiHunter').hide(200)
        if (jenisval.val() == 'pilpres') {
            $('#container-pilgub-Hunter').hide(200)
            $('#container-pilkada-Hunter').hide(200)
            $('#container-pilpres-Hunter').show(200)
        } else if (jenisval.val() == 'pilgub') {
            $('#container-pilpres-Hunter').hide(200)
            $('#container-pilkada-Hunter').hide(200)
            $('#container-pilgub-Hunter').show(200)
        } else if (jenisval.val() == 'pilkada') {
            $('#container-pilpres-Hunter').hide(200)
            $('#container-pilgub-Hunter').hide(200)
            $('#container-pilkada-Hunter').show(200)
        } else if (jenisval.val() == 'pileg') {
            $('#container-pilpres-Hunter').hide(200)
            $('#container-pilgub-Hunter').hide(200)
            $('#container-pilkada-Hunter').hide(200)
            $('#container-pileg-Hunter').show(200)
        } else {
            $('#container-pilpres-Hunter').hide(200)
            $('#container-pilgub-Hunter').hide(200)
            $('#container-pilkada-Hunter').hide(200)
        }
    });
    //PILPRES
    $('#ProvinsiPilpresHunter').on('change', function() {
        let prov = $('#ProvinsiPilpresHunter').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilpresHunter`)
    });
    $('#KotaPilpresHunter').on('change', function() {
        let value = $('#KotaPilpresHunter').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://pilpres.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //pilgub
    $('#ProvinsiPilgubHunter').on('change', function() {
        let prov = $('#ProvinsiPilgubHunter').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilgubHunter`)
    });
    $('#KotaPilgubHunter').on('change', function() {
        let value = $('#KotaPilgubHunter').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilgub.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //Pilkada
    $('#ProvinsiPilkadaHunter').on('change', function() {
        let prov = $('#ProvinsiPilkadaHunter').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilkadaHunter`)
    });
    $('#KotaPilkadaHunter').on('change', function() {
        let value = $('#KotaPilkadaHunter').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilkada.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //AKHIR PERIPIKASI
</script>