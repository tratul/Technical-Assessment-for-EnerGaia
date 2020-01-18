<!DOCTYPE html>
<html>
<head>
	<title>Supplier</title>
</head>
<body>
	<h2>List of Products</h2>
	<a href="{{route('supplier.create')}}"> Add New Product</a> |
	<a href="{{route('logout.index')}}"> Logout</a> 

	<ul>
		@foreach($products as $product)
		<li><a href="{{route('supplier.show', [$product->id])}}"> {{$product->name}} | {{$product->quantity}} | {{$product->price}}</a></li>
		@endforeach
	</ul>
</body>
</html>