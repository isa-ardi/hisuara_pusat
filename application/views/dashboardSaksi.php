<body id="mobile_wrap">
    <div class="panel-overlay"></div>
    <div class="views">
        <div class="view view-main">
            <div class="pages">
                <div data-page="index" class="page homepage">
                    <div class="page-content">
                        <div class="swiper-container slidertoolbar">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background-image : url(<?= base_url()  ?>ui/images/background.jpg)">
                                    <div class="container">
                                        <div class="row justify-content-center show" style="display:none">
                                            <div class="col-4">
                                                <center>
                                                    <div class="spinner-border text-white mt-5 mb-1" role="status">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center hilangkan" style="margin-top:15px">
                                            <div class="col-12">

                                                <div class="row justify-content-center">
                                                    <div class="col-md-5 mt-4" style="padding:20px;">
                                                        <!--<center>-->
                                                        <!--    <img src="<?= base_url()  ?>assets/images/bendera.png" style="width:144px;height:auto;position:fixed;top:30px;margin-left: -80px;" class="mt-1">-->
                                                        <!--</center>-->
                                                        <div class="card card-body bg-opacity" style="border-radius:20px;margin:0 auto;margin-top:20%;margin-bottom:10px">
                                                            <center>
                                                                <img src="<?= base_url('assets/images/apk_saksi.png') ?>" class="img-thumbnail mt-2 mb-2 rounded-circle" alt="thumbnail" style="height:auto;width:70px">
                                                                <strong>
                                                                    <h3 class="text-light text-uppercase">SAKSI REKAPITUNG</h3>
                                                                </strong>
                                                            </center>
                                                            <form id="contactForm" data-toggle="validator">
                                                                <fieldset>
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
                                                                    <!-- <a href="<?= base_url() ?>daerah/adminin" class="btn btn-primary text-uppercase mt-3 btn-block" style="background:RGBA(0,123,255,1)">
																		Bergabung
																	</a> -->
                                                                    <div class="row no-gutters mt-4 justify-content-center">

                                                                        <div class="col-3">
                                                                            <center>
                                                                                <a href="<?= base_url() ?>daerah/form" class=" text-light text-capitalize mt-4">
                                                                                    <b>Kontak</b>
                                                                                </a>
                                                                            </center>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <center>
                                                                                <a href="<?= base_url() ?>daerah/tentang" class="text-light">
                                                                                    <b>
                                                                                        Tentang
                                                                                    </b>
                                                                                </a>
                                                                            </center>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <center>
                                                                                <a href="<?= base_url() ?>daerah/disclaimer" class="text-light">
                                                                                    <b>
                                                                                        Disclaimer
                                                                                    </b>
                                                                                </a>
                                                                            </center>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                        </section>


                                                        <div class="row mt-2 footers">
                                                            <div class="col-12 text-white ">
                                                                <center>
                                                                    © PT. Mahadaya Swara Teknologi<br> All Rights Reserved 2021
                                                                </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>

    </script>