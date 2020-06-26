<!-- BEGIN: Page Main-->
<div id="main">
	<div class="row">
		<div class="col s12">
			<div class="container">
				<div class="section">
					<!-- INI BATAS AWAL SLIDER -->
					<div class="row">
						<div class="col s12">
							<div class="slider">
								<ul class="slides">
									<?php foreach ($slider_images as $image) { ?>
										<li>
											<img src="<?php echo $image->location ?>"> <!-- random image -->
											<div class="caption <?php echo ($image->posisi == 1 ? 'left' : ($image->posisi == 2 ? 'center' : '')) ?>-align">
												<h3 class="light grey-text text-<?php echo ($image->warna_txt_1 == 0 ? "darken" : "lighten") ?>-3"><?php echo $image->teks_1 ?></h3>
												<h5 class="light grey-text text-<?php echo ($image->warna_txt_2 == 0 ? "darken" : "lighten") ?>-3"><?php echo $image->teks_2 ?></h5>
												<!-- <p class="light grey-text text-darken-3">Pilih menu diatas untuk...</p> -->
											</div>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
					<!-- INI BATAS AKHIR SLIDER -->
				</div>

				<div class="container" style="padding-top: 30px; padding-bottom: 30px">
					<div class="col s8">
						<div class="card">
							<div class="card-content ">
								Pentingnya pengawasan mutu telah diisyaratkan oleh Pemerintah sejak tahun 1990 seperti yang tertera dalam PP No. 30 thn 1990 tentang Pendidikan Tinggi pasal 121. Badan Penjaminan Mutu Akademik (BPMA) merupakan badan internal UI yang berfungsi membangun sistem penjaminan mutu akademik di UI pada setiap aras di UI mulai dari aras program studi, departemen, fakultas hingga direktorat/unit kerja di lingkungan Pusat Administrasi UI. BPMA berawal dari berdirinya Badan Audit Akademik (BAA) yang merupakan salah satu kelengkapan khusus tingkat universitas sebagaimana tertera dalam statuta UI 1992 pasal 21. BAA berdiri pada tahun 2002 melalui surat keputusan Rektor UI Nomor 123/SK/R/UI/2000 yang mengatur tentang Struktur Organisasi dan Tatalaksana Badan Audit Akademik UI.
								<br><br>Namun setelah dilakukan kajian yang mendalam mengenai penjaminan mutu dan audit mutu akademik, serta kewajiban mengemban tugas yang lebih luas, maka disepakati untuk mengubah nama Badan Audit Akademik menjadi Badan Penjaminan Mutu Akademik sejak tahun 2004, melalui SK Rektor UI No. 012/SK/UI/2004 tentang Struktur Pelaksana Penjaminan Mutu Akademik Universitas Indonesia. Fungsi BPMA UI dipertegas dalam Peraturan Pemerintah No. 68 tahun 2013 tentang Statuta UI, Pasal 52 ayat 3 dan 4.
								<br><br>Sistem Penjaminan Mutu Internal UI telah diatur dalam SK Rektor no. 1421/SK/R/UI/2010 tentang Kebijakan Sistem Penjaminan Mutu Akademik di Universitas Indonesia, yang diperbaharui dengan Peraturan Rektor No. 009 Tahun 2016 tentang Sistem Penjaminan Mutu Internal UI.
								<br><br>Dalam rangka meningkatkan kinerja layanan penjaminan mutu, BPMA telah menerapkan Quality Management System, dan memperoleh sertikat ISO 9001:2008 dari PT. DQS Sertification Indonesia pada bulan Februari 2013, dan re-sertifikasi ISO 9001:2015 pada bulan Juli 2018.
							</div>
						</div>
					</div>

					<div class="col s4">
						<div class="card">
							<div class="card-content">
								ini sideview nya
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content-overlay"></div>
		</div>
	</div>
</div>
<!-- END: Page Main-->