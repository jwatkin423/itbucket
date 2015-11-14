<div class="row members-area">
		<div class="col-md-8">
				<ul class="nav nav-pills">
						<li><a href="<?php echo base_url('members'); ?>">Clients</a></li>
						<li class="active"><a href="<?php echo base_url('profile'); ?>">Profile</a></li>
						<li><a href="#">Users</a></li>
						<li><a href="#">Dashboard</a></li>
				</ul>
		</div>
</div>
<div class="row profile-panel">
<div class="col-md-10">
<div class="panel panel-info">
		<div class="panel-heading">
				<h3 class="panel-title">Profile</h3>
		</div>
		<div class="panel-body">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingOne">
			<h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					Profile
				</a>
			</h4>
		</div>
		<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			<div class="panel-body">
				<?php $this->load->view('profile/personalinfo.php'); ?>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingTwo">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					Company Info
				</a>
			</h4>
		</div>
		<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			<div class="panel-body">
				<?php $this->load->view('profile/companyinfo'); ?>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingThree">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					Change Password
				</a>
			</h4>
		</div>
		<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			<div class="panel-body">
				<?php $this->load->view('profile/password'); ?>
			</div>
		</div>
	</div>
</div>
		</div>
</div>
</div>

</div>