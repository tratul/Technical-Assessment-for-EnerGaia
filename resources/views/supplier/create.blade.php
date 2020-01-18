<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
		<h2>Add New Product</h2>
		<a href="{{route('supplier.index')}}">Back</a> | 
		<a href="{{route('logout.index')}}"> Logout</a> 

		<form method="post">
			{{csrf_field()}}
			<table>
				<tr>
					<td>Product Name:</td>
					<td><input type="text" name="name" value="{{old('name')}}" /></td>
				</tr>
				<tr>
					<td>Product Quantity:</td>
					<td><input type="text" name="quantity" value="{{old('quantity')}}" /></td>
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
			@if($errors->any())
				@foreach($errors->all() as $err)
				{{$err}} <br>
				@endforeach
			@endif
		</div>

</body>
</html>