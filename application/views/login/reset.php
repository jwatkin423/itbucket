<?php
	// If the user has a request to reset the password
	if (isset($success)) {
		if ($success == "true") {
			$class = "success";
			$alert = "Success,";
			$message = " Your password has been reset";
		} else {
			$class = "warning";
			$alert = "Warning,";
			$message = " Your password has <strong>NOT</strong> been reset";
		}

?>

<div class="col-md-8">
	<div class="alert alert-<?php echo $class; ?>">
		<strong><?php echo $alert; ?></strong> <?php echo $message; ?>
	</div>
</div>

<?php
	} else {
?>
<div class="col-md-8">
	<form method="post" action="<?php echo base_url('login/reset'); ?>">
	<fieldset>
		<legend>Reset Password</legend>
		<label>username</label>
		<input type="text" placeholder="username">
		<span class="help-block">Email address is your username</span>
		<button type="submit" class="btn bt-lg btn-primary">Submit</button>
	</fieldset>
</form>
</div>

<?php
	}
