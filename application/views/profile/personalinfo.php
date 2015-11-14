<?php 

	$formOpenAttr = array('class' => 'form-horizontal');
	$formEmailAttr = array('class' => 'form-control',
								 'type' => 'email',
								 'name' => 'email',
								 'value' => $profile['email_address']);
	$formFirstNameAttr = array('class' => 'form-control',
								 'type' => 'text',
								 'name' => 'firstName',
								 'value' => $profile['first_name']);
	$formLastNameAttr = array('class' => 'form-control',
								 'type' => 'text',
								 'name' => 'lastName',
								 'value' => $profile['last_name']);
	$formCellAttr = array('class' => 'form-control',
								 'type' => 'text',
								 'name' => 'lastName',
								 'value' => $profile['cell_number']);;
	$formSbmtAttr = array('class' => 'btn btn-default',
								 'type' => 'submit',
								 'name' => 'submit',
								 'value' => 'Submit yo Stuff');
	echo form_open('profile/editPersonal', $formOpenAttr);
?>
<!-- <form class="form-horizontal"> -->
<div class="row">
		<div class="col-lg-6">
			<fieldset>
				<legend>Account number: <?php echo $profile['user_id'] * 19880611; ?></legend>
				<div class="form-group">
					<label for="inputEmail" class="col-lg-2 control-label">Email</label>
					<div class="col-lg-10">
						<!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
						<?php 
							echo form_input($formEmailAttr);
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputFirstName" class="col-lg-2 control-label">First Name</label>
					<div class="col-lg-10">
						<!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
						<?php 
							echo form_input($formFirstNameAttr);
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputLastName" class="col-lg-2 control-label">Last Name</label>
					<div class="col-lg-10">
						<!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
						<?php 
							echo form_input($formLastNameAttr);
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputCellNum" class="col-lg-2 control-label">Cell Number</label>
					<div class="col-lg-10">
						<!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
						<?php 
							echo form_input($formCellAttr);
						?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<button type="submit" class="btn btn-primary">Edit</button>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>