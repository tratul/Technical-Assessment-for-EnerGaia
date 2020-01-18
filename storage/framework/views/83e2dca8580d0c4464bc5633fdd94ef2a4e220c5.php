<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
		<h2>Account Details</h2>
		<a href="<?php echo e(route('account.index')); ?>">Back</a> | 
		<a href="<?php echo e(route('logout.index')); ?>"> Logout</a> 
		<table>
			<tr>
				<td>Employee Name:</td>
				<td><?php echo e($account->employerName); ?></td>
			</tr>
			<tr>
				<td>Company Name:</td>
				<td><?php echo e($account->companyName); ?></td>
			</tr>
			<tr>
				<td>Contact No:</td>
				<td><?php echo e($account->contact); ?></td>
			</tr>
			<tr>
				<td>User Name:</td>
				<td><?php echo e($account->username); ?></td>
			</tr>
			<tr>
				<td>User Type:</td>
				<td><?php echo e($account->usertype); ?></td>
			</tr>
		</table>

		<a href="<?php echo e(route('account.edit', [$account->id])); ?>">Edit</a> |
		<a href="<?php echo e(route('account.delete', [$account->id])); ?>">Delete</a>  
		
</body>
</html>