<?php $this->load->view("partials/header") ?>
<?php $this->load->view("partials/sign_in_navbar") ?>

    <div id="middle">

        <div id='info'>
            <h1 id='sign_title_1'>Meetnauw</h1>
            <p><b>Meetnauw</b> is an easy and no pressure way to meet people in your area that share your interests, be it web development or kite-surfing. </p>
            <p>When you sign up, you'll fill out a form with all the boring information, then get to pick out your interests. These interests will help us match you up with people you'll like. </p>
            <p>You can browse the events page to find out what's happening in your area. We'll let you know how compatible you'll be with the people who are going to these events as a group, as well as how compatible you'll be with any one person in the group. So go sign up! Meetnauw! </p>
        </div>
        <div id='sign_up'>
            <h2>Sign Up</h2>
            <? echo validation_errors();?>
            <? echo form_open('user/process_registration') ?>
                <input type='text' name = "first_name" class="form-control" placeholder='First Name'><br />
                <input type='text' name = "last_name" class="form-control" placeholder='Last Name'><br />
                <input type='text' name = "email" class="form-control" placeholder='Email'><br />
                <input type='password' name = "password" class="form-control" placeholder='Password'><br />
                <input type='password' name = "confirm_password" class="form-control" placeholder='Confirm Password'><br />
                <button type="submit" class="btn btn-default">Sign Up</button>
            </form>
        </div>
    </div>
    </div>
<?php $this->load->view("partials/footer") ?>
