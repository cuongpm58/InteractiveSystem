<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Login Form</title>
	<link href="{{url('public/login/style.css')}}" rel="stylesheet">
</head>
<body>
	<section>
		<div class="logo">
			<img src="public/image/dieboldlogo.jpg" alt="Forest" width="200" height="60">
		</div>
	</section>
	<section>
		<div class="head">
			<h1>DIEBOLD INTERACTIVE REQUIREMENTS SYSTEM</h1>
		</div>
	</section>
	<section class="container">
    	<div class="login">
    		<h1>Login</h1>
    		<form method="post" action="">
    			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
    			<p><input type="text" name="username" value="" placeholder="username"></p>
        		<p><input type="password" name="password" value="" placeholder="password"></p>
        		<p class="remember_me">
        		@include('admin.blocks.error')
        	<label>
         		<input type="checkbox" name="remember_me" id="remember_me">
        		Remember me on this computer
        	</label>
        		</p>
        		<p class="submit"><input type="submit" name="commit" value="Login"></p>
      		</form>
    	</div>
		<div class="login-help">
      		<p>Forgot your password? <a href="quen-mat-khau">Click here to reset it</a>.</p>
    	</div>
  	</section>
</body>
</html>