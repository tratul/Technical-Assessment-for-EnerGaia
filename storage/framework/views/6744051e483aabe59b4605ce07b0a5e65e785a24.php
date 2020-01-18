<!DOCTYPE html>
<html>
<head>
	<title>Accounts</title>
</head>
<body>
	<h2>List of Accounts</h2>
	<a href="<?php echo e(route('account.create')); ?>"> Create New Account</a> |
	<a href="<?php echo e(route('logout.index')); ?>"> Logout</a> 

	<ul>
		<?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><a href="<?php echo e(route('account.show', [$acc->id])); ?>"> <?php echo e($acc->employerName); ?> | <?php echo e($acc->companyName); ?> | <?php echo e($acc->contact); ?> | <?php echo e($acc->username); ?> | <?php echo e($acc->usertype); ?></a></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</body>
</html>