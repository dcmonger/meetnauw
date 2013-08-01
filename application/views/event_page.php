<?php $this->load->view('partials/header') ?>
<?php $this->load->view('partials/normal_navbar') ?>

	<h1 id='event_title_1'>Events in Your Area</h1>
	<div id='events'>
		<div class='event'>
			<img class='event_pic' src='<?= base_url() ?>assets/img/james_franco.jpg' alt='james franco'class="img-rounded">
			<p> This is some sample text about an event. You have 40% compatibility with this group and 75% max compatibility with any one person in this group</p>
		</div>
		<div class='event'>
			<img class='event_pic' src='<?= base_url() ?>assets/img/james_franco.jpg' alt='james franco'class="img-rounded">
			<p> This is some sample text about an event. You have 60% compatibility with this group and 72% max compatibility with any one person in this group</p>
		</div>
		<div class='event'>
			<img class='event_pic' src='<?= base_url() ?>assets/img/james_franco.jpg' alt='james franco'class="img-rounded">
			<p> This is some sample text about an event. You have 50% compatibility with this group and 68% max compatibility with any one person in this group</p>
		</div>
		<div class='event'>
			<img class='event_pic' src='<?= base_url() ?>assets/img/james_franco.jpg' alt='james franco'class="img-rounded">
			<p> This is some sample text about an event. You have 50% compatibility with this group and 68% max compatibility with any one person in this group</p>
		</div>
		<div class='event'>
			<img class='event_pic' src='<?= base_url() ?>assets/img/james_franco.jpg' alt='james franco'class="img-rounded">
			<p> This is some sample text about an event. You have 50% compatibility with this group and 68% max compatibility with any one person in this group</p>
		</div>
	</div>
	<div id='add_event'>
		<h2>Suggest an Event</h2>
		<form>
			<input id='event_title' type='text' value='Event Title' class="form-control"><br /><br />
			<textarea id='event_text' class="form-control" rows='4' cols='30' value='Event Description'></textarea class="form-control"><br /><br />
			<input type='submit' value='Add an Event' class="btn btn-default">
		</form>
	</div>
<?php $this->load->view('partials/footer') ?>
