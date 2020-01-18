<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
		<h2>Add New Product</h2>
		<a href="<?php echo e(route('supplier.index')); ?>">Back</a> | 
		<a href="<?php echo e(route('logout.index')); ?>"> Logout</a> 

		<form method="post">
			<?php echo e(csrf_field()); ?>

			<table>
				<tr>
					<td>Product Name:</td>
					<td><input type="text" name="name" value="<?php echo e(old('name')); ?>" /></td>
				</tr>
				<tr>
					<td>Product Quantity:</td>
					<td><input type="text" name="quantity" value="<?php echo e(old('quantity')); ?>" /></td>
				</tr>
				<tr>
					<td>Product Price:</td>
					<td><input type="text" name="price"/></td>
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