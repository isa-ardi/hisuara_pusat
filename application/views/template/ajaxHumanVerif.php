<script>
    //UNTUK HumanVerif

    //hide and show select
    let jenisvalhumanVerif = document.getElementById('jenisHumanVerif')
    let artiHumanVerif = document.getElementById('artiHumanVerif')
    let containerPilpresHumanVerif = document.getElementById('container-pilpres-HumanVerif');
    let containerPilgubHumanVerif = document.getElementById('container-pilgub-HumanVerif');
    let containerPilkadaHumanVerif = document.getElementById('container-pilkada-HumanVerif');
    let provPilHumanVerif = document.getElementById('ProvinsiPilpresHumanVerif');
    let KotaPilpresHumanVerif = document.getElementById('KotaPilpresHumanVerif');
    let ProvinsiPilgubHumanVerif = document.getElementById('ProvinsiPilgubHumanVerif');
    let ProvinsiPilkadaHumanVerif = document.getElementById('ProvinsiPilkadaHumanVerif');
    jenisvalhumanVerif.addEventListener('change', function() {

        artiHumanVerif.innerHTML = "";

        if (jenisvalhumanVerif.value == 'pilpres') {
            containerPilkadaHumanVerif.style.display = "none"
            containerPilgubHumanVerif.style.display = "none"
            containerPilpresHumanVerif.style.display = "block"
        } else if (jenisvalhumanVerif.value == 'pilgub') {
            containerPilkadaHumanVerif.style.display = "none"
            containerPilgubHumanVerif.style.display = "block"
            containerPilpresHumanVerif.style.display = "none"
        } else if (jenisvalhumanVerif.value == 'pilkada') {
            // console.log(jenisvalhumanVerif.value);
            containerPilkadaHumanVerif.style.display = "block"
            containerPilgubHumanVerif.style.display = "none"
            containerPilpresHumanVerif.style.display = "none"
        } else if (jenisvalhumanVerif.value == 'pileg') {
            containerPilkadaHumanVerif.style.display = "none"
            containerPilgubHumanVerif.style.display = "none"
            containerPilpresHumanVerif.style.display = "none"
        } else {

        }
    });
    //PILPRES
    provPilHumanVerif.addEventListener('change', function() {
        let prov = provPilHumanVerif.value
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        console.log(prov);
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            $('select#KotaPilpresHumanVerif').html(this.responseText)
        }
        xhttp.open("GET", `<?= base_url() ?>daerah/getKabManual/${id}`, true);
        xhttp.send();
    });
    KotaPilpresHumanVerif.addEventListener('change', function() {
        let value = KotaPilpresHumanVerif.value
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://pilpres.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //pilgub
    ProvinsiPilgubHumanVerif.addEventListener('change', function() {
        let prov = ProvinsiPilgubHumanVerif.value;
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            $('select#KotaPilgubHumanVerif').html(this.responseText)
        }
        xhttp.open("GET", `<?= base_url() ?>daerah/getKabManual/${id}`, true);
        xhttp.send();
    });
    $('#KotaPilgubHumanVerif').on('change', function() {
        let value = $('#KotaPilgubHumanVerif').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilgub.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //Pilkada
    ProvinsiPilkadaHumanVerif.addEventListener('change', function() {
        let prov = ProvinsiPilkadaHumanVerif.value;
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            $('select#KotaPilkadaHumanVerif').html(this.responseText)
        }
        xhttp.open("GET", `<?= base_url() ?>daerah/getKabManual/${id}`, true);
        xhttp.send();
    });
    $('#KotaPilkadaHumanVerif').on('change', function() {
        let value = $('#KotaPilkadaHumanVerif').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilkada.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //AKHIR PERIPIKASI
</script>