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
			<h1>Meetnauw</h1>
			<p><b>Meetnauw</b> is an easy and no pressure way to meet people in your area that share your interests, be it web development or kite-surfing. </p>
			<p>When you sign up, you'll fill out a form with all the boring information, then get to pick out your interests. These interests will help us match you up with people you'll like. </p>
			<p>You can browse the events page to find out what's happening in your area. We'll let you know how compatible you'll be with the people who are going to these events as a group, as well as how compatible you'll be with any one person in the group. So go sign up! Meetnauw! </p>
		</div>
		<div id='sign_up'>
			<h2>Sign Up</h2>
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