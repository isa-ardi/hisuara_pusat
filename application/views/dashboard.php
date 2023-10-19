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
										<div class="row justify-content-center hilangkan">
											<div class="col-12">
												
												<div class="row justify-content-center" style="margin-top:5%">
													<div class="col-md-5 mt-4" style="padding:20px;">
														<!--<center>-->
														<!--	<img src="<?= base_url()  ?>assets/images/bendera.png" style="width:144px;height:auto;position:fixed;top:90px;margin-left: -125px;" class="mt-1">-->
														<!--</center>-->
														<div class="card card-body bg-opacity" style="border-radius:20px;margin:0 auto;margin-top:5%;margin-bottom:10px;height:auto;">
															<center>
																<img src="<?= base_url() ?>/assets/images/rekapitung_light.png" class="mt-2 mb-2" alt="thumbnail" style="height:auto;width:95px">
																<p class="text-light font-weight-bold">Sistem Pemilu 2024</p>
																<b><h3 class="text-light font-weight-bold">REKAPITUNG</h3></b>
															</center>
															<form id="contactForm" data-toggle="validator">
																<fieldset>
																	<div class="form-group">
																		<select name="prop" id="pemilu" class="form-control">
																			<option value="jenispemilu">Pilih Jenis Pemilu</option>
																			<!--<option value="pilpres">Pemilu Presiden (Pilpres)</option>-->
																			<!--<option value="pilgub">Pemilu Gubernur (Pilgub)</option>-->
																				<option value="pilpres">Pemilu Presiden (Pilpres)</option>
																			<!--<option value="pilgub" disabled>Pemilu Gubernur (Pilgub)</option>-->
																			<!--<option value="pilkada">-->
																			<!--	Pemilu Bupati / Walikota-->
																			<!--</option>-->
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
																		<select name="prop" id="pilegDprPartai" class="form-control mt-3 mb-3">
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
																	<!--<div class="row mt-3">-->
																	<!--    <div class="col">-->
																	<!--        <a href="#" class="btn btn-primary text-uppercase btn-block mb-3" style="background:#e0a800; border-color: #d39e00">-->
																	<!--	        Polling-->
																	<!--        </a>-->
																	<!--    </div>-->
																	<!--    <div class="col">-->
																	<!--        <a href="#" class="btn btn-primary text-uppercase btn-block mb-3" style="background: #dc5d35; border-color: #dc7d35">-->
																	<!--        	Survey-->
																	<!--       </a>-->
																	<!--    </div>-->
																	<!--</div>-->
																	
																    <a href="<?= customBaseUrl(false, ['booking'], 'id')  ?>" class="btn btn-primary text-uppercase mb-3 btn-block" style="background:#007bff">
																		Selengkapnya
																	</a>
													
																	<div class="row no-gutters mt-3 justify-content-center">

																		<div class="col-3">
																			<center>
																				<a href="<?= base_url() ?>daerah/kontak" class=" text-light text-capitalize mt-4">
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
														<div class="row mt-5">
															<div class="col-12 text-white ">
																<center>
																	© PT. Mahadaya Swara Teknologi<br> All Rights Reserved 2022
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