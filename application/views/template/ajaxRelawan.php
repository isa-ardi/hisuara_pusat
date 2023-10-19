<script>
    //UNTUK Relawan

    //hide and show select
    let jenisvalRelawan = document.getElementById('jenisRelawan')
    let artiRelawan = document.getElementById('artiRelawan')
    let containerPilpresRelawan = document.getElementById('container-pilpres-Relawan');
    let containerPilgubRelawan = document.getElementById('container-pilgub-Relawan');
    let containerPilkadaRelawan = document.getElementById('container-pilkada-Relawan');
    let provPilRelawan = document.getElementById('ProvinsiPilpresRelawan');
    let KotaPilpresRelawan = document.getElementById('KotaPilpresRelawan');
    let ProvinsiPilgubRelawan = document.getElementById('ProvinsiPilgubRelawan');
    let ProvinsiPilkadaRelawan = document.getElementById('ProvinsiPilkadaRelawan');
    jenisvalRelawan.addEventListener('change', function() {

        artiRelawan.innerHTML = "";

        if (jenisvalRelawan.value == 'pilpres') {
            containerPilkadaRelawan.style.display = "none"
            containerPilgubRelawan.style.display = "none"
            containerPilpresRelawan.style.display = "block"
        } else if (jenisvalRelawan.value == 'pilgub') {
            containerPilkadaRelawan.style.display = "none"
            containerPilgubRelawan.style.display = "block"
            containerPilpresRelawan.style.display = "none"
        } else if (jenisvalRelawan.value == 'pilkada') {
            // console.log(jenisvalRelawan.value);
            containerPilkadaRelawan.style.display = "block"
            containerPilgubRelawan.style.display = "none"
            containerPilpresRelawan.style.display = "none"
        } else if (jenisvalRelawan.value == 'pileg') {
            containerPilkadaRelawan.style.display = "none"
            containerPilgubRelawan.style.display = "none"
            containerPilpresRelawan.style.display = "none"
        } else {

        }
    });
    //PILPRES
    provPilRelawan.addEventListener('change', function() {
        let prov = provPilRelawan.value
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        console.log(prov);
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            $('select#KotaPilpresRelawan').html(this.responseText)
        }
        xhttp.open("GET", `<?= base_url() ?>daerah/getKabManual/${id}`, true);
        xhttp.send();
    });
    KotaPilpresRelawan.addEventListener('change', function() {
        let value = KotaPilpresRelawan.value
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://pilpres.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //pilgub
    ProvinsiPilgubRelawan.addEventListener('change', function() {
        let prov = ProvinsiPilgubRelawan.value;
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            $('select#KotaPilgubRelawan').html(this.responseText)
        }
        xhttp.open("GET", `<?= base_url() ?>daerah/getKabManual/${id}`, true);
        xhttp.send();
    });
    $('#KotaPilgubRelawan').on('change', function() {
        let value = $('#KotaPilgubRelawan').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilgub.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //Pilkada
    ProvinsiPilkadaRelawan.addEventListener('change', function() {
        let prov = ProvinsiPilkadaRelawan.value;
        let pecah = prov.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            $('select#KotaPilkadaRelawan').html(this.responseText)
        }
        xhttp.open("GET", `<?= base_url() ?>daerah/getKabManual/${id}`, true);
        xhttp.send();
    });
    $('#KotaPilkadaRelawan').on('change', function() {
        let value = $('#KotaPilkadaRelawan').val()
        let pecah = value.split("|");
        let id = pecah[0];
        let subdomain = pecah[1]
        let subdomainProvinsi = pecah[2]
        window.location.href = `https://Pilkada.${subdomain}.${subdomainProvinsi}.rekapitung.id/daftar`
    })

    //AKHIR PERIPIKASI
</script>