<?php 
	$formOpenAttr = array('class' => 'form-horizontal');
	$formCompNameAttr = array('class' => 'form-control',
								 'type' => 'text',
								 'name' => 'compy_name',
								 'value' => $profile['company_name']);
	$formAdd1Attr = array('class' => 'form-control',
								 'type' => 'text',
								 'name' => 'compy_name',
								 'value' => $profile['address1']);
	$formAdd2Attr = array('class' => 'form-control',
								 'type' => 'text',
								 'name' => 'compy_name',
								 'value' => $profile['address2']);
	$formCityAttr = array('class' => 'form-control',
								 'type' => 'text',
								 'name' => 'compy_name',
								 'value' => $profile['city']);
	$formStateAttr = array('class' => 'form-control',
								 'type' => 'text',
								 'name' => 'compy_name',
								 'value' => $profile['state']);
	$formZipAttr = array('class' => 'form-control',
								 'type' => 'text',
								 'name' => 'compy_name',
								 'value' => $profile['zip']);
	$formWrkNumAttr = array('class' => 'form-control',
								 'type' => 'text',
								 'name' => 'compy_name',
								 'value' => $profile['work_number']);
	$formAltNumAttr = array('class' => 'form-control',
								 'type' => 'text',
								 'name' => 'compy_name',
								 'value' => $profile['alt_number']);
	$formSbmtAttr = array('class' => 'btn btn-default',
								 'type' => 'submit',
								 'name' => 'submit',
								 'value' => 'Submit yo Stuff');
	echo form_open('profile/editCompany', $formOpenAttr);
?>
<!-- <form class="form-horizontal"> -->
<div class="row">
		  <div class="col-lg-6">
			<fieldset>
				<legend>Company Information</legend>
				<div class="form-group">
					<label for="inputEmail" class="col-lg-2 control-label">Company Name</label>
					<div class="col-lg-10">
						<!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
						<?php 
							echo form_input($formCompNameAttr);
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputFirstName" class="col-lg-2 control-label">Address 1</label>
					<div class="col-lg-10">
						<!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
						<?php 
							echo form_input($formAdd1Attr);
						?>
					</div>
				</div>
				<div class="form-group">
				<div class="form-group">
					<label for="inputLastName" class="col-lg-2 control-label">Address 2</label>
					<div class="col-lg-10">
						<!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
						<?php 
							echo form_input($formAdd2Attr);
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputLastName" class="col-lg-2 control-label">City</label>
					<div class="col-lg-10">
						<!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
						<?php 
							echo form_input($formCityAttr);
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputLastName" class="col-lg-2 control-label">State</label>
					<div class="col-lg-10">
						<!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
						<?php 
							echo form_input($formStateAttr);
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputLastName" class="col-lg-2 control-label">Zip</label>
					<div class="col-lg-10">
						<!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
						<?php 
							echo form_input($formZipAttr);
						?>
					</div>
				</div>
					<label for="inputLastName" class="col-lg-2 control-label">Ph No 1</label>
					<div class="col-lg-10">
						<!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
						<?php 
							echo form_input($formWrkNumAttr);
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputLastName" class="col-lg-2 control-label">Ph No 2</label>
					<div class="col-lg-10">
						<!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
						<?php 
							echo form_input($formAltNumAttr);
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