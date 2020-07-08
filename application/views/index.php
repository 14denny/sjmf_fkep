<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/app-assets/vendors/quill/quill.snow.css') ?>">

<div class="blue lighten-4">
	<marquee><span style="color:rgba(0,0,0,1)"><?php echo $marquee ?></span></marquee>
</div>
<?php if ($this->AdminMdl->isLoggedIn()) { ?>
	<button class="btn waves-effect waves-light cyan float-right modal-trigger" href="#modal-edit"><i class="material-icons left">edit</i></button>
<?php } ?>

<!-- BEGIN: Page Main-->
<div id="main">
	<div class="row">
		<div class="col s12">
			<div class="container">
				<div class="section">
					<!-- INI BATAS AWAL SLIDER -->
					<div class="row">
						<?php if ($this->AdminMdl->isLoggedIn()) { ?>
							<p style="text-align: right; margin-right: 20px">
								<a href="<?php echo base_url('index/edit_slider') ?>"><button class="btn waves-effect waves-light cyan"><i class="material-icons left">edit</i>Edit Gambar</button></a>
							</p>
						<?php } ?>
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

				<div class="container" style="padding-top: 20px; padding-bottom: 20px">
					<div class="col s9">
						<div class="card">
							<div class="card-content">
								<?php if ($this->AdminMdl->isLoggedIn()) { ?>
									<p style="text-align: right;">
										<a href="<?php echo base_url('index/edit_beranda') ?>"><button class="btn waves-effect waves-light cyan"><i class="material-icons left">edit</i>Edit Konten</button></a>
									</p>
								<?php } ?>
								<div class="row ql-editor" style="white-space: normal;">
									<?php echo $konten ?>
								</div>
							</div>
						</div>
					</div>

					<!--DISINI AWAL AGENDA-->
					<div class="col s12 m12 l3 hide-on-med-and-down">
						<div class="row">
							<div class="col s12">
								<h6>Agenda</h6>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col s2 mt-2 pr-0 circle">
								<a href="#"><img class="responsive-img circle" height="10px" src="<?php echo base_url("assets/app-assets/images/icon/calendar.png") ?>" alt=""></a>
							</div>
							<div class="col s9">
								<a href="#">
									<p class="m-0">UTBK 2020</p>
								</a>
								<p class="m-0 grey-text lighten-3">5 Juli 2020</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col s2 mt-2 pr-0 circle">
								<a href="#"><img class="responsive-img circle" height="10px" src="<?php echo base_url("assets/app-assets/images/icon/calendar.png") ?>" alt=""></a>
							</div>
							<div class="col s9">
								<a href="#">
									<p class="m-0">Lebaran Idul Adha</p>
								</a>
								<p class="m-0 grey-text lighten-3">31 Juli 2020</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col s2 mt-2 pr-0 circle">
								<a href="#"><img class="responsive-img circle" height="10px" src="<?php echo base_url("assets/app-assets/images/icon/calendar.png") ?>" alt=""></a>
							</div>
							<div class="col s9">
								<a href="#">
									<p class="m-0">Fakultas Keperawatan</p>
								</a>
								<p class="m-0 grey-text lighten-3">1 Agustus 2020</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col s2 mt-2 pr-0 circle">
								<a href="#"><img class="responsive-img circle" height="10px" src="<?php echo base_url("assets/app-assets/images/icon/calendar.png") ?>" alt=""></a>
							</div>
							<div class="col s9">
								<a href="#">
									<p class="m-0">Wisuda Unsyiah</p>
								</a>
								<p class="m-0 grey-text lighten-3">11-12 Agustus 2020</p>
							</div>
						</div>
						<p style="text-align: right;">
							<a href="<?php echo base_url('index/edit_agenda') ?>">
								<button class="btn waves-effect waves-light cyan left"><i class="material-icons left">edit</i>Edit Agenda
								</button>
							</a>
						</p>
					</div>
				</div>
				<!--DISINI AKHIR AGENDA-->

				<!--DISINI AWAL BERITA-->
				<div id="card-reveal" class="section">
					<h5><i class="material-icons left">trending_up</i>Berita Terkini</h5>
					<div class="row">
						<div class="col s12 m6 l4">
							<div class="card">
								<div class="card-image waves-effect waves-block waves-light">
									<img class="activator" src="<?php echo base_url("assets/app-assets/images/gallery/corona.jpg") ?>" alt="" />
								</div>
								<div class="card-content">
									<span class="card-title activator grey-text text-darken-4" id="readMore">Bahaya Covid-19 <i class="material-icons right">more_vert</i>
									</span>
									<p><i class="material-icons left" style="margin-right: 5px; color: #7885d2">date_range</i>7 Juli 2020</p>
								</div>
								<div class="card-reveal">
									<span class="card-title grey-text text-darken-4">Bahaya Covid-19 <i class="material-icons right">close</i>
									</span>
									<p>Hindari keramaian dan jaga jarak.</p>
								</div>
								<div class="card-action">
									<a class="waves-effect btn-flat" style="padding-right: 5px; padding-left: 5px"><i class="material-icons right" style="margin-left: 3px">navigate_next</i>Read More</a>
								</div>
							</div>
						</div>

						<div class="col s12 m6 l4">
							<div class="card">
								<div class="card-image waves-effect waves-block waves-light">
									<img class="activator" src="<?php echo base_url("assets/app-assets/images/gallery/corona.jpg") ?>" alt="" />
								</div>
								<div class="card-content">
									<span class="card-title activator grey-text text-darken-4">Awas Corona Virus <i class="material-icons right">more_vert</i>
									</span>
									<p><i class="material-icons left" style="margin-right: 5px; color: #7885d2">date_range</i>7 Juli 2020</p>
								</div>
								<div class="card-reveal">
									<span class="card-title grey-text text-darken-4">Awas Corona Virus <i class="material-icons right">close</i>
									</span>
									<p>Corona Virus menyerang paru-paru.</p>
								</div>
								<div class="card-action">
									<a class="waves-effect btn-flat" style="padding-right: 5px; padding-left: 5px"><i class="material-icons right" style="margin-left: 3px">navigate_next</i>Read More</a>
								</div>
							</div>
						</div>

						<div class="col s12 m6 l4">
							<div class="card">
								<div class="card-image waves-effect waves-block waves-light">
									<img class="activator" src="<?php echo base_url("assets/app-assets/images/gallery/corona.jpg") ?>" alt="" />
								</div>
								<div class="card-content">
									<span class="card-title activator grey-text text-darken-4">Lindungi diri Anda dari Corona Virus <i class="material-icons right">more_vert</i>
									</span>
									<p><i class="material-icons left" style="margin-right: 5px; color: #7885d2">date_range</i>7 Juli 2020</p>
								</div>
								<div class="card-reveal">
									<span class="card-title grey-text text-darken-4">Lindungi diri Anda dari Corona Virus <i class="material-icons right">close</i>
									</span>
									<p>Lindungi diri Anda dengan memakai masker.</p>
								</div>
								<div class="card-action">
									<a href="#readMore" class="waves-effect btn-flat" style="padding-right: 5px; padding-left: 5px"><i class="material-icons right" style="margin-left: 3px">navigate_next</i>Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="divider mt-2"></div>
			</div>
		</div>
		<div class="content-overlay"></div>
	</div>
</div>
</div>
<!-- END: Page Main-->
<div id="modal-edit" class="modal bottom-sheet">
	<div class="modal-content">
		<h6>Edit Teks Berjalan</h6>
		<div class="row">
			<div class="col s12">
				<div id="snow-wrapper">
					<div id="snow-container">
						<div class="editor">
							<?php echo $marquee ?>
						</div>
					</div>
				</div>
				<br>&nbsp;
				<button class="btn right waves-effect waves-light cyan" id="submit">Selesai</button>
			</div>
		</div>
	</div>
</div>


<form style="display: none;" id="form_submit" action="<?php echo base_url('index/submit_marquee') ?>" method="post">
	<input id="input_isi" type="text" name="isi" value="">
</form>

<script>
	$(document).ready(function() {
		////////////////////////// Load Page Script //////////////////////////
		$('<link/>', {
			rel: 'stylesheet',
			type: 'text/css',
			src: '<?php echo base_url('assets/app-assets/vendors/quill/monokai-sublime.min.css') ?>'
		}).appendTo('head');
		$('<link/>', {
			rel: 'stylesheet',
			type: 'text/css',
			src: '<?php echo base_url('assets/app-assets/vendors/quill/quill.snow.css') ?>'
		}).appendTo('head');

		$('<script/>', {
			type: 'text/javascript',
			src: '<?php echo base_url('assets/app-assets/vendors/quill/highlight.min.js') ?>'
		}).appendTo('head');
		$('<script/>', {
			type: 'text/javascript',
			src: '<?php echo base_url('assets/app-assets/vendors/quill/quill.min.js') ?>'
		}).appendTo('head');

		//inisialization of modal
		$('.modal').modal();

		// Editor
		var editor = new Quill('#snow-container .editor', {
			bounds: '#snow-container .editor',
			modules: {
				'toolbar': [
					['link']
				]
			},
			theme: 'snow'
		});

		// add browser default class to quill select 
		var quillSelect = $("select[class^='ql-'], input[data-link]");
		quillSelect.addClass("browser-default");


		//handler untuk tombol submit
		$("#submit").click(function() {
			if (!confirm("Anda yakin telah selesai melakukan perubahan?")) {
				return;
			}

			let data = editor.root.innerHTML;

			$("#input_isi").val(data);
			$("#form_submit").submit();
		})
	})
</script>