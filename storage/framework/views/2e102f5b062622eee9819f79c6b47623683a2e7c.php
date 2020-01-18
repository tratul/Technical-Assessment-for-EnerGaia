<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
		<h2>Register New Employe</h2>
		<a href="<?php echo e(route('account.index')); ?>">Back</a> | 
		<a href="<?php echo e(route('logout.index')); ?>"> Logout</a> 

		<form method="post">
			<?php echo e(csrf_field()); ?>

			<table>
				<tr>
					<td>Employer Name:</td>
					<td><input type="text" name="employerName" value="<?php echo e(old('accNo')); ?>" /></td>
				</tr>
				<tr>
					<td>Company Name:</td>
					<td><input type="text" name="companyName" value="<?php echo e(old('accName')); ?>" /></td>
				</tr>
				<tr>
					<td>Contact No:</td>
					<td><input type="text" name="contact"/></td>
				</tr>
				<tr>
					<td>User Name:</td>
					<td><input type="text" name="username"/></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password"/></td>
				</tr>
				<tr>
					<td>User Type:</td>
					<td><input type="radio" name="usertype" value="Admin"/> Admin</td>
					<td><input type="radio" name="usertype" value="Employe"/> Employe</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Create" /></td>
				</tr>
			</table>
		</form>

		<div>
			<?php if($errors->any()): ?>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php echo e($err); ?> <br>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
		</div>

</body>
</html>