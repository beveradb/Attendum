<div id="header">
	<div class="row">
		<div class="span2">
			<img src="<?php echo base_url(); ?>images/logo.jpg" alt="Attendum" width="80px">
		</div>
		<div class="span12" style="margin-top:40px;">
			<p id="logo_text">Attendum</a>
		</div>
	</div>
	<div id="nav">
		<ul class="breadcrumb">
			<li><a href="<?php echo site_url(); ?>">Home</a> <span class="divider">/</span></li>
			<li><a href="<?php echo site_url('site/about'); ?>">About</a> <span class="divider">/</span></li>
			<?php if($this->session->userdata('logged_in')): ?>
				<li><a href="<?php echo site_url('user/profile'); ?>">Profile</a> <span class="divider">/</span></li>
				<li><a href="<?php echo site_url('user/league'); ?>">League</a> <span class="divider">/</span></li>
				<li><a href="<?php echo site_url('/checkin'); ?>">Check In</a> <span class="divider">/</span></li>
				<?php if($this->session->userdata('admin_rights') > 0): ?>
					<li><a href="<?php echo site_url('admin'); ?>">Admin</a> <span class="divider">/</span></li>
				<?php endif; ?>
				<li><a href="<?php echo site_url('user/logout'); ?>">Logout</a> <span class="divider">/</span></li>
			<?php endif; ?>
		</ul>
	</div>
</div>