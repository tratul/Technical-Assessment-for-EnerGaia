<!DOCTYPE html>
<html>
<head>
	<title>Supplier</title>
</head>
<body>
	<h2>List of Products</h2>
	<a href="<?php echo e(route('supplier.create')); ?>"> Add New Product</a> |
	<a href="<?php echo e(route('logout.index')); ?>"> Logout</a> 

	<ul>
		<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><a href="<?php echo e(route('supplier.show', [$product->id])); ?>"> <?php echo e($product->name); ?> | <?php echo e($product->quantity); ?> | <?php echo e($product->price); ?></a></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</body>
</html>