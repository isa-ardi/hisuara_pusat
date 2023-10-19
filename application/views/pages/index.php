<body id="mobile_wrap">

	<div class="panel-overlay"></div>

	<div class="panel panel-left panel-reveal">

	</div>

	<div class="views">
		<div class="view view-main">
			<div class="pages">
				<div data-page="index" class="page homepage">
					<div class="page-content">
						<div class="navbar navbar--fixed navbar--fixed-top">
							<div class="navbar__col navbar__col--title">
								<div class="col-12 mb-2">
									<img src="<?= base_url() ?>ui/images/satelit.gif" class="img-fluid float-left" style="width:80px;height:auto">
								</div>
							</div>
							<div class="navbar__col navbar__col--icon navbar__col--icon-right">

							</div>
						</div>
						<div class="swiper-container slidertoolbar">
							<div class="swiper-wrapper">
								<div class="swiper-slide" style="background-image:url(<?= base_url('ui/') ?>images/rbt_6.png);">
									<div class="slider-caption" style="padding:10px;">
										<div class=" row">
											<div class="col-lg-4">
												<div class="card card-body" style="background-color:RGBA(52,58,64,0.7)">
													<h2 data-swiper-parallax="-100%" class="title--white">Saksi</h2>
													<p data-swiper-parallax="-30%" class="text--white" id="artiSaksi">
														Saksi adalah seseorang yang ditunjuk dan atau diberi surat mandat secara tertulis dari Peserta Pemilu untuk bertugas mengikuti dan menyaksikan pelaksanaan pemungutan dan penghitungan suara di TPS, serta rekapitulasi perolehan hasil suara di setiap tingkatan (PPS, PPK dan KPU/KIP)
													</p>
													<div class="form_row">
														<div class="selector_overlay">
															<select data-swiper-parallax="-50%" class="required select-dark" id="jenisSaksi">
																<option value="" readonly selected>Pilih Jenis Pemilu</option>
																<option value="pilpres">Pemilu Presiden (Pilpres)</option>
																<option value="pilgub">Pemilu Gubernur (Pilgub)</option>
																<option value="pilkada">
																	Pemilu Bupati / Walikota
																</option>
																<option value="pileg">
																	Pemilu DPR (Pileg)
																</option>

															</select>
														</div>
														<div class="selector_overlay" id="container-pilpres-Saksi" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" id="ProvinsiPilpresSaksi">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" id="KotaPilpresSaksi">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilgub-Saksi" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" id="ProvinsiPilgubSaksi">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" id="KotaPilgubSaksi">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilkada-Saksi" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" id="ProvinsiPilkadaSaksi">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" id="KotaPilkadaSaksi">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-8">
												<!-- <div class="row">
													<div class="col-12">
														<img src="<?= base_url() ?>ui/images/next.png" data-swiper-parallax="-70%" class="img-fluid shadow-sm float-right" style="width:300px;height:auto;border-radius:20px;" id="slide">
													</div>
												</div> -->
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide" style="background-image:url(<?= base_url('ui/') ?>images/rbt_6.png);">
									<div class="slider-caption" style="padding:10px;">
										<div class=" row">
											<div class="col-lg-4">
												<div class="card card-body" style="background-color:RGBA(52,58,64,0.7)">
													<h2 data-swiper-parallax="-100%" class="title--white">Relawan</h2>
													<p data-swiper-parallax="-30%" class="text--white" id="artiRelawan">
														Relawan adalah simpatisan pendukung paslon yang dapat mengirimkan C1 di berbagai TPS sebagai pelapis dari Saksi. Relawan juga bisa melakukan banding terhadap C1 yang tidak sesuai dengan TPS aslinya.
													</p>
													<div class="form_row">
														<div class="selector_overlay">
															<select data-swiper-parallax="-50%" class="required select-dark" id="jenisRelawan">
																<option value="" readonly selected>Pilih Jenis Pemilu</option>
																<option value="pilpres">Pemilu Presiden (Pilpres)</option>
																<option value="pilgub">Pemilu Gubernur (Pilgub)</option>
																<option value="pilkada">
																	Pemilu Bupati / Walikota
																</option>
																<option value="pileg">
																	Pemilu DPR (Pileg)
																</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilpres-Relawan" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" id="ProvinsiPilpresRelawan">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" id="KotaPilpresRelawan">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilgub-Relawan" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" id="ProvinsiPilgubRelawan">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" id="KotaPilgubRelawan">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilkada-Relawan" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" id="ProvinsiPilkadaRelawan">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" id="KotaPilkadaRelawan">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-8">
												<!-- <div class="row">
													<div class="col-12">
														<img src="<?= base_url() ?>ui/images/next.png" data-swiper-parallax="-70%" class="img-fluid shadow-sm float-right" style="width:300px;height:auto;border-radius:20px;" id="slide">
													</div>
												</div> -->
											</div>
										</div>
									</div>
								</div>

								<div class="swiper-slide" style="background-image:url(<?= base_url('ui/') ?>images/rbt_1.png);">
									<div class="slider-caption " style="padding:10px;">
										<div class="row">
											<div class="col-lg-4">
												<div class="card card-body" style="background-color:RGBA(52,58,64,0.7)">
													<h2 style="color:white !important" data-swiper-parallax="-100%">Verifikator (INTERNAL)</h2>
													<p style="color:white !important" data-swiper-parallax="-30%" id="artiVerifikator">
														Admin Verifikasi disebut Verifikator. Admin ini merupakan admin level 1 yang bertugas memeriksa hasil suara masuk yang dikirimkan oleh saksi di TPS.
														Verifikator dapat mengesahkan dan mengkoreksi suara yang masuk serta melaporkan data kecurangan pada bagian hukum Rekapitung.



													</p>
													<div class="form_row">
														<div class="selector_overlay">
															<select data-swiper-parallax="-50%" class="required select-dark" id="jenisVerifikator">
																<option value="" readonly selected>Pilih Jenis Pemilu</option>
																<option value="pilpres">Pemilu Presiden (Pilpres)</option>
																<option value="pilgub">Pemilu Gubernur (Pilgub)</option>
																<option value="pilkada">
																	Pemilu Bupati / Walikota
																</option>
																<option value="pileg">
																	Pemilu DPR (Pileg)
																</option>

															</select>
														</div>
														<div class="selector_overlay" id="container-pilpres-verif" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" id="ProvinsiPilpresVerifikator">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" id="KotaPilpresVerifikator">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilgub-verif" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" id="ProvinsiPilgubVerifikator">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" id="KotaPilgubVerifikator">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilkada-verif" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" id="ProvinsiPilkadaVerifikator">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" id="KotaPilkadaVerifikator">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>


													</div>
												</div>
											</div>
										</div>

									</div>
								</div>

								<div class="swiper-slide" style="background-image:url(<?= base_url('ui/') ?>images/rbt_2.png);">
									<div class="slider-caption" style="padding:10px;">
										<div class="row">
											<div class="col-lg-4">
												<div class="card card-body" style="background-color:RGBA(52,58,64,0.7)">
													<h2 data-swiper-parallax="-100%" class="title--white">Auditor (EXTERNAL)</h2>
													<p data-swiper-parallax="-30%" class="text--white" id="artiAuditor">
														Admin Audit disebut Auditor. admin ini merupakan admin level 2 yang bertugas untuk memeriksa kembali hasil perhitungan yang dilakukan oleh Verifikator.
														Auditor dapat membatalkan hasil verifikasi yang di lakukan oleh verifikator jika terjadi perbedaan data (tidak akurat).


													</p>
													<div class="form_row">
														<div class="selector_overlay">
															<select data-swiper-parallax="-50%" class="required select-dark" id="jenisAuditor">
																<option value="" readonly selected>Pilih Jenis Pemilu</option>
																<option value="pilpres">Pemilu Presiden (Pilpres)</option>
																<option value="pilgub">Pemilu Gubernur (Pilgub)</option>
																<option value="pilkada">
																	Pemilu Bupati / Walikota
																</option>
																<option value="pileg">
																	Pemilu DPR (Pileg)
																</option>

															</select>
														</div>
														<div class="selector_overlay" id="container-pilpres-auditor" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" id="ProvinsiPilpresAuditor">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" id="KotaPilpresAuditor">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilgub-auditor" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" id="ProvinsiPilgubAuditor">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" id="KotaPilgubAuditor">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilkada-auditor" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" id="ProvinsiPilkadaAuditor">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" id="KotaPilkadaAuditor">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>

													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="swiper-slide" style="background-image:url(<?= base_url('ui/') ?>images/rbt_4.jpg);">

									<div class="slider-caption" style="padding:10px;">
										<div class="row">
											<div class="col-lg-4">
												<div class="card card-body" style="background-color:RGBA(52,58,64,0.7)">
													<h2 data-swiper-parallax="-100%" class="title--white">Validator (INTERNAL)</h2>
													<p data-swiper-parallax="-30%" class="text--white" id="artiValidator">
														Admin Validasi disebut Validator. Admin ini merupakan admin level 3 yang bertugas untuk mencocokan hasil suara Rekapitung yang telah diperiksa oleh Verifikator dan Auditor untuk dibandingkan dengan hasil suara pleno KPU disemua tingkatan.
													</p>
													<div class="form_row">
														<div class="selector_overlay">
															<select data-swiper-parallax="-50%" class="required select-dark" id="jenisValidator">
																<option value="" readonly selected>Pilih Jenis Pemilu</option>
																<option value="pilpres">Pemilu Presiden (Pilpres)</option>
																<option value="pilgub">Pemilu Gubernur (Pilgub)</option>
																<option value="pilkada">
																	Pemilu Bupati / Walikota
																</option>
																<option value="pileg">
																	Pemilu DPR (Pileg)
																</option>

															</select>
														</div>
														<div class="selector_overlay" id="container-pilpres-validator" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilpresValidator">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilpresValidator">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilgub-validator" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilgubValidator">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilgubValidator">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilkada-validator" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilkadaValidator">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilkadaValidator">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
								<div class="swiper-slide" style="background-image:url(<?= base_url('ui/') ?>images/rbt_3.png);">

									<div class="slider-caption" style="padding:10px;">
										<div class="row">
											<div class="col-lg-4">
												<div class="card card-body" style="background-color:RGBA(52,58,64,0.7)">
													<h2 data-swiper-parallax="-100%" class="title--white">Checking</h2>
													<p data-swiper-parallax="-30%" class="text--white" id="artiChecking">
														Admin Checking disebut Adchek. Admin ini merupakan admin level 4 yang bertugas untuk memeriksa hasil suara masuk yang dikirim kan oleh saksi di TPS diluar waktu dan jam pemilu yang ditetapkan.
														Adchek dapat mengesahkan dan mengkoreksi suara yang masuk serta melaporkan data kecurangan pada bagian hukum Rekapitung.



													</p>

													<div class="form_row">
														<div class="selector_overlay">
															<select data-swiper-parallax="-50%" class="required select-dark" id="jenisChecking">
																<option value="" readonly selected>Pilih Jenis Pemilu</option>
																<option value="pilpres">Pemilu Presiden (Pilpres)</option>
																<option value="pilgub">Pemilu Gubernur (Pilgub)</option>
																<option value="pilkada">
																	Pemilu Bupati / Walikota
																</option>
																<option value="pileg">
																	Pemilu DPR (Pileg)
																</option>

															</select>
														</div>
														<div class="selector_overlay" id="container-pilpres-checking" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilpresChecking">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilpresChecking">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilgub-checking" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilgubChecking">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilgubChecking">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilkada-checking" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilkadaChecking">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilkadaChecking">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>



								</div>
								<div class="swiper-slide" style="background-image:url(<?= base_url('ui/') ?>images/rbt_5.png);">

									<div class="slider-caption" style="padding:10px;">
										<div class="row">
											<div class="col-lg-4">
												<div class="card card-body" style="background-color:RGBA(52,58,64,0.7)">
													<h2 data-swiper-parallax="-100%" class="title--white">Hunter</h2>
													<p data-swiper-parallax="-30%" class="text--white" id="artiHunter">

														Admin Hunter disebut Adhun. Admin ini merupakan admin level 5 yang bertugas untuk memeriksa hasil suara masuk yang dikirim kan oleh Relawan di TPS.
														Adhun dapat mengesahkan dan mengkoreksi suara yang masuk serta melaporkan data kecurangan pada bagian hukum Rekapitung.




													</p>
													<div class="form_row">
														<div class="selector_overlay">
															<select data-swiper-parallax="-50%" class="required select-dark" id="jenisHunter">
																<option value="" readonly selected>Pilih Jenis Pemilu</option>
																<option value="pilpres">Pemilu Presiden (Pilpres)</option>
																<option value="pilgub">Pemilu Gubernur (Pilgub)</option>
																<option value="pilkada">
																	Pemilu Bupati / Walikota
																</option>
																<option value="pileg">
																	Pemilu DPR (Pileg)
																</option>

															</select>
														</div>
														<div class="selector_overlay" id="container-pilpres-Hunter" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilpresHunter">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilpresHunter">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilgub-Hunter" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilgubHunter">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilgubHunter">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilkada-Hunter" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilkadaHunter">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilkadaHunter">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
								<div class="swiper-slide" style="background-image:url(<?= base_url('ui/') ?>images/rbt_9.jpg);">

									<div class="slider-caption" style="padding:10px;">
										<div class="row">
											<div class="col-lg-4">
												<div class="card card-body" style="background-color:RGBA(52,58,64,0.7)">
													<h2 data-swiper-parallax="-100%" class="title--white">Hukum</h2>
													<p data-swiper-parallax="-30%" class="text--white" id="artiHukum">
														Admin Hukum disebut Adkum. Admin ini merupakan admin internal yang mewakili partai/pengguna sistem Rekapitung.
														Adkum bertugas untuk memeriksa dan memverifikasi seluruh data kecurangan yang masuk untuk dibuatkan dokumentasinya dalam rangka proses gugatan hukum perselisihan hasil pemilu.


													</p>
													<div class="form_row">
														<div class="selector_overlay">
															<select data-swiper-parallax="-50%" class="required select-dark" id="jenisHukum">
																<option value="" readonly selected>Pilih Jenis Pemilu</option>
																<option value="pilpres">Pemilu Presiden (Pilpres)</option>
																<option value="pilgub">Pemilu Gubernur (Pilgub)</option>
																<option value="pilkada">
																	Pemilu Bupati / Walikota
																</option>
																<option value="pileg">
																	Pemilu DPR (Pileg)
																</option>

															</select>
														</div>
														<div class="selector_overlay" id="container-pilpres-Hukum" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilpresHukum">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilpresHukum">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilgub-Hukum" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilgubHukum">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilgubHukum">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilkada-Hukum" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilkadaHukum">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilkadaHukum">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
								<div class="swiper-slide" style="background-image:url(<?= base_url('ui/') ?>images/rbt_7.jpg);">

									<div class="slider-caption" style="padding:10px;">
										<div class="row">
											<div class="col-lg-4">
												<div class="card card-body" style="background-color:RGBA(52,58,64,0.7)">
													<h2 data-swiper-parallax="-100%" class="title--white">Pembayaran Saksi</h2>
													<p data-swiper-parallax="-30%" class="text--white" id="artiPembayaran">
														Admin Pembayaran Saksi disebut Payroll. Admin ini merupakan petugas administrasi untuk melakukan pembayaran kepada saksi yang telah mengirim hasil suara TPS dan telah di verifikasi oleh Verifikator.
													</p>
													<div class="form_row">
														<div class="selector_overlay">
															<select data-swiper-parallax="-50%" class="required select-dark" id="jenisPembayaran">
																<option value="" readonly selected>Pilih Jenis Pemilu</option>
																<option value="pilpres">Pemilu Presiden (Pilpres)</option>
																<option value="pilgub">Pemilu Gubernur (Pilgub)</option>
																<option value="pilkada">
																	Pemilu Bupati / Walikota
																</option>
																<option value="pileg">
																	Pemilu DPR (Pileg)
																</option>

															</select>
														</div>
														<div class="selector_overlay" id="container-pilpres-Pembayaran" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilpresPembayaran">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilpresPembayaran">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilgub-Pembayaran" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilgubPembayaran">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilgubPembayaran">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilkada-Pembayaran" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilkadaPembayaran">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilkadaPembayaran">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
								<div class="swiper-slide" style="background-image:url(<?= base_url('ui/') ?>images/rbt_7.jpg);">
									<div class="slider-caption" style="padding:10px;">
										<div class="row">
											<div class="col-lg-4">
												<div class="card card-body" style="background-color:RGBA(52,58,64,0.7)">
													<h2 data-swiper-parallax="-100%" class="title--white">Human Verification</h2>
													<p data-swiper-parallax="-30%" class="text--white" id="artiHumanVerif">
														Admin Human Verification adalah admin setingkat Administrator yang bertugas untuk Memeriksa ,
														menyetujui dan menolak semua jenis admin di bawahnya, seperti saksi dan semua admin di Rekapitung.
														Human Verification juga bertanggung jawab atas koreksi hasil perhitungan suara pada TPS yang terjadi kesalahan input.
													</p>
													<div class="form_row">
														<div class="selector_overlay">
															<select data-swiper-parallax="-50%" class="required select-dark" id="jenisHumanVerif">
																<option value="" readonly selected>Pilih Jenis Pemilu</option>
																<option value="pilpres">Pemilu Presiden (Pilpres)</option>
																<option value="pilgub">Pemilu Gubernur (Pilgub)</option>
																<option value="pilkada">
																	Pemilu Bupati / Walikota
																</option>
																<option value="pileg">
																	Pemilu DPR (Pileg)
																</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilpres-HumanVerif" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilpresHumanVerif">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilpresHumanVerif">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilgub-HumanVerif" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilgubHumanVerif">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilgubHumanVerif">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>
														<div class="selector_overlay" id="container-pilkada-HumanVerif" style="display:none">
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="ProvinsiPilkadaHumanVerif">
																<option value="" readonly selected>Pilih Provinsi</option>
																<?php
																foreach ($provinsi as $data) {
																	echo '<option value="' . $data->id_prov . '|' . $data->subdomain . '">' . $data->nama . '</option>';
																}
																?>
															</select>
															<select data-swiper-parallax="-50%" class="required select-dark" style="border:1px solid white !important" id="KotaPilkadaHumanVerif">
																<option value="" readonly selected>Pilih kota / Kabupaten</option>
															</select>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>


							</div>

						</div>
					</div>
					<div class="swiper-pagination"></div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>

				<!-- <div class="swiper-container-toolbar swiper-toolbar">
					<div class="swiper-pagination-toolbar"></div>
					<div class="swiper-wrapper">
						<div class="swiper-slide toolbar-icon">
							<a href="#" data-panel="right" class="open-panel"><img src="<?= base_url('ui/') ?>images/icons/blue/user.png" alt="" title="" /></a>
							<a href="shop.html"><img src="<?= base_url('ui/') ?>images/icons/blue/shop.png" alt="" title="" /></a>
							<a href="#" data-popup=".popup-social" class="open-popup"><img src="<?= base_url('ui/') ?>images/icons/blue/twitter.png" alt="" title="" /></a>
							<a href="photos.html"><img src="<?= base_url('ui/') ?>images/icons/blue/photos.png" alt="" title="" /></a>
							<a href="contact.html"><img src="<?= base_url('ui/') ?>images/icons/blue/contact.png" alt="" title="" /></a>
						</div>
						<div class="swiper-slide toolbar-icon">
							<a href="features.html"><img src="<?= base_url('ui/') ?>images/icons/blue/features.png" alt="" title="" /></a>
							<a href="music.html"><img src="<?= base_url('ui/') ?>images/icons/blue/music.png" alt="" title="" /></a>
							<a href="#" data-popup=".popup-login" class="open-popup"><img src="<?= base_url('ui/') ?>images/icons/blue/lock.png" alt="" title="" /></a>
							<a href="videos.html"><img src="<?= base_url('ui/') ?>images/icons/blue/video.png" alt="" title="" /></a>
							<a href="tel:12345678"><img src="<?= base_url('ui/') ?>images/icons/blue/phone.png" alt="" title="" /></a>
						</div>

					</div>
				</div> -->
			</div>
		</div>
	</div>
	</div>
	</div>