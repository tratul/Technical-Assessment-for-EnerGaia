<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
		<h2>Product Details</h2>
		<a href="{{route('supplier.index')}}">Back</a> | 
		<a href="{{route('logout.index')}}"> Logout</a> 
		<table>
			<tr>
				<td>Product Name:</td>
				<td>{{$product->name}}</td>
			</tr>
			<tr>
				<td>Product Quantity:</td>
				<td>{{$product->quantity}}</td>
			</tr>
			<tr>
				<td>Product Price:</td>
				<td>{{$product->price}}</td>
			</tr>
		</table>
		<h3>Are you sure? </h3>
		<form method="post">
		{{csrf_field()}}
			<input type="hidden" name="id" value="{{$product->id}}">
			<input type="submit" name="submit" value="Confirm"/>
		</form>
		
</body>
</html>
