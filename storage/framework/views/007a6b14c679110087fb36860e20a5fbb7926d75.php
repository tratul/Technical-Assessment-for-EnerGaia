<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
		<h2>Edit Product</h2>
		<a href="<?php echo e(route('supplier.index')); ?>">Back</a> | 
		<a href="<?php echo e(route('logout.index')); ?>"> Logout</a> 

		<form method="post">
			<?php echo e(csrf_field()); ?>


			<input type="hidden" name="id" value="<?php echo e($product->id); ?>">
			<table>
				<tr>
					<td>Product Name:</td>
					<td><input type="text" name="ProductName"  value="<?php echo e($product->name); ?>" /></td>
				</tr>
				<tr>
					<td>Product Quantity:</td>
					<td><input type="text" name="quantity" value="<?php echo e($product->quantity); ?>"/></td>
				</tr>
				<tr>
					<td>Product Price:</td>
					<td><input type="text" name="price" value="<?php echo e($product->price); ?>"/></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update" /></td>
				</tr>
			</table>
		</form>
</body>
</html>