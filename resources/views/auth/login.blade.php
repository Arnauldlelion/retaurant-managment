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
	 
    @if (session('status'))
       {{session('status')}}
    @endif
  <form method="POST" action="{{ route('login') }}" class="p-4 border bg-light">
			@csrf
			<h2 class="login text-center">
			   Login
      </h2>
			
			<div class="form-group mb-3">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>

				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>

			<div class="form-group mb-3">
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required>

				@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror 
			</div>
            <div class="mb-4">
               <div >
				<input type="checkbox" name="remember" id="remember" class="mr-2">
				<label for="remember">Remember me</label>
			   </div>				

			</div>
			<button type="submit" class="btn btn-primary">LOGIN</button>
			<a href="{{route('register')}}">Register</a>
		</form>
</body>
  </div> 

</body>
</html>