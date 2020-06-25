<!-- BEGIN: Header-->
<header class="page-topbar" id="header">
	<div class="navbar navbar-fixed">
		<nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-light-blue-cyan">
			<div class="nav-wrapper">
				<ul class="left">
					<li>
						<h1 class="logo-wrapper"><a class="brand-logo darken-1" href="<?= base_url('index') ?>"><img src="<?php echo base_url('assets/app-assets/images/logo/materialize-logo.png') ?>" alt="materialize logo"><span class="logo-text hide-on-med-and-down">Materialize</span></a></h1>
					</li>
				</ul>
				<div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
					<input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Pencarian" data-search="template-list">
					<ul class="search-list collection display-none"></ul>
				</div>
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
					<li><a class="bold ls_index" href="<?= base_url('index') ?>" data-target="DashboardDropdown"><i class="material-icons">home</i><span><span class="dropdown-title" data-i18n="Beranda">Beranda</span></span></a>
					</li>
					<li><a class="dropdown-menu" href="Javascript:void(0)" data-target="TemplatesDropdown"><i class="material-icons">info</i><span><span class="dropdown-title" data-i18n="Templates">Tentang Kami</span><i class="material-icons right">keyboard_arrow_down</i></span></a>
						<ul class="dropdown-content dropdown-horizontal-list" id="TemplatesDropdown">
							<li data-menu=""><a href="<?= base_url('tentang/visi_misi') ?>"><span data-i18n="Visi, Misi, & Tujuan">Visi, Misi & Tujuan</span></a>
							</li>
							<li data-menu=""><a href="<?= base_url('tentang/struktur_organisasi') ?>"><span data-i18n="Struktur Organisasi & Tupoksi">Struktur Organisasi & Tupoksi</span></a>
							</li>
							<li data-menu=""><a href="<?= base_url('tentang/program_sasaran') ?>"><span data-i18n="Program dan Sasaran">Program dan Sasaran</span></a>
							</li>
							<li data-menu=""><a href="<?= base_url('tentang/kegiatan') ?>"><span data-i18n="Kegiatan">Kegiatan</span></a>
							</li>
							<li data-menu=""><a href="<?= base_url('tentang/sk_rektor') ?>"><span data-i18n="SK Rektor Terkait BPMA">SK Rektor Terkait SJMF</span></a>
							</li>
							<li data-menu=""><a href="<?= base_url('tentang/kebijakan_mutu') ?>"><span data-i18n="Kebijakan Mutu">Kebijakan Mutu</span></a>
							</li>
						</ul>
					</li>
					<li><a class="bold " href="<?= base_url('pengurus') ?>" data-target="DashboardDropdown"><i class="material-icons">people</i><span><span class="dropdown-title" data-i18n="Pengurus BPMA UI">Pengurus SJMF FKEP</span></span></a>
					</li>
					<li><a class="bold " href="<?= base_url('produk') ?>" data-target="DashboardDropdown"><i class="material-icons">weekend</i><span><span class="dropdown-title" data-i18n="Produk">Produk</span></span></a>
					</li>
					<li><a class="bold " href="<?= base_url('akreditasi') ?>" data-target="DashboardDropdown"><i class="material-icons">check</i><span><span class="dropdown-title" data-i18n="Akreditasi">Akreditasi</span></span></a>
					</li>
					<li><a class="bold " href="<?= base_url('download') ?>" data-target="DashboardDropdown"><i class="material-icons">file_download</i><span><span class="dropdown-title" data-i18n="Download">Download</span></span></a>
					</li>
					<li><a class="bold " href="<?= base_url('galeri_foto') ?>" data-target="DashboardDropdown"><i class="material-icons">monochrome_photos</i><span><span class="dropdown-title" data-i18n="Galeri Foto">Galeri Foto</span></span></a>
					</li>
					<li><a class="bold " href="<?= base_url('kontak') ?>" data-target="DashboardDropdown"><i class="material-icons">contact_phone</i><span><span class="dropdown-title" data-i18n="Kontak">Kontak</span></span></a>
					</li>
				</ul>
			</div>
			<!-- END: Horizontal nav start-->
		</nav>
	</div>
</header>
<!-- END: Header-->
