    <div class="col-sm-3 col-md-2 sidebar">
      <div class="sidebar-logo">
	<img src="../assets/img/logo.png">
      </div>
      <ul class="nav nav-sidebar">
	<li>Shearing Line
	  <ul class="nav nav-sidebar">
	    <li><a href="#">Surat Perintah Kerja</a></li>
	  </ul>
	</li>
	<li></li>
      </ul>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <div class="page-header">
	<div class="row">
	  <div class="col-xs-9 col-md-6">
	    <h2>Shearing \ New</h2>
	  </div>
	</div>
	<div class="row">
	  <div class="col-xs-9 col-md-6">
	    <a class="btn btn-danger btn-xs" href="#" role="button">Save</a> or <?php echo HTML::anchor('shearing','Discard') ?>
	  </div>
	  <div class="col-xs-9 col-md-6">
	    <span class="pull-right"></span>
	  </div>
	</div>
      </div>
      <!-- Form -->
      <form class="form-horizontal">
      <div class="row">
	<div class="col-md-4">
	  <div class="form-group">
	    <label for="nospk" class="col-sm-3 control-label">No SPK:</label>
	    <div class="col-sm-9">
	      <input type="text" class="form-control" id="nospk" placeholder="No SPK">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="tgl" class="col-sm-3 control-label">Tanggal:</label>
	    <div class="col-sm-6">
	      <div class="input-group date">
		<input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
	      </div>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="shift" class="col-sm-3 control-label">Shift:</label>
	    <div class="col-sm-3">
	      <select class="form-control">
		<option>1</option>
		<option>2</option>
		<option>3</option>
	      </select>
	    </div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div class="form-group">
	    <label for="mesin" class="col-sm-3 control-label">Mesin:</label>
	    <div class="col-sm-9">
	      <select class="form-control">
		<option>Mesin 1</option>
		<option>Mesin 2</option>
		<option>Mesin 3</option>
	      </select>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="operator" class="col-sm-3 control-label">Operator:</label>
	    <div class="col-sm-9">
	      <input type="text" class="form-control" id="operator" placeholder="Operator">
	    </div>
	  </div>
	</div>
      </div>
      <div class="row">
	<div class="col-md-12">
	  <div class="table-responsive">
	    <table id="myTable" class="table table-bordered">
	      <thead>
		<tr>
		  <th rowspan="2">No</th>
		  <th rowspan="2">Customer</th>
		  <th rowspan="2">Spec</th>
		  <th>Material Awal</th>
		  <th rowspan="2">Qty</th>
		  <th>Ukuran Potong</th>
		  <th rowspan="2">Qty</th>
		  <th rowspan="2">Man Power</th>
		  <th rowspan="2">Waktu</th>
		  <th colspan="4">Hasil Produksi</th>
		  <th rowspan="2">Keterangan</th>
		</tr>
		<tr>
		  <th>T x L x P</th>
		  <th>T x L x P</th>
		  <th>OK</th>
		  <th>NG</th>
		  <th>Rework</th>
		  <th>Total</th>
		</tr>
	      </thead>
	      <tbody>
		<tr id="isi0">
		  <td>1</td>
		  <td><input type="text" name='cust0'  placeholder='Customer' class="form-control"/></td>
		  <td><input type="text" name='spec0'  placeholder='Spec' class="form-control"/></td>
		  <td><input type="text" name='matawal0'  placeholder='TxLxP' class="form-control"/></td>
		  <td><input type="text" name='qtya0'  placeholder='Qty' class="form-control"/></td>
		  <td><input type="text" name='uk0'  placeholder='TxLxP' class="form-control"/></td>
		  <td><input type="text" name='qtyb0'  placeholder='Qty' class="form-control"/></td>
		  <td><input type="text" name='mp0'  placeholder='MPower' class="form-control"/></td>
		  <td><input type="text" name='wkt0'  placeholder='Waktu' class="form-control"/></td>
		  <td><input type="text" name='ok0'  placeholder='OK' class="form-control"/></td>
		  <td><input type="text" name='ng0'  placeholder='NG' class="form-control"/></td>
		  <td><input type="text" name='rwk0'  placeholder='Rework' class="form-control"/></td>
		  <td><input type="text" name='tot0'  placeholder='Total' class="form-control"/></td>
		  <td><input type="text" name='ket0'  placeholder='Ket' class="form-control"/></td>
		</tr>
	      </tbody>
	    </table>
	  </div>
	<a id="add_row" class="btn btn-default pull-left"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a><a id="del_row" class="btn btn-default pull-left"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
	</div>
      </div>
      </form>
    </div>
