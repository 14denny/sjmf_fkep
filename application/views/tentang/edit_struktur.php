<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/app-assets/vendors/quill/quill.snow.css') ?>">

<!-- AWAL BREADCRUMBS -->
<div class="breadcrumbs-inline pt-2 pb-1" id="breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col s10 m12 l12 breadcrumbs-left">
				<h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>SJMF Fakultas Keperawatan Unsyiah</span>
				</h5>
				<ol class="breadcrumbs mb-0">
					<li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Beranda</a>
					</li>
					<li class="breadcrumb-item"><a href="#">Tentang Kami</a>
					</li>
					<li class="breadcrumb-item"><a href="<?php echo base_url("tentang/struktur") ?>">Struktur Organisasi dan Tupoksi</a>
					</li>
					<li class="breadcrumb-item active">Edit
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- AKHIR BREADCRUMBS -->

<div id="main">
	<div class="row">
		<div class="col s12">
			<div class="container">
				<div class="section">
					<!-- Snow Editor start -->
					<section class="snow-editor">
						<div class="row">
							<div class="col s12">
								<div class="card">
									<div class="card-content">
										<h4 class="card-title">Edit Konten Struktur Organisasi dan Tupoksi</h4>
										<div class="row">
											<button class="float-right mr-1 btn waves-effect waves-light cyan" data-action="result" id="toggle"><i class="material-icons left">remove_red_eye</i>Lihat Hasil</button>
											<div class="col s12 mt-1">
												<div id="snow-wrapper">
													<div id="snow-container">
														<div class="editor">
															<?php echo $konten ?>
														</div>
													</div>
												</div>
												<div id="overview" class="ql-editor" style="display: none; white-space: normal;">
												</div>
												<p><br>
												<button class="btn right waves-effect waves-light cyan" id="submit">Selesai</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			<div class="content-overlay"></div>
		</div>
	</div>
</div>

<form style="display: none;" id="form_submit" action="<?php echo base_url('tentang/submit_struktur') ?>" method="post">
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

		// var Font = Quill.import('formats/font');
		// Font.whitelist = ['sofia', 'slabo', 'roboto', 'inconsolata', 'ubuntu'];
		// Quill.register(Font, true);

		// Editor
		var editor = new Quill('#snow-container .editor', {
			bounds: '#snow-container .editor',
			modules: {
				'toolbar': [
					[{
						'font': []
					}, {
						'size': []
					}],
					['bold', 'italic', 'underline', 'strike'],
					[{
						'color': []
					}, {
						'background': []
					}],
					[{
						'script': 'super'
					}, {
						'script': 'sub'
					}],
					['blockquote', 'code-block'],
					[{
						'list': 'ordered'
					}, {
						'list': 'bullet'
					}, {
						'indent': '-1'
					}, {
						'indent': '+1'
					}],
					['direction', {
						'align': []
					}],
					['link', 'image', 'video', 'formula'],
					['clean']
				]
			},
			theme: 'snow'
		});

		// add browser default class to quill select 
		var quillSelect = $("select[class^='ql-'], input[data-link]");
		quillSelect.addClass("browser-default");

		////////////////////////////// End Load Page Script //////////////////////////////


		//handler untuk tombol lihat hasil
		$("#toggle").click(function() {
			let btn = $(this)
			let hasil = $("#overview")
			let snow_wrapper = $("#snow-wrapper")
			if(btn.data("action") === "result"){ // kalo data-action === result artinya editor yang visible
				//ambil data dari editor dan masukkan ke div overview
				hasil.html(editor.root.innerHTML)
	
				snow_wrapper.slideUp('normal', function() {
					hasil.slideDown()
				})

				btn.data("action", "edit")
				btn.html("<i class='material-icons left'>reply</i>Ubah")
			} else { // kalo data-action === edit (else) artinya overview hasil yang visible
				hasil.slideUp('normal', function() {
					snow_wrapper.slideDown()
				})

				btn.data("action", "result")
				// $(this).html("Lihat Hasil")
				btn.html("<i class='material-icons left'>remove_red_eye</i>Lihat Hasil")
			}
		})

		//handler untuk tombol submit
		$("#submit").click(function(){
			if(!confirm("Anda yakin telah selesai melakukan perubahan?")){
				return;
			}

			let data = editor.root.innerHTML;

			$("#input_isi").val(data);
			$("#form_submit").submit();
		})
	})
</script>
