<!-- Sidebar -->
<?php include Kohana::find_file('views', 'admin/setsidebar'); ?>
<!--end-->

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">User</h1>
    <div class="col-xs-12 col-md-8">
	<div class="table-responsive">
	    <table class="table table-hover">
		<thead>
		    <tr>
			<th>Username</th>
			<th>Email</th>
			<th>Login</th>
			<th>Last Login</th>
		    </tr>
		</thead>
		<tbody>
		    <?php foreach ($user as $v)
		    { ?>
		    <tr>
			<td><?php echo $v->username; ?></td>
			<td><?php echo $v->email; ?></td>
			<td><?php echo $v->logins; ?></td>
			<td><?php echo date('d M Y H:i:s', $v->last_login); ?></td>
		    </tr>
		    <?php } ?>
		</tbody>
	    </table>
	</div>
	
    </div>    
</div>
