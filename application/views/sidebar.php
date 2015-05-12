<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidenav">
	<li class="first"><?php echo HTML::anchor('page/index', 'Overview'); ?></li>
	<li class="divider"></li>
	<li class="second"><a href="#" data-toggle="collapse" data-target="#menuhiji" data-parent="#side-navigation">Surat Perintah Kerja</a>
	    <ul class="collapse" id="menuhiji">
		<li><?php echo HTML::anchor('page/new', 'Buat Baru'); ?></li>
		<li><?php echo HTML::anchor('page/hiji', 'Laporan SPK'); ?></li>
	    </ul>
	</li>
	<li class="divider"></li>
	<li class="third"><a href="#" data-toggle="collapse" data-target="#menudua" data-parent="#side-navigation">Laporan per Line Produksi</a>
	    <ul class="collapse" id="menudua">
		<li><?php echo HTML::anchor('page/hiji', 'Produk Sudah Selesai'); ?></li>
		<li><?php echo HTML::anchor('page/hiji', 'Produk Belum Selesai'); ?></li>
	    </ul>
	</li>
	<li class="divider"></li>
	<li class="fourth"><a href="#" data-toggle="collapse" data-target="#menutilu" data-parent="#side-navigation">Laporan per Karyawan</a>
	    <ul class="collapse" id="menutilu">
		<li><?php echo HTML::anchor('page/hiji', 'Laporan Produk Belum Selesai'); ?></li>
		<li><?php echo HTML::anchor('page/hiji', 'laporan Produk Sudah Selesai'); ?></li>
		<li><?php echo HTML::anchor('page/hiji', 'Laporan Karyawan'); ?></li>
	    </ul>
	</li>
	<li class="divider"></li>
	<li class="fifth"><a href="#" data-toggle="collapse" data-target="#menuopat" data-parent="#side-navigation">Laporan Produk Belum Selesai Pertanggal</a>
	    <ul class="collapse" id="menuopat">
		<li><?php echo HTML::anchor('page/hiji', 'Laporan Jam'); ?></li>
		<li><?php echo HTML::anchor('page/hiji', 'Laporan Per Divisi'); ?></li>
		<li><?php echo HTML::anchor('page/hiji', 'Laporan Upah + Mesin'); ?></li>
		<li><?php echo HTML::anchor('page/hiji', 'Laporan Jam Karyawan'); ?></li>
	    </ul>
	</li>
    </ul>
</div>
