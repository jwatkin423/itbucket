<?php
	if (validation_errors()) {
?>

<div class="col-md-8">
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong><?php echo validation_errors(); ?></strong> 
	</div>
</div>

<?php
	}
?>

<?php
	$formOpenAttributes = array('class' => 'pull-right');
	$formEmailAttributes = array('class' => 'form-control',
								 'type' => 'email',
								 'name' => 'email',
								 'placeholder' =>'Email');
	$formPwdAttributes = array('class' => 'form-control',
								 'type' => 'password',
								 'name' => 'password',
								 'placeholder' =>'Password');
	$formSbmtAttributes = array('class' => 'btn btn-default',
								 'type' => 'submit',
								 'name' => 'submit',
								 'value' => 'Submit yo Stuff');
?>
<div class="col-md-6">
<?php
	echo form_open('/login/formValidation', $formOpenAttributes);
?>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
<?php
			echo form_input($formEmailAttributes);
?>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
<?php
			echo form_password($formPwdAttributes);
?>
		</div>
<?php
		echo form_submit($formSbmtAttributes);
		echo form_close();
?>
</div>