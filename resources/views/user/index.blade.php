<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
	<h2>List of Product</h2>
	<a href="{{route('logout.index')}}"> Logout</a> 

	<ul>
		@foreach($products as $product)
		<li><a href="{{route('user.show', [$product->id])}}"> {{$product->name}} | {{$product->quantity}} | {{$product->price}}</a></li>
		@endforeach
	</ul>
</body>
</html>