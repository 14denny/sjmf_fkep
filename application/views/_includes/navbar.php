<!-- BEGIN: Header-->
<header class="page-topbar" id="header">
	<div class="navbar navbar-fixed">
		<nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-light-blue-cyan">
			<div class="nav-wrapper">
				<ul class="left">
					<li>
						<h1 class="logo-wrapper"><a class="brand-logo darken-1" href="<?= base_url('index') ?>"><img src="<?php echo base_url('assets/app-assets/images/logo/materialize-logo.png') ?>" alt="materialize logo">
						<span class="logo-text hide-on-med-and-down">SJMF Keperawatan</span>
					</a></h1>
					</li>
				</ul>
				<div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
					<input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Pencarian" data-search="template-list">
					<ul class="search-list collection display-none"></ul>
				</div>
				<ul class="navbar-list right">
					<li>
						<a href="javascript:void(0);" style="font-weight: bolder">Hai, Denny Syaputra Pus</a>
					</li>

					<li>
						<a href="#" style="font-weight: bolder">Logout</a>
					</li>
				</ul>
			</div>
			<nav class="display-none search-sm">
				<div class="nav-wrapper">
					<form id="navbarForm">
						<div class="input-field search-input-sm">
							<input class="search-box-sm" type="search" required="" id="search" placeholder="Pencarian" data-search="template-list">
							<label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
							<ul class="search-list collection search-list-sm display-none"></ul>
						</div>
					</form>
				</div>
			</nav>
		</nav>

		<!-- BEGIN: Horizontal nav start-->
		<nav class="white hide-on-med-and-down" id="horizontal-nav">
			<div class="nav-wrapper">
				<ul class="left hide-on-med-and-down" id="ul-horizontal-nav" data-menu="menu-navigation">
					<!-- AWAL BERANDA-->
					<li><a class="bold ls_index" href="<?= base_url('index') ?>" data-target="DashboardDropdown"><i class="material-icons">home</i><span><span class="dropdown-title" data-i18n="Beranda">Beranda</span></span></a>
					</li>

					<!-- AWAL TENTANG-->
					<li><a class="dropdown-menu ls_tentang_edit_visi_misi ls_tentang_kebijakan_mutu ls_tentang_kegiatan ls_tentang_program_sasaran ls_tentang_sk_rektor ls_tentang_struktur_organisasi ls_tentang_visi_misi ls_tentang_edit_struktur_organisasi" href="Javascript:void(0)" data-target="TemplatesDropdown"><i class="material-icons">info</i><span><span class="dropdown-title" data-i18n="Templates">Tentang Kami</span><i class="material-icons right">keyboard_arrow_down</i></span></a>
						<ul class="dropdown-content dropdown-horizontal-list" id="TemplatesDropdown">
							<li class="ls_tentang_visi_misi ls_tentang_edit_visi_misi" data-menu=""><a href="<?= base_url('tentang/visi') ?>"><span data-i18n="Visi, Misi, & Tujuan">Visi, Misi & Tujuan</span></a>
							</li>
							<li class="ls_tentang_struktur_organisasi ls_tentang_edit_struktur_organisasi" data-menu=""><a href="<?= base_url('tentang/struktur') ?>"><span data-i18n="Struktur Organisasi & Tupoksi">Struktur Organisasi & Tupoksi</span></a>
							</li>
							<li class="ls_tentang_program_sasaran" data-menu=""><a href="<?= base_url('tentang/program') ?>"><span data-i18n="Program dan Sasaran">Program dan Sasaran</span></a>
							</li>
							<li class="ls_tentang_kegiatan" data-menu=""><a href="<?= base_url('tentang/kegiatan') ?>"><span data-i18n="Kegiatan">Kegiatan</span></a>
							</li>
							<li class="ls_tentang_sk_rektor" data-menu=""><a href="<?= base_url('tentang/sk_rektor') ?>"><span data-i18n="SK Rektor Terkait BPMA">SK Rektor Terkait SJMF</span></a>
							</li>
							<li class="ls_tentang_kebijakan_mutu" data-menu=""><a href="<?= base_url('tentang/kebijakan_mutu') ?>"><span data-i18n="Kebijakan Mutu">Kebijakan Mutu</span></a>
							</li>
						</ul>
					</li>

					<!-- AWAL PENGURUS SJMF FKEP-->
					<li><a class="bold ls_pengurus" href="<?= base_url('pengurus') ?>" data-target="DashboardDropdown"><i class="material-icons">people</i><span><span class="dropdown-title" data-i18n="Pengelola SJMF">Pengurus SJMF</span></span></a>
					</li>

					<!-- AWAL SURVEY-->
					<li><a class="dropdown-menu ls_survey_survey_kemudahan ls_survey_survey_perkuliahan ls_survey_hasil_survey" href="Javascript:void(0)" data-target="surveyDropdown"><i class="material-icons">folder_open</i><span><span class="dropdown-title" data-i18n="Survey">Survey</span><i class="material-icons right">keyboard_arrow_down</i></span></a>
						<ul class="dropdown-content dropdown-horizontal-list" id="surveyDropdown">
							<li class="ls_survey_survey_kemudahan" data-menu=""><a href="<?= base_url('survey/kemudahan') ?>"><span data-i18n="Survey Kemudahan dan Kelengkapan Informasi Web">Survey Kemudahan dan Kelengkapan Informasi Web</span></a>
							</li>
							<li class="ls_survey_survey_perkuliahan" data-menu=""><a href="<?= base_url('survey/perkuliahan') ?>"><span data-i18n="Survey Perkuliahan">Survey Perkuliahan</span></a>
							</li>
<<<<<<< HEAD
							<li class="ls_survey_hasil_survey" data-menu=""><a href="<?= base_url('survey/hasil') ?>"><span data-i18n="Hasil Survey">Hasil Survey</span></a>
=======
							<li class="ls_survey_hasil_survey" data-menu=""><a href="<?= base_url('survey/hasil') ?>"><span data-i18n="Survey Hasil">Hasil Survey</span></a>
>>>>>>> f7e85aca729890d8cc425cb24f93e9d889008d4a
							</li>
						</ul>
					</li>

					<!-- AWAL PRODUK-->
					<!-- <li><a class="bold ls_produk" href="<?= base_url('produk') ?>" data-target="DashboardDropdown"><i class="material-icons">weekend</i><span><span class="dropdown-title" data-i18n="Produk">Produk</span></span></a>
					</li> -->

					<!-- AWAL AKREDITASI-->
					<li><a class="bold ls_akreditasi ls_edit_akreditasi" href="<?= base_url('akreditasi') ?>" data-target="DashboardDropdown"><i class="material-icons">check</i><span><span class="dropdown-title" data-i18n="Akreditasi">Akreditasi</span></span></a>
					</li>

					<!-- AWAL DOWNLOAD-->
					<li><a class="bold ls_download" href="<?= base_url('download') ?>" data-target="DashboardDropdown"><i class="material-icons">file_download</i><span><span class="dropdown-title" data-i18n="Download">Dokumen</span></span></a>
					</li>

					<!-- AWAL GALERI FOTO-->
					<li><a class="bold ls_galeri_foto" href="<?= base_url('galeri') ?>" data-target="DashboardDropdown"><i class="material-icons">monochrome_photos</i><span><span class="dropdown-title" data-i18n="Galeri Foto">Galeri Foto</span></span></a>
					</li>

					<!-- AWAL KONTAK-->
					<li><a class="bold ls_kontak" href="<?= base_url('kontak') ?>" data-target="DashboardDropdown"><i class="material-icons">contact_phone</i><span><span class="dropdown-title" data-i18n="Kontak">Kontak</span></span></a>
					</li>
				</ul>
			</div>
			<!-- END: Horizontal nav start-->
		</nav>
	</div>
</header>
<!-- END: Header-->
