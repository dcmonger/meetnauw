<?php $this->load->view("partials/header") ?>
<?php $this->load->view('partials/normal_navbar') ?>
        <div id='edit_info'>
            <h2>Edit info</h2>
            <? echo validation_errors();?>
            <? echo form_open('user/edit_profile') ?>
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