<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('admin_asset/css/style.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="form col-5 m-auto mt-5">
	 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 
<div class="register">
<h2 class="register text-center">
           Register
</div>
  <div class="form">
  <form method="POST" action="{{ route('register') }}"  class="p-4 border bg-light">
			@csrf
			<div class="form-group mb-3">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>

				@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>

			<div class="input-group mb-3">
				<label for="email">Email:</label><br>
				<input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>

				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>

			<div class="input-group mb-3">
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required>

				@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror 
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
			<a href="{{route('login')}}">Login</a>
		</form>
</body>
  </div> 

</body>
</html>