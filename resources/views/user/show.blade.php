<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
		<h2>Product Details</h2>
		<a href="{{route('user.index')}}">Back</a> | 
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
  
		
</body>
</html>