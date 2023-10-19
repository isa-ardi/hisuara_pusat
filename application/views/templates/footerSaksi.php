</div>
<!-- Back Top of the page -->
<span id="back-top" class="pe-7s-angle-up main-bg-color"></span>
</div><!-- end of main page wrapper -->
<script src="<?= base_url('assets/') ?>js/jquery.js"></script>
<script>
    let pemilu = document.querySelector('#pemilu')
    let spinner = document.querySelector("div.spinner-border.text-white.mt-1.mb-1");


    function ajaxSearch(html, data) {
        jQuery.ajax({
            url: `<?= base_url() ?>daerah/searchKota`,
            data: data,
            type: 'POST',
            success: function(res) {
                $(html).html(res)
                // console.log(res)
            }
        });
    }
    pemilu.addEventListener('change', function(e) {
        e.preventDefault()
        if (pemilu.value == 'pilpres') {
            $('#pilgub').hide()
            $('#pilkada').hide()
            $('#pildpd').hide(200)
            $('#pilpres').hide()
            $('#pilkadaKota').hide()
            $('#pilegDpr').hide(200)
            // window.location.href = `<?= customBaseUrl(false, ['pilpres'], 'id') ?>`;
            window.location.href = `<?= base_url() ?>daerah/form`;
        } else if (pemilu.value == 'pilgub') {
            $('#pilpres').hide()
            $('#pilkada').hide()
            $('#pilgub').show(200)
            $('#pildpd').hide(200)
            $('#pilkadaKota').hide()
            $('#pilegDpr').hide(200)
        } else if (pemilu.value == 'jenispemilu') {
            $('#pilpres').hide()
            $('#pilkada').hide(200)
            $('#pilkadaKota').hide(200)
            $('#pilgub').hide()
            $('#pildpd').hide(200)
            $('#pilegDpr').hide(200)
        } else if (pemilu.value == 'pilkada') {
            $('#pilpres').hide()
            $('#pilkada').show(200)
            $('#pilkadaKota').show(200)
            $('#pilgub').hide()
            $('#pilegDpr').hide(200)
            $('#pildpd').hide(200)

        } else if (pemilu.value == 'pildpd') {
            $('#pilpres').hide()
            $('#pildpd').show(200)
            $('#pilkadaKota').hide(200)
            $('#pilgub').hide()
            $('#pilegDpr').hide(200)

        } else {
            $('#pilpres').hide()
            $('#pilkada').hide(200)
            $('#pilkadaKota').hide(200)
            $('#pilgub').hide()
            $('#pildpd').hide(200)
            $('#pilegDpr').show(200)
        }
    });
    $('#provBup').on('change', function() {
        let id_prov = $('#provBup').val();
        spinner.style.display = "block";
        ajax(`<?= base_url() ?>Daerah/getKab/`, {
            id_prov
        }, '#bupKada')
        spinner.style.display = "none";
    });

    $('#pilegDprPartai').on('change', function() {
        spinner.style.display = "block";
        let id_partai = $(this).val();
        const prov = $($(this).parent()).find('select#pilegDprSelect').val()
        let slicepartai = id_partai.split('|')
        let id_partais = slicepartai[0]
        let subdomain_partai = slicepartai[1]
        let sliceprov = prov.split('|')
        let id_prov = sliceprov[0];
        let subdomain_prov = sliceprov[1];
        // if (subdomain_partai == "demokrat") {
        // window.location = `<?= customBaseUrl(true, ['pileg']) ?> `;
        // } else {
        // }

        window.location.href = `<?= base_url() ?>daerah/form`;
        // window.location.href = `<?= customBaseUrl(false, ['${subdomain_partai}', '${subdomain_prov}', 'pileg'], 'id') ?>`;
    });
    spinner.style.display = "none"
    $('#pildpdprov').on('change', function() {
        spinner.style.display = "block";
        let id_prov = $(this).val();
        let slice = id_prov.split('|')
        let id = slice[0]
        let subdomain = slice[1]
        window.location.href = `<?= base_url() ?>daerah/form`;
        // window.location.href = `<?= customBaseUrl(false, ['${subdomain}', 'dpd'], 'id') ?>`;
        // if (subdomain == "banten") {
        // window.location.href = `http://<?= $_SERVER['HTTP_HOST'] ?>/rekapitung_dpd/publicdata`;
        // } else {
        // 	// window.location.href = `<?= base_url() ?>daerah/form`;
        // 	`<?= customBaseUrl(false, ['${subdomain_partai}', '${subdomain_prov}', 'pileg'], 'id') ?>`;
        // }
        // window.location.href = 		`<?= customBaseUrl(false, ['${subdomain_partai}', '${subdomain_prov}', 'pileg'], 'id') ?>`;


    });

    // $('#profPres').on('change', function() {
    // 	let profPres = $('#profPres').val()
    // 	let slice = profPres.split('|')
    // 	let id = slice[0]
    // 	let subdomain = slice[1]
    // 	window.open(`http://pilpres.${subdomain}.rekapitung.id`);
    // 	spinner.style.display = "block";
    // 	window.location.href = `<?= base_url() ?>daerah/form`;
    // });

    $('#bupPartai').on('change', function() {
        let bupKada = $('#bupKada').val()
        let partai = $(this).val();
        let slicePartai = partai.split('|');
        let namaPartai = slicePartai[1];
        let slice = bupKada.split('|');
        let id = slice[0]
        let subdomain = slice[1]
        let subdomainProvinsi = slice[2]
        let namaKota = slice[3]
        let jenis = namaKota.slice(0, 4);
        spinner.style.display = "block";


        if (subdomainProvinsi != 'banten') {
            window.location.href = `<?= base_url()  ?>daerah/form`;
            return;
        }

        if (subdomainProvinsi == 'banten' && subdomain != 'tangsel' && namaPartai != 'paslon1') {
            window.location.href = `<?= base_url()  ?>daerah/form`;
            return;
        }
        if (jenis == "KAB.") {
            window.location.href = `<?= customBaseUrl(false, ['${namaPartai}', '${subdomain}', 'pilbup'], 'id') ?>/pilih/saksi`;
            // window.open(`<?= customBaseUrl(false, ['${namaPartai}', '${subdomain}', 'pilbup'], 'id') ?>`);
        } else {
            window.location.href = `<?= customBaseUrl(false, ['${namaPartai}', '${subdomain}', 'pilwalkot'], 'id') ?>/pilih/saksi`;
        }
    });
    $('#profGub').on('change', function() {
        let profGub = $('#profGub').val()
        let slice = profGub.split('|')
        let id = slice[0]
        let subdomain = slice[1]
        // window.open(`http://pilGub.${subdomain}.rekapitung.id`);
        spinner.style.display = "block";
        // if (subdomain == 'banten') {
        //     // window.location.href = `http://<?= $_SERVER['HTTP_HOST'] ?>/rekapitung_provinsi/data/public`;
        //     window.location.href = `<?= customBaseUrl(false, ['${subdomain}', 'pilgub'], 'id') ?>`;
        // } else {
        //     window.location.href = `<?= customBaseUrl(false, ['${subdomain}', 'pilgub'], 'id') ?>`;
        // }
         window.location.href = `<?= base_url()  ?>daerah/form`;
        
    });




    function ajax(url, data, toHTML) {
        jQuery.ajax({
            url: url,
            data: data,
            type: 'POST',
            success: function(res) {
                $(toHTML).html(res)
            }
        });
    }
</script>

<script src="<?= base_url('ui/') ?>js/swiper.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery.main.js"></script>

<script>
    const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'vertical',
        effect: 'slide',
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        parallax: true,
    });

    function getTranslate3d(el) {
        var values = el.style.transform.split(/\w+\(|\);?/);
        if (!values[1] || !values[1].length) {
            return [];
        }
        return values[1].split(/,\s?/g);
    }
    swiper.on('sliderMove', function() {
        let indexTrans = getTranslate3d(document.querySelector(".swiper-wrapper"))
        let getIndex = indexTrans[1].split("p");
        if (getIndex[0] > 10) {
            $('.hilangkan').hide(20, function() {
                $('div.row.justify-content-center.show').show(200, function() {
                    window.location.reload();
                });

            })
        }
    })
</script>


</body>

</html>