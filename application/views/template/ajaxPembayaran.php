<script>
    //UNTUK Pembayaran

    //hide and show select
    let jenisPembarayaran = document.getElementById('jenisPembayaran')
    let artiPembayaran = document.getElementById('artiPembayaran')
    let containerPilpresPembayaran = document.getElementById('container-pilpres-Pembayaran');
    let containerPilgubPembayaran = document.getElementById('container-pilgub-Pembayaran');
    let containerPilkadaPembayaran = document.getElementById('container-pilkada-Pembayaran');
    let provPilPembayaran = document.getElementById('ProvinsiPilpresPembayaran');
    let KotaPilpresPembayaran = document.getElementById('KotaPilpresPembayaran');
    let ProvinsiPilgubPembayaran = document.getElementById('ProvinsiPilgubPembayaran');
    let ProvinsiPilkadaPembayaran = document.getElementById('ProvinsiPilkadaPembayaran');
    jenisPembarayaran.addEventListener('change', function() {

        artiPembayaran.innerHTML = "";

        if (jenisPembarayaran.value == 'pilpres') {
            containerPilkadaPembayaran.style.display = "none"
            containerPilgubPembayaran.style.display = "none"
            containerPilpresPembayaran.style.display = "block"
        } else if (jenisPembarayaran.value == 'pilgub') {
            containerPilkadaPembayaran.style.display = "none"
            containerPilgubPembayaran.style.display = "block"
            containerPilpresPembayaran.style.display = "none"
        } else if (jenisPembarayaran.value == 'pilkada') {
            // console.log(jenisPembarayaran.value);
            containerPilkadaPembayaran.style.display = "block"
            containerPilgubPembayaran.style.display = "none"
            containerPilpresPembayaran.style.display = "none"
        } else if (jenisPembarayaran.value == 'pileg') {
            containerPilkadaPembayaran.style.display = "none"
            containerPilgubPembayaran.style.display = "none"
            containerPilpresPembayaran.style.display = "none"
        } else {

        }
    });
    //PILPRES
    provPilPembayaran.addEventListener('change', function() {
        let prov = provPilPembayaran.value
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        console.log(prov);
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            $('select#KotaPilpresPembayaran').html(this.responseText)
        }
        xhttp.open("GET", `<?= base_url() ?>daerah/getKabManual/${id}`, true);
        xhttp.send();
    });
    KotaPilpresPembayaran.addEventListener('change', function() {
        let value = KotaPilpresPembayaran.value
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://pilpres.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //pilgub
    ProvinsiPilgubPembayaran.addEventListener('change', function() {
        let prov = ProvinsiPilgubPembayaran.value;
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            $('select#KotaPilgubPembayaran').html(this.responseText)
        }
        xhttp.open("GET", `<?= base_url() ?>daerah/getKabManual/${id}`, true);
        xhttp.send();
    });
    $('#KotaPilgubPembayaran').on('change', function() {
        let value = $('#KotaPilgubPembayaran').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilgub.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //Pilkada
    ProvinsiPilkadaPembayaran.addEventListener('change', function() {
        let prov = ProvinsiPilkadaPembayaran.value;
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            $('select#KotaPilkadaPembayaran').html(this.responseText)
        }
        xhttp.open("GET", `<?= base_url() ?>daerah/getKabManual/${id}`, true);
        xhttp.send();
    });
    $('#KotaPilkadaPembayaran').on('change', function() {
        let value = $('#KotaPilkadaPembayaran').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilkada.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //AKHIR PERIPIKASI
</script>