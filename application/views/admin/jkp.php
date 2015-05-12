<!-- Sidebar -->
<?php include Kohana::find_file('views', 'admin/setsidebar'); ?>
<!--end-->

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Jam Kerja Produksi</h1>
    <div class="row">
	<div class="col-xs-9 col-md-6">
	    <form class="form-horizontal">
		<div class="form-group">
		    <label for="inputNama" class="col-sm-3">Nama</label>
		    <div class="col-sm-9">
			<input type="text" class="form-control" id="inputNama">
		    </div>
		</div>
		<div class="form-group">
		    <label for="inputJob" class="col-sm-3">Job / Keahlian</label>
		    <div class="col-sm-9">
			<select class="form-control">
			    <option></option>
			    <option>Stamping</option>
			    <option>Shearing</option>
			    <option>Drilling</option>
			</select>
		    </div>
		</div>
		<div class="form-group">
		    <label for="inputGolongan" class="col-sm-3">Golongan</label>
		    <div class="col-sm-9">
			<select class="form-control">
			    <option></option>
			    <option>1</option>
			    <option>2</option>
			    <option>3</option>
			</select>
		    </div>
		</div>
	    </form>
	</div>
	<div class="col-xs-9 col-md-6">
	    <div class="pull-right">
		<button type="button" class="btn btn-primary">Tambah</button>
		<button type="button" class="btn btn-primary">Hapus</button>
		<button type="button" class="btn btn-primary">Cari</button>
	    </div>
	</div>
    </div>
    <div class="row">
	<div class="col-xs-18 col-md-12">
	    <div class="table-responsive">
		<table class="table table-hover">
		    <thead>
			<tr>
			    <th>Tanggal</th>
			    <th>Kd Tanggal</th>
			    <th>Kd Produk</th>
			    <th>Kd Mesin</th>
			    <th>Shift</th>
			    <th>Normal</th>
			    <th>Lembur</th>
			    <th>Uang Shift</th>
			    <th>Tot. Normal</th>
			    <th>Tot. Lembur</th>
			    <th>U. Transfer</th>
			    <th>U. Makan</th>
			    <th>Tot. Mesin</th>
			</tr>
		    </thead>
		    <tbody>
			<tr>
			    <td></td>
			    <td></td>
			    <td></td>
			</tr>
		    </tbody>
		</table>
	    </div>
	</div>
    </div>
</div>
