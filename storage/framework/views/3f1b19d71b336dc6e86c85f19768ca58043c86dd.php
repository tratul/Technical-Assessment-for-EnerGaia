<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
		<form method="post">
			<?php echo e(csrf_field()); ?>


			<fieldset>
				<legend>login</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="uname" value="<?php echo e($name); ?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" value="Submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>

		<div><?php echo e(session('message')); ?></div>
</body>
</html>