<?php $this->load->view("partials/header") ?>
<link rel='stylesheet' type='text/css' href="<?= base_url() ?>/assets/edit_prof.css">
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
        <div id='edit_info'>
            <h2>Edit info</h2>
            <? echo validation_errors();?>
            <? echo form_open('user/process_registration') ?>
                <input type='text' name = "first_name" class="form-control" placeholder='First Name'><br />
                <input type='text' name = "last_name" class="form-control" placeholder='Last Name'><br />
                <input type='text' name = "email" class="form-control" placeholder='Email'><br />
                <textarea class="form-control" name="description" placeholder='Personal description' cols="70" rows="8"></textarea><br />
                <input type='password' name = "password" class="form-control" placeholder='Password'><br />
                <input type='password' name = "confirm_password" class="form-control" placeholder='Confirm Password'><br />
                <button type="submit" class="btn btn-default">Change info</button>
            </form>
        </div>
    </div>
<?php $this->load->view('partials/footer') ?>