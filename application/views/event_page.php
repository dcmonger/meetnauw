<?php $this->load->view('partials/header') ?>
	<link rel='stylesheet' type='text/css' href="<?= base_url();?>assets/events.css">
</head>
<body>
	<div id='banner'>
		<img id="back" src="<?= base_url() ?>assets/jumpingpeople.jpg" alt="banner">
		<div id='stuff_back'></div>
	</div>
	<div id='stuff_wrapper'>
	<div class='navbar navbar-inverse'>
		<div class="pull-right">
            <a class="btn btn-default" href="#">Profile</a>
            <a class="btn btn-default" href="#">Events</a>
            <a class="btn btn-default" href="<?= base_url() ?>welcome">Logout</a>
		</div>
	</div>

	<h1>Events in Your Area</h1>
	<div id='events'>
		<div class='event'>
			<img src='<?= base_url() ?>assets/james_franco.jpg' alt='james franco'class="img-rounded">
			<p> This is some sample text about an event. You have 40% compatibility with this group and 75% max compatibility with any one person in this group</p>
		</div>
		<div class='event'>
			<img src='<?= base_url() ?>assets/james_franco.jpg' alt='james franco'class="img-rounded">
			<p> This is some sample text about an event. You have 60% compatibility with this group and 72% max compatibility with any one person in this group</p>
		</div>
		<div class='event'>
			<img src='<?= base_url() ?>assets/james_franco.jpg' alt='james franco'class="img-rounded">
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
	</div>
<?php $this->load->view('partials/footer') ?>
