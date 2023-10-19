<script>
    //UNTUK Checking

    //hide and show select
    $('#jenisChecking').on('change', function() {
        let jenisval = $('#jenisChecking')
        $('#artiChecking').hide(200)
        if (jenisval.val() == 'pilpres') {
            $('#container-pilgub-checking').hide(200)
            $('#container-pilkada-checking').hide(200)
            $('#container-pilpres-checking').show(200)
        } else if (jenisval.val() == 'pilgub') {
            $('#container-pilpres-checking').hide(200)
            $('#container-pilkada-checking').hide(200)
            $('#container-pilgub-checking').show(200)
        } else if (jenisval.val() == 'pilkada') {
            $('#container-pilpres-checking').hide(200)
            $('#container-pilgub-checking').hide(200)
            $('#container-pilkada-checking').show(200)
        } else if (jenisval.val() == 'pileg') {
            $('#container-pilpres-checking').hide(200)
            $('#container-pilgub-checking').hide(200)
            $('#container-pilkada-checking').hide(200)
            $('#container-pileg-checking').show(200)
        } else {
            $('#container-pilpres-checking').hide(200)
            $('#container-pilgub-checking').hide(200)
            $('#container-pilkada-checking').hide(200)
        }
    });
    //PILPRES
    $('#ProvinsiPilpresChecking').on('change', function() {
        let prov = $('#ProvinsiPilpresChecking').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilpresChecking`)
    });
    $('#KotaPilpresChecking').on('change', function() {
        let value = $('#KotaPilpresChecking').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://pilpres.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //pilgub
    $('#ProvinsiPilgubChecking').on('change', function() {
        let prov = $('#ProvinsiPilgubChecking').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilgubChecking`)
    });
    $('#KotaPilgubChecking').on('change', function() {
        let value = $('#KotaPilgubChecking').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilgub.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //Pilkada
    $('#ProvinsiPilkadaChecking').on('change', function() {
        let prov = $('#ProvinsiPilkadaChecking').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilkadaChecking`)
    });
    $('#KotaPilkadaChecking').on('change', function() {
        let value = $('#KotaPilkadaChecking').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilkada.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //AKHIR PERIPIKASI
</script>