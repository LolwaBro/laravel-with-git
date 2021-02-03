<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Hi {{ session()->get('username') }}!</h1>

	<form action="logout" method="post">

		{{ @csrf_field() }}

		<button type="submit">Logout</button>
		
	</form>

</body>
</html>