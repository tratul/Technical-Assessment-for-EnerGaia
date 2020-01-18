<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
		<h2>Product Details</h2>
		<a href="<?php echo e(route('supplier.index')); ?>">Back</a> | 
		<a href="<?php echo e(route('logout.index')); ?>"> Logout</a> 
		<table>
			<tr>
				<td>Product Name:</td>
				<td><?php echo e($product->name); ?></td>
			</tr>
			<tr>
				<td>Product Quantity:</td>
				<td><?php echo e($product->quantity); ?></td>
			</tr>
			<tr>
				<td>Product Price:</td>
				<td><?php echo e($product->price); ?></td>
			</tr>
		</table>
		<h3>Are you sure? </h3>
		<form method="post">
		<?php echo e(csrf_field()); ?>

			<input type="hidden" name="id" value="<?php echo e($product->id); ?>">
			<input type="submit" name="submit" value="Confirm"/>
		</form>
		
</body>
</html>
