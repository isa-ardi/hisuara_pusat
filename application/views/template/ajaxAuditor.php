<script>
    //UNTUK Auditor

    //hide and show select
    $('#jenisAuditor').on('change', function() {
        let jenisval = $('#jenisAuditor')
        $('#artiAuditor').hide(200)
        if (jenisval.val() == 'pilpres') {
            $('#container-pilgub-auditor').hide(200)
            $('#container-pilkada-auditor').hide(200)
            $('#container-pilpres-auditor').show(200)
        } else if (jenisval.val() == 'pilgub') {
            $('#container-pilpres-auditor').hide(200)
            $('#container-pilkada-auditor').hide(200)
            $('#container-pilgub-auditor').show(200)
        } else if (jenisval.val() == 'pilkada') {
            $('#container-pilpres-auditor').hide(200)
            $('#container-pilgub-auditor').hide(200)
            $('#container-pilkada-auditor').show(200)
        } else if (jenisval.val() == 'pileg') {
            $('#container-pilpres-auditor').hide(200)
            $('#container-pilgub-auditor').hide(200)
            $('#container-pilkada-auditor').hide(200)
            $('#container-pileg-auditor').show(200)
        } else {
            $('#container-pilpres-auditor').hide(200)
            $('#container-pilgub-auditor').hide(200)
            $('#container-pilkada-auditor').hide(200)
        }
    });
    //PILPRES
    $('#ProvinsiPilpresAuditor').on('change', function() {
        let prov = $('#ProvinsiPilpresAuditor').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilpresAuditor`)
    });
    $('#KotaPilpresAuditor').on('change', function() {
        let value = $('#KotaPilpresAuditor').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://pilpres.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //pilgub
    $('#ProvinsiPilgubAuditor').on('change', function() {
        let prov = $('#ProvinsiPilgubAuditor').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilgubAuditor`)
    });
    $('#KotaPilgubAuditor').on('change', function() {
        let value = $('#KotaPilgubAuditor').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilgub.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //Pilkada
    $('#ProvinsiPilkadaAuditor').on('change', function() {
        let prov = $('#ProvinsiPilkadaAuditor').val();
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        ajax(`<?= base_url() ?>daerah/getKab`, {
            id_prov: id
        }, `#KotaPilkadaAuditor`)
    });
    $('#KotaPilkadaAuditor').on('change', function() {
        let value = $('#KotaPilkadaAuditor').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilkada.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //AKHIR PERIPIKASI
</script>