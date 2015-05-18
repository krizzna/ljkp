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
	    <h2>Stamping \ New</h2>
	  </div>
	</div>
	<div class="row">
	  <div class="col-xs-9 col-md-6">
	    <a class="btn btn-danger btn-xs" href="#" role="button">Save</a> or <?php echo HTML::anchor('stamping','Discard') ?>
	  </div>
	  <div class="col-xs-9 col-md-6">
	    <span class="pull-right"></span>
	  </div>
	</div>
      </div>
      <!-- FORM -->
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
	    <table id="myTable2" class="table table-bordered">
	      <thead>
		<tr>
		  <th rowspan="3">No</th>
		  <th rowspan="3">Part No./Part Name</th>
		  <th rowspan="3">Urutan Proses</th>
		  <th rowspan="3">Proses</th>
		  <th colspan="3" rowspan="2">Qty Actual/Total Stroke</th>
		  <th colspan="2">Waktu Proses</th>
		  <th rowspan="3">Prod. Time Gross</th>
		  <th rowspan="3">Prod. Time Netto</th>
		  <th colspan="4">Incidential Work</th>
		  <th colspan="7">Waste Work</th>
		  <th colspan="4">Waktu Terencana</th>
		</tr>
		<tr>
		  <th rowspan="2">Start</th>
		  <th rowspan="2">Finish</th>
		  <th colspan="2">Dandori</th>
		  <th colspan="2">Scrap</th>
		  <th colspan="3">Trouble</th>
		  <th colspan="4">Waiting</th>
		  <th rowspan="2">Briefing</th>
		  <th rowspan="2">5S</th>
		  <th rowspan="2">Try Out</th>
		  <th rowspan="2">Line Stop</th>
		</tr>
		<tr>
		  <th>Ok</th>
		  <th>NG</th>
		  <th>Rework</th>
		  <th>DC</th>
		  <th>Sett. OA</th>
		  <th>Ambil</th>
		  <th>Buang</th>
		  <th>Quality</th>
		  <th>Die</th>
		  <th>Electrical</th>
		  <th>Crane</th>
		  <th>Material</th>
		  <th>Pallet</th>
		  <th>Fork</th>
		</tr>
	    </thead>
	    <tbody>
		<tr id="st0">
		  <td>1</td>
		  <td><input type="text" name='part0'  placeholder='Part No' class="form-control"/></td>
		  <td><input type="text" name='up0'  placeholder='Urutan Proses' class="form-control"/></td>
		  <td><input type="text" name='proses0'  placeholder='Proses' class="form-control"/></td>
		  <td><input type="text" name='ok0'  placeholder='Ok' class="form-control"/></td>
		  <td><input type="text" name='ng0'  placeholder='NG' class="form-control"/></td>
		  <td><input type="text" name='rwk0'  placeholder='Rework' class="form-control"/></td>
		  <td><input type="text" name='start0'  placeholder='Start' class="form-control"/></td>
		  <td><input type="text" name='fin0'  placeholder='Finish' class="form-control"/></td>
		  <td><input type="text" name='gross0'  placeholder='Gross' class="form-control"/></td>
		  <td><input type="text" name='netto0'  placeholder='Netto' class="form-control"/></td>
		  <td><input type="text" name='dc0'  placeholder='DC' class="form-control"/></td>
		  <td><input type="text" name='sett0'  placeholder='' class="form-control"/></td>
		  <td><input type="text" name='ambil0'  placeholder='Ambil' class="form-control"/></td>
		  <td><input type="text" name='buang0'  placeholder='Buang' class="form-control"/></td>
		  <td><input type="text" name='qlt0'  placeholder='Quality' class="form-control"/></td>
		  <td><input type="text" name='die0'  placeholder='Die' class="form-control"/></td>
		  <td><input type="text" name='elec0'  placeholder='Electrical' class="form-control"/></td>
		  <td><input type="text" name='crane0'  placeholder='Crane' class="form-control"/></td>
		  <td><input type="text" name='mat0'  placeholder='Matl' class="form-control"/></td>
		  <td><input type="text" name='pal0'  placeholder='Pallet' class="form-control"/></td>
		  <td><input type="text" name='fork0'  placeholder='Fork' class="form-control"/></td>
		  <td><input type="text" name='brief0'  placeholder='Briefing' class="form-control"/></td>
		  <td><input type="text" name='5s0'  placeholder='5s' class="form-control"/></td>
		  <td><input type="text" name='to0'  placeholder='Try out' class="form-control"/></td>
		  <td><input type="text" name='ls0'  placeholder='Line Stop' class="form-control"/></td>
		</tr>
	      </tbody>
	    </table>
	  </div>
	  <a id="add_row2" class="btn btn-default pull-left"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a><a id="delete_row" class="btn btn-default pull-left"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
	</div>
      </div>
    
</div>
