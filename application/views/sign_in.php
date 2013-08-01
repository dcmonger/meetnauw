<?php $this->load->view('partial_top.php') ?>
<link rel='stylesheet' type='text/css' href='assets/sign_in.css'>
</head>
<body>
	<div id='banner'>
		<img id="back" src="assets/jumpingpeople.jpg" alt="banner">
		<div id='stuff_back'></div>
	</div>
	<div id='stuff_wrapper'>
	<div class='navbar navbar-inverse'>
		<form class="navbar-form pull-right">
		  <input type="text" class="form-control" style="width: 200px;" placeholder='Email'>
		  <input type="text" class="form-control" style="width: 200px;" placeholder='Password'>
		  <button type="submit" class="btn btn-default">Sign In</button>
		</form>
	</div>

	<div id="middle">

		<div id='info'>
			<p><b>Lorem ipsum</b> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
			<p><b>Exepteur sint occaecat </b>cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
		</div>
		<div id='sign_up'>
			<h1>Sign Up</h1>
			<form action='' method='post'>
				<input type='text' class="form-control" placeholder='First Name'><br />
				<input type='text' class="form-control" placeholder='Last Name'><br />
				<input type='text' class="form-control" placeholder='Email'><br />
				<input type='text' class="form-control" placeholder='Password'><br />
				<input type='text' class="form-control" placeholder='Confirm Password'><br />
				<button type="submit" class="btn btn-default">Sign Up</button>
			</form>
		</div>
	</div>
	</div>

</body>
</html>