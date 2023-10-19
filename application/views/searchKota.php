<ul>
    <?php foreach ($namaKota as $nama) {
        // $provinsi = $this->db->where('id_prov',$nama->id_prov)->get("provinsi")->row_object();
    ?>
        <li>
            <a href="<?= base_url() ?>daerah/form" class="text-dark">
                <?= $nama->nama ?>
            </a>
        </li>
    <?php } ?>
</ul>