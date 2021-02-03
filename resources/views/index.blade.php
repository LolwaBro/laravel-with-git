<!DOCTYPE html>

<html>

<head>

	<title>Laravel with git</title>

</head>

<body>

	<div class="container">

		<div class="form-container">

			<!-- Login form block -->

			<div class="form-login-container">

				<label class="form-label">Login</label>

				<br><br>

				<form action="login" method="post">

					{{ @csrf_field() }}
					
					<input type="text" name="loginUsername" placeholder="Username" class="">

					@error('loginUsername')

						<br>

						{{ $message }}

					@enderror

					<br><br>

					<input type="password" name="loginPassword" placeholder="Password" class="">

					@error('loginPassword')

						<br>

						{{ $message }}

					@enderror

					<br><br>

					<button type="submit" name="loginSubmit" class=""> Login </button>

				</form>
				
			</div>


			<!--- Register form block -->

			<div class="form-register-container">

				<label class="form-label">Register</label>

				<form action="" method="post">

					{{ @csrf_field() }}
					
					<input type="text" name="registerUsername" placeholder="Username" class="">

					<input type="password" name="registerPassword" placeholder="Password" class="">

					<button type="submit" name="registerSubmit" class=""> Register </button>

				</form>
				
			</div>

		</div>

	</div>

</body>

</html>