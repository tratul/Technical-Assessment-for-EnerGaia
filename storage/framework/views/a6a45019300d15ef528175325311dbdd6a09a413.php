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

		<a href="<?php echo e(route('supplier.edit', [$product->id])); ?>">Edit</a> |
		<a href="<?php echo e(route('supplier.delete', [$product->id])); ?>">Delete</a>  
		
</body>
</html>