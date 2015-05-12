<!-- Sidebar -->
<?php include Kohana::find_file('views', 'sidebar'); ?>
<!--end-->

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Buat SPK Baru</h1>
    <?php echo Form::open('page/new', array('class' => 'form-horizontal')); ?>
	<div class="form-group">
	    <?php echo Form::label('nospk', 'No SPK:', array('class' => 'col-sm-1 control-label')); ?>
	    <div class="col-sm-3">
		<?php echo Form::input('nospk', '', array('placeholder' => 'No SPK', 'type' => 'text', 'class' => 'form-control', 'id' => 'nospk')); ?>
	    </div>
	</div>
	<div class="form-group">
	    <?php echo Form::label('tanggal', 'Tanggal:', array('class' => 'col-sm-1 control-label')); ?>
	    <div class="col-sm-2">
		<div class="input-group date">
		    <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
		</div>
	    </div>
	</div>
	<div class="form-group">
	    <?php echo Form::label('shift', 'Shift:', array('class' => 'col-sm-1 control-label')); ?>
	    <div class="col-sm-1">
		<select class="form-control">
		    <option>1</option>
		    <option>2</option>
		    <option>3</option>
		</select>
	    </div>
	</div>
	<div class="form-group">
	    <?php echo Form::label('mesin', 'Mesin:', array('class' => 'col-sm-1 control-label')); ?>
	    <div class="col-sm-3">
		<select class="form-control">
		    <option>Mesin 1</option>
		    <option>Mesin 2</option>
		    <option>Mesin 3</option>
		</select>
	    </div>
	</div>
	<div class="form-group">
	    <?php echo Form::label('operator', 'Operator:', array('class' => 'col-sm-1 control-label')); ?>
	    <div class="col-sm-3">
		<?php echo Form::input('operator', '', array('placeholder' => 'Operator', 'type' => 'text', 'class' => 'form-control', 'id' => 'nospk')); ?>
	    </div>
	</div>
	<div class="form-group">
	    <div class="table-responsive">
		<table class="table table-bordered">
		    <thead align="center">
			<tr align="center">
			    <th rowspan="3">part No.</th>
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
			<tr align="center">
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
			<tr align="center">
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
		    <tbody align="center">
			<tr align="center">
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			</tr>
		    </tbody>
		</table>
	    </div>
	    <!-- Button trigger modal -->
	    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" data-backdrop="static"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>

	    <!-- Modal -->
	    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog">
		    <div class="modal-content">
			<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    <h4 class="modal-title" id="myModalLabel">Tambah Kode Mesin</h4>
			</div>
			<div class="modal-body">
			    <form>
				<div class="form-group">
				    <label for="inputKode">Kode Mesin</label>
				    <input type="text" class="form-control" id="inputKode" placeholder="Kode Mesin">
				</div>
				<div class="form-group">
				    <label for="inputMesin">Nama Mesin</label>
				    <input type="text" class="form-control" id="inputMesin" placeholder="Nama Mesin">
				</div>
				<div class="form-group">
				    <label for="inputBiaya">Biaya</label>
				    <input type="text" class="form-control" id="inputBiaya" placeholder="Biaya">
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

	<?php echo Form::submit('create', 'Save', array('class' => 'btn btn-primary')); ?>
    
    <?php echo Form::close(); ?>
    
</div>
