<!-- Sidebar -->
<?php include Kohana::find_file('views', 'admin/setsidebar'); ?>
<!--end-->

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Daftar Kegiatan</h1>
    <div class="table-responsive">
	<table class="table table-hover">
	    <thead>
		<tr>
		    <th>No</th>
		    <th>Keahlian</th>
		</tr>
	    </thead>
	    <tbody>
		<tr>
		    <td></td>
		    <td></td>
		</tr>
	    </tbody>
	</table>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-backdrop="static">Tambah</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog">
	    <div class="modal-content">
		<div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		    <h4 class="modal-title" id="myModalLabel">Tambah Kode Produk</h4>
		</div>
		<div class="modal-body">
		    <form>
			<div class="form-group">
			    <label for="inputJob">Job / Keahlian</label>
			    <input type="text" class="form-control" id="inputJob" placeholder="Keahlian">
			</div>
		    </form>
		</div>
		<div class="modal-footer">
		    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		    <button type="button" class="btn btn-primary">Save changes</button>
		</div>
	    </div>
	</div>
    </div>
</div>
