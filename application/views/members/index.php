<div class="row members-area">
	<div class="col-md-8">
		<ul class="nav nav-pills">
			<li class="active"><a href="<?php echo base_url('members'); ?>">Clients</a></li>
			<li><a href="<?php echo base_url('profile'); ?>">Profile</a></li>
			<li><a href="#">Users</a></li>
			<li><a href="#">Dashboard</a></li>
		</ul>
	</div>
</div>
<div class="row client-panel">
<div class="col-md-10">
<div class="alert add-edit-client" id="client_successful">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<div class="inner"></div>
</div>
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Clients</h3>
	</div>
	<div class="panel-body">
	<table class="table table-hover table-striped clients-table">
		<tbody>
			<tr>
				<th>Client</th>
				<th>Address</th>
				<th>Contact Number</th>
				<th>Edit</th>
				<th>View</th>
				<th>Delete</th>
			</tr>
<?php
				foreach ($clients as $client) {
?>
				<tr>
					<td><?php echo $client['client_name']; ?></td>
					<td><?php echo $client['address1']; ?> <?php echo $client['address2']; ?>, <?php echo $client['city']; ?> <?php echo $client['state']; ?></td>
					<td><?php echo $client['num']; ?>
					<td>
						<a href="#myModal" data-toggle="modal" data-id="<?php echo $client['client_number']; ?>" id="<?php echo $client['client_number']; ?>" class="btn btn-success">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true">
							</span>
						</a>
					</td>
					<td>
						<a class="btn btn-warning" href="<?php echo base_url('clients/viewClient?id=' . $client['client_number']); ?>"><span class="glyphicon glyphicon-cog"></span></a>
					</td>
					<td>
						<a class="btn btn-danger" href="<?php echo base_url('clients/delClient?id=' . $client['client_number']); ?>"><span class="glyphicon glyphicon-remove"></span></a>
					</td>
				</tr>
<?php
				}
?>
		</tbody>
	</table>
	</div>
</div>
</div>

</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content per-client">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Full Details</h4>
			</div>
			<div class="modal-body ">
			<div class="row">
	<!-- <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3"> -->
		<form role="form">
			<h2>Client information<!-- <small>It's free and always will be.</small> --></h2>
			<hr class="">
				<?php echo form_open('clients/editByID', $clients_form_info['formOpenAttr']); ?>
			<div class="form-group">
				<label for="client_name" class="control-label">Company Name</label>
				<?php echo form_input($clients_form_info['formClientNameAttr']); ?>
			</div>
			<div class="row">
			<div class="col-xs-10 col-sm-6 col-md-6">
				<div class="form-group">
					<label for="client_address1" class="control-label">Address</label>
					<?php echo form_input($clients_form_info['formAdd1Attr']); ?>
				</div>
			</div>
			<div class="col-xs-10 col-sm-6 col-md-6">
				<div class="form-group">
					<label for="client_address2" class="control-label">Ste/Fl</label>
					<?php echo form_input($clients_form_info['formAdd2Attr']); ?>
				</div>
			</div>
			</div>
			<div class="row">
			<div class="col-xs-10 col-sm-6 col-md-6">
				<div class="form-group">
					<label for="client_city" class="control-label">City</label>
					<?php echo form_input($clients_form_info['formCityAttr']); ?>
				</div>
			</div>
			<div class="col-xs-10 col-sm-6 col-md-6">
				<div class="form-group">
					<label for="client_state" class="control-label">State</label>
					<?php echo form_input($clients_form_info['formStateAttr']); ?>
				</div>
			</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-sm-6 col-md-6">
					<div class="form-group">
						<label for="client_zip" class="control-label">Zip Code</label>
						<?php echo form_input($clients_form_info['formZipAttr']); ?>
					</div>
				</div>
				<div class="col-xs-10 col-sm-6 col-md-6">
					<div class="form-group">
						<label for="client_number" class="control-label">Phone Number</label>
						<?php echo form_input($clients_form_info['formWrkNumAttr']); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-sm-6 col-md-6">
					<div class="form-group">
						<label for="client_cfname" class="control-label">Contact First Name</label>
						<?php echo form_input($clients_form_info['formCFNameAttr']); ?>
					</div>
				</div>
				<div class="col-xs-10 col-sm-6 col-md-6">
					<div class="form-group">
						<label for="client_clname" class="control-label">Contact Last Name</label>
						<?php echo form_input($clients_form_info['formCLNameAttr']); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-sm-6 col-md-6">
					<div class="form-group">
						<label for="client_mlocs" class="control-label">Multiple Locations</label>
						<?php echo form_input($clients_form_info['formMLocsNameAttr']); ?>
					</div>
				</div>
			</div>
			<hr class="">
			<div class="row">
				<div class="col-xs-10 col-md-6">
					<?php //echo form_hidden($clients_form_info['formIdHidden']) ?>
					<input type="hidden" name="client_id" id="client_id" value=""></input>
					<?php echo form_input($clients_form_info['formSbmtAttr']); ?>
				</div>
			</div>
		</form>
	<!-- </div> -->
</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

