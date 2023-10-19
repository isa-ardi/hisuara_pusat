<body id="mobile_wrap">
    <div class="panel-overlay"></div>
    <div class="views">
        <div class="view view-main">
            <div class="pages">
                <div data-page="index" class="page homepage">
                    <div class="page-content">
                        <div class="swiper-container slidertoolbar">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background-image : url(<?= base_url() ?>ui/images/5091372229_ebca868ffd_o.jpeg)">
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
                                        <div class="row justify-content-center hilangkan">
                                            <div class="col-12">
                                                <div class="row justify-content-center ">
                                                    <div class="col-md-5   ">

                                                        <div class="form-group mt-1">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center" style="margin-top:20px">
                                                    <div class="col-md-11 mt-4" style="padding:20px;">
                                                        <!--<center>-->
                                                        <!--	<img src="<?= base_url()  ?>assets/images/bendera.png" style="width:144px;height:auto;position:fixed;top:90px;margin-left: -125px;" class="mt-1">-->
                                                        <!--</center>-->
                                                        
                                                        <div class="card card-body bg-opacity" style="border-radius:20px;margin:0 auto;margin-top:5%;margin-bottom:10px;height:auto;">
                                                           <center> <img src="<?= base_url() ?>assets/images/apk_rekapitung.png" class=" mt-4 mb-2 rounded-circle" alt="thumbnail" style="height:auto;width:80px"></center>
                                                            <form action="<?= base_url() ?>daerah/sendemail" method="POST">
                                                                <h3 class="text-light text-center">Kontak Kami</h3>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="form-group col-12">
                                                                                <input type="text" name="nama" class="form-control" placeholder="Nama *" value="" />
                                                                            </div>
                                                                            <div class="form-group col-12">
                                                                                <input type="text" name="email" class="form-control" placeholder="Email *" value="" />
                                                                            </div>
                                                                            
                                                                                <input type="hidden" name="kota" class="form-control" placeholder="Kota *" value="" />
                                                                            
                                                                            <div class="form-group col-12">
                                                                                <input type="text" name="nohp" class="form-control" placeholder="No Hp *" value="" />
                                                                            </div>
                                                                            <div class="form-group col-12">
                                                                                <select name="status" class="form-control" id="">
                                                               <option selected>Pilih</option>                       <option value="Undangan Presentasi">Undangan Presentasi</option>
                                                                                    <option value="Uji Coba Sistem">Uji Coba Sistem</option>
                                                                                </select>
                                                                            </div>

                                                                        </div>
                                                                        <button type="submit" class="btn btn-block btn-primary">Kirim</button>
                                                                    </div>
                                                                  
                                                                </div>

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