			<div id="checkin" class="checkin_div">
				<h3>Check-In!</h3>
				<form action="<?php echo site_url('checkin/login'); ?>" method="post">
					<table>
					<tr>
					<td><label for="username">Email</label></td><td><input type="text" name="email"></td>
					</tr>
					<tr>
					<td><label for="password">Password</label></td><td><input type="password" name="password"></td>
					</tr>
					<tr>
					<td><label for="code">Code</label></td><td><input type="text" name="code"></td>
					</tr>
					<tr>
					<td></td><td><input type="submit" class="btn primary" value="Check-In!"></td>
					</tr>
					</table>
				</form>
			</div>