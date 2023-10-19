<div class="form-group">
    <select name="prop" id="pemilu" class="form-control">
        <option value="jenispemilu">Pilih Jenis Pemilu</option>
        <option value="pilpres">Pemilu Presiden (Pilpres)</option>
        <option value="pilgub">Pemilu Gubernur (Pilgub)</option>
        <option value="pilkada">
            Pemilu Bupati / Walikota
        </option>
        <option value="pileg">
            Pemilu DPR (Pileg)
        </option>
        <option value="pildpd">Pemilu DPD</option>
    </select>
</div>
<div class="form-group mt-2 mb-1" id="pilpres" style="display:none">
    <select name="prop" id="profPres" class="form-control">
        <option value="">Pilih Provinsi</option>
        <?php
        foreach ($provinsi as $data) {
            echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
        }
        ?>
    </select>
</div>

<div class="form-group mt-2 mb-1" id="pilgub" style="display:none;">
    <select name="prop" id="profGub" class="form-control">
        <option value="">Pilih Provinsi</option>
        <?php
        foreach ($provinsi as $data) {
            echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
        }
        ?>
    </select>
</div>
<div class="form-group mt-2 mb-1" id="pilegDpr" style="display:none;">
    <select name="prop" id="pilegDprSelect" class="form-control">
        <option value="">Pilih Provinsi</option>
        <?php
        foreach ($provinsi as $data) {
            echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
        }
        ?>
    </select>
    <select name="prop" id="pilegDprPartai" class="form-control mt-3">
        <?php
        $partai = $this->db->get('partai')->result();
        ?>
        <option value="">Pilih Partai</option>
        <?php
        foreach ($partai as $data) {
            echo '<option value="' . $data->id . '|' . $data->subdomain . '">' . $data->nama . '</option>';
        }
        ?>
    </select>
</div>
<div class="form-group mt-2 mb-1" id="pildpd" style="display:none;">
    <select name="prop" id="pildpdprov" class="form-control">
        <option value="">Pilih Provinsi</option>
        <?php
        foreach ($provinsi as $data) {
            echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
        }
        ?>
    </select>
</div>
<div class="form-group mt-2" id="pilkada" style="display:none;">
    <select name="prop" id="provBup" class="form-control">
        <option value="">Pilih Provinsi</option>
        <?php
        foreach ($provinsi as $data) {
            echo '<option value="' . $data->id_prov . '">' . $data->nama . '</option>';
        }
        ?>
    </select>
</div>
<div class="form-group mt-2" id="pilkadaKota" style="display:none;">
    <select name="kota" class="form-control" required id="bupKada">
        <option value="">Pilih Kota/Kab</option>
    </select>
    <select name="kota" class="form-control mt-3" required id="bupPartai">
        <option value="">Pilih Pasangan Calon</option>
        <option value="1|paslon1">Paslon 1</option>
        <option value="2|paslon2">Paslon 2</option>
        <option value="3|paslon3">Paslon 3</option>

    </select>
</div>

<div id="msgSubmit" class="form-message hidden"></div>
<center>
    <div class="spinner-border text-white mt-1 mb-1" role="status" style="display:none">
        <span class="sr-only">Loading...</span>
    </div>
</center>



<script>
    let pemilu = document.querySelector('#pemilu')
    let spinner = document.querySelector("div.spinner-border.text-white.mt-1.mb-1");
    pemilu.addEventListener('change', function(e) {
        e.preventDefault()
        if (pemilu.value == 'pilpres') {
            $('#pilgub').hide()
            $('#pilkada').hide()
            $('#pildpd').hide(200)
            $('#pilpres').hide()
            $('#pilkadaKota').hide()
            $('#pilegDpr').hide(200)
            window.location.href = `<?= customBaseUrl(false, ['pilpres'], 'id') ?>`;
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
        // window.open(`<?= customBaseUrl(false, ['${subdomain_partai}', '${subdomain_prov}', 'pileg'], 'id') ?>`)
        window.location.href = `<?= customBaseUrl(false, ['${subdomain_partai}', '${subdomain_prov}', 'pileg'], 'id') ?>`;
    });
    spinner.style.display = "none"
    $('#pildpdprov').on('change', function() {
        spinner.style.display = "block";
        let id_prov = $(this).val();
        let slice = id_prov.split('|')
        let id = slice[0]
        let subdomain = slice[1]
        console.log(subdomain)
        // window.open(`<?= customBaseUrl(false, ['${subdomain}', 'dpd'], 'id') ?>`)
        window.location.href = `<?= customBaseUrl(false, ['${subdomain}', 'dpd'], 'id') ?>`;
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

        // console.log(jenis == "KAB.")
        if (jenis == "KAB.") {
            window.location.href = `<?= customBaseUrl(false, ['${namaPartai}', '${subdomain}', 'pilbup'], 'id') ?>`;
            // window.open(`<?= customBaseUrl(false, ['${namaPartai}', '${subdomain}', 'pilbup'], 'id') ?>`);
        } else {
            window.location.href = `<?= customBaseUrl(false, ['${namaPartai}', '${subdomain}', 'pilwalkot'], 'id') ?>`;
        }
    });
    $('#profGub').on('change', function() {
        let profGub = $('#profGub').val()
        let slice = profGub.split('|')
        let id = slice[0]
        let subdomain = slice[1]
        // window.open(`http://pilGub.${subdomain}.rekapitung.id`);
        spinner.style.display = "block";
        if (subdomain == 'banten') {
            // window.location.href = `http://<?= $_SERVER['HTTP_HOST'] ?>/rekapitung_provinsi/data/public`;
            window.location.href = `<?= customBaseUrl(false, ['${subdomain}', 'pilgub'], 'id') ?>`;
        } else {
            window.location.href = `<?= customBaseUrl(false, ['${subdomain}', 'pilgub'], 'id') ?>`;
        }
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