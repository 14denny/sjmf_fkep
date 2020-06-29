<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-fixed hide-on-large-only">
	<div class="brand-sidebar sidenav-light"></div>
	<ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed hide-on-large-only menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
		<li class="navigation-header"><a class="navigation-header-text">SJMF FKEP</a><i class="navigation-header-icon material-icons">more_horiz</i>
		</li>

		<!-- AWAL BERANDA -->
		<li><a class="waves-effect waves-cyan" href="<?= base_url('index') ?>" data-target="DashboardDropdown"><i class="material-icons">home</i><span><span class="menu-title" data-i18n="Beranda">Beranda</span></span></a>
		</li>

		<!-- AWAL TENTANG KAMI -->
		<li class=" bold"><a class="collapsible-header waves-effect waves-cyan" href="Javascript:void(0)"><i class="material-icons">info</i><span class="dropdown-title downsized" data-i18n="Tentang Kami">Tentang Kami</span></a>
			<div class="collapsible-body">
				<ul class="collapsible collapsible-sub" data-collapsible="accordion">
					<li><a class="" href="<?= base_url('tentang/visi_misi') ?>"><i class="material-icons">done_all</i><span class="downsized" data-i18n="Visi, Misi, & Tujuan">Visi, Misi, & Tujuan</span></a>
					</li>
					<li><a class="" href="<?= base_url('tentang/struktur_organisasi') ?>"><i class="material-icons">people_outline</i><span class="downsized" data-i18n="Struktur Organisasi & Tupoksi">Struktur Organisasi & Tupoksi</span></a>
					</li>
					<li><a class="" href="<?= base_url('tentang/program_sasaran') ?>"><i class="material-icons">playlist_add_check</i><span class="downsized" data-i18n="Program dan Sasaran">Program dan Sasaran</span></a>
					</li>
					<li><a class="" href="<?= base_url('tentang/kegiatan') ?>"><i class="material-icons">directions_bike</i><span class="downsized" data-i18n="Kegiatan">Kegiatan</span></a>
					</li>
					<li><a class="" href="<?= base_url('tentang/sk_rektor') ?>"><i class="material-icons">import_contacts</i><span class="downsized" data-i18n="SK Rektor Terkait BPMA">SK Rektor Terkait BPMA</span></a>
					</li>
					<li><a class="" href="<?= base_url('tentang/kebijakan_mutu') ?>"><i class="material-icons">check</i><span class="downsized" data-i18n="Kebijakan Mutu">Kebijakan Mutu</span></a>
					</li>
				</ul>
			</div>
		</li>

		<!-- AWAL PENGURUS SJMF FKEP -->
		<li><a class="waves-effect waves-cyan " href="<?= base_url('pengurus') ?>" data-target="DashboardDropdown"><i class="material-icons">people</i><span><span class="dropdown-title" data-i18n="Pengurus BPMA UI">Pengurus SJMF FKEP</span></span></a>
		</li>

		<!-- AWAL SURVEY -->
		<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="Javascript:void(0)"><i class="material-icons">folder_open</i><span class="dropdown-title downsized" data-i18n="Survey">Survey</span></a>
			<div class="collapsible-body">
				<ul class="collapsible collapsible-sub" data-collapsible="accordion">
					<li><a class="" href=""><i class="material-icons">mood</i><span class="downsized" data-i18n="Survey Kemudahan dan Kelengkapan Informasi Web">Survey Kemudahan Informasi Web</span></a>
					</li>
					<li><a class="" href=""><i class="material-icons">school</i><span class="downsized" data-i18n="Survey Perkuliahan">Survey Perkuliahan</span></a>
					</li>
					<li><a class="" href=""><i class="material-icons">check_circle</i><span class="downsized" data-i18n="Hasil Survey">Hasil Survey</span></a>
					</li>
				</ul>
			</div>
		</li>

		<!-- AWAL PRODUK -->
		<li><a class="waves-effect waves-cyan " href="<?= base_url('produk') ?>" data-target="DashboardDropdown"><i class="material-icons">weekend</i><span><span class="dropdown-title" data-i18n="Produk">Produk</span></span></a>
		</li>

		<!-- AWAL AKREDITASI -->
		<li><a class="waves-effect waves-cyan " href="<?= base_url('akreditasi') ?>" data-target="DashboardDropdown"><i class="material-icons">check</i><span><span class="dropdown-title" data-i18n="Akreditasi">Akreditasi</span></span></a>
		</li>

		<!-- AWAL DOWNLOAD -->
		<li><a class="waves-effect waves-cyan " href="<?= base_url('download') ?>" data-target="DashboardDropdown"><i class="material-icons">file_download</i><span><span class="dropdown-title" data-i18n="Download">Download</span></span></a>
		</li>

		<!-- AWAL GALERI FOTO -->
		<li><a class="waves-effect waves-cyan " href="<?= base_url('galeri_foto') ?>" data-target="DashboardDropdown"><i class="material-icons">monochrome_photos</i><span><span class="dropdown-title" data-i18n="Galeri Foto">Galeri Foto</span></span></a>
		</li>

		<!-- AWAL KONTAK -->
		<li><a class="waves-effect waves-cyan " href="<?= base_url('kontak') ?>" data-target="DashboardDropdown"><i class="material-icons">contact_phone</i><span><span class="dropdown-title" data-i18n="Kontak">Kontak</span></span></a>
		</li>
	</ul>
	<div class="navigation-background"></div><a class="sidenav-trigger btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->
