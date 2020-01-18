<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
		<h2>Edit Product</h2>
		<a href="{{route('supplier.index')}}">Back</a> | 
		<a href="{{route('logout.index')}}"> Logout</a> 

		<form method="post">
			{{csrf_field()}}

			<input type="hidden" name="id" value="{{$product->id}}">
			<table>
				<tr>
					<td>Product Name:</td>
					<td><input type="text" name="ProductName"  value="{{$product->name}}" /></td>
				</tr>
				<tr>
					<td>Product Quantity:</td>
					<td><input type="text" name="quantity" value="{{$product->quantity}}"/></td>
				</tr>
				<tr>
					<td>Product Price:</td>
					<td><input type="text" name="price" value="{{$product->price}}"/></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update" /></td>
				</tr>
			</table>
		</form>
</body>
</html>