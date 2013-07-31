<?php $this->load->view('partial_top.php') ?>
	<link rel='stylesheet' type='text/css' href='assets/events.css'>
</head>
<body>
	<div id='banner'>
		<img id="back" src="assets/jumpingpeople.jpg" alt="banner">
	</div>
	<div class='navbar navbar-inverse'>
		<form class="navbar-form pull-right">
		  <button type="submit" class="btn btn-default">Profile</button>
		  <button type="submit" class="btn btn-default">Events</button>
		  <button type="submit" class="btn btn-default">Logout</button>
		</form>
	</div>

	<h1>Events in Your Area</h1>
	<div id='events'>
		<div class='event'>
			<img src='assets/james_franco.jpg' alt='james franco'class="img-rounded">
			<p> This is some sample text about an event. You have 40% compatibility with this group and 75% max compatibility with any one person in this group</p>
		</div>
		<div class='event'>
			<img src='assets/james_franco.jpg' alt='james franco'class="img-rounded">
			<p> This is some sample text about an event. You have 60% compatibility with this group and 72% max compatibility with any one person in this group</p>
		</div>
		<div class='event'>
			<img src='assets/james_franco.jpg' alt='james franco'class="img-rounded">
			<p> This is some sample text about an event. You have 50% compatibility with this group and 68% max compatibility with any one person in this group</p>
		</div>
	</div>
	<div id='add_event'>
		<h2>Suggest an Event</h2>
		<form>
			<input id='event_title' type='text' value='Event Title' class="form-control"><br /><br />
			<textarea rows='4' cols='40' value='Event Description'></textarea class="form-control"><br /><br />
			<input type='submit' value='Add an Event' class="btn btn-default">
		</form>
	</div>
</body>
</html>