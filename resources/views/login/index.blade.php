<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
		<form method="post">
			{{csrf_field()}}

			<fieldset>
				<legend>login</legend>
				<table>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" value="{{$email}}"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" value="Submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>

		<div>{{session('message')}}</div>
</body>
</html>