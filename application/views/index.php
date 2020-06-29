<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/app-assets/vendors/quill/quill.snow.css') ?>">

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
							<a href="<?php echo base_url("index/edit_beranda") ?>"><button class="float-right">Edit</button></a>
							<div class="card-content">
								<div class="row ql-editor">
									<?php echo $konten ?>
								</div>
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