<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Event Picker</title>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>
	<link rel='stylesheet' type='text/css' href='assets/events.css'>
</head>
<body>
	<h1>Events in Your Area</h1>
	<div id='events'>
		<div class='event'>
			<div id='event_pic'></div>
			<p> This is some sample text about an event. You have 40% compatibility with this group and 75% max compatibility with any one person in this group</p>
		</div>
		<div class='event'>
			<div id='event_pic'></div>
			<p> This is some sample text about an event. You have 60% compatibility with this group and 72% max compatibility with any one person in this group</p>
		</div>
		<div class='event'>
			<div id='event_pic'></div>
			<p> This is some sample text about an event. You have 50% compatibility with this group and 68% max compatibility with any one person in this group</p>
		</div>
	</div>
	<div id='add_event'>
		<h2>Suggest an Event</h2>
		<form>
			<input type='text' value='Event Title'><button>Add Event</button><br /><br />
			<textarea rows='4' cols='40' value='Event Description'>Event Description</textarea>
		</form>
	</div>
</body>
</html>