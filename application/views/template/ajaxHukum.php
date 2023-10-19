<script>
    //UNTUK Hukum

    //hide and show select
    let jenisval = document.getElementById('jenisHukum')
    let artiHukum = document.getElementById('artiHukum')
    let containerPilpresHukum = document.getElementById('container-pilpres-Hukum');
    let containerPilgubHukum = document.getElementById('container-pilgub-Hukum');
    let containerPilkadaHukum = document.getElementById('container-pilkada-Hukum');
    let provPilHukum = document.getElementById('ProvinsiPilpresHukum');
    let KotaPilpresHukum = document.getElementById('KotaPilpresHukum');
    let ProvinsiPilgubHukum = document.getElementById('ProvinsiPilgubHukum');
    let ProvinsiPilkadaHukum = document.getElementById('ProvinsiPilkadaHukum');
    jenisval.addEventListener('change', function() {

        artiHukum.innerHTML = "";

        if (jenisval.value == 'pilpres') {
            containerPilkadaHukum.style.display = "none"
            containerPilgubHukum.style.display = "none"
            containerPilpresHukum.style.display = "block"
        } else if (jenisval.value == 'pilgub') {
            containerPilkadaHukum.style.display = "none"
            containerPilgubHukum.style.display = "block"
            containerPilpresHukum.style.display = "none"
        } else if (jenisval.value == 'pilkada') {
            // console.log(jenisval.value);
            containerPilkadaHukum.style.display = "block"
            containerPilgubHukum.style.display = "none"
            containerPilpresHukum.style.display = "none"
        } else if (jenisval.value == 'pileg') {
            containerPilkadaHukum.style.display = "none"
            containerPilgubHukum.style.display = "none"
            containerPilpresHukum.style.display = "none"
        } else {

        }
    });
    //PILPRES
    provPilHukum.addEventListener('change', function() {
        let prov = provPilHukum.value
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        console.log(prov);
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            $('select#KotaPilpresHukum').html(this.responseText)
        }
        xhttp.open("GET", `<?= base_url() ?>daerah/getKabManual/${id}`, true);
        xhttp.send();
    });
    KotaPilpresHukum.addEventListener('change', function() {
        let value = KotaPilpresHukum.value
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://pilpres.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //pilgub
    ProvinsiPilgubHukum.addEventListener('change', function() {
        let prov = ProvinsiPilgubHukum.value;
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            $('select#KotaPilgubHukum').html(this.responseText)
        }
        xhttp.open("GET", `<?= base_url() ?>daerah/getKabManual/${id}`, true);
        xhttp.send();
    });
    $('#KotaPilgubHukum').on('change', function() {
        let value = $('#KotaPilgubHukum').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilgub.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //Pilkada
    ProvinsiPilkadaHukum.addEventListener('change', function() {
        let prov = ProvinsiPilkadaHukum.value;
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            $('select#KotaPilkadaHukum').html(this.responseText)
        }
        xhttp.open("GET", `<?= base_url() ?>daerah/getKabManual/${id}`, true);
        xhttp.send();
    });
    $('#KotaPilkadaHukum').on('change', function() {
        let value = $('#KotaPilkadaHukum').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilkada.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //AKHIR PERIPIKASI
</script>