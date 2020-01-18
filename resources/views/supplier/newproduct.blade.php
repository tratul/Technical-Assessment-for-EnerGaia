<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
		<h2>Register New Employe</h2>
		<a href="{{route('account.index')}}">Back</a> | 
		<a href="{{route('logout.index')}}"> Logout</a> 

		<form method="post">
			{{csrf_field()}}
			<table>
				<tr>
					<td>Employer Name:</td>
					<td><input type="text" name="employerName" value="{{old('accNo')}}" /></td>
				</tr>
				<tr>
					<td>Company Name:</td>
					<td><input type="text" name="companyName" value="{{old('accName')}}" /></td>
				</tr>
				<tr>
					<td>Contact No:</td>
					<td><input type="text" name="contact"/></td>
				</tr>
				<tr>
					<td>User Name:</td>
					<td><input type="text" name="username"/></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password"/></td>
				</tr>
				<tr>
					<td>User Type:</td>
					<td><input type="radio" name="usertype" value="Admin"/> Admin</td>
					<td><input type="radio" name="usertype" value="Employe"/> Employe</td>
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