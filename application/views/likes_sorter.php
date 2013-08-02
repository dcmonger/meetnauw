<?php $this->load->view('partials/header') ?>
<?php $this->load->view('partials/normal_navbar') ?>
    <div id='picture_upload'>
        <img id = 'face' src= '<?= base_url() ?>assets/img/james_franco.jpg' alt='james franco' class="img-rounded">
        <form>
            <input type="file" class="btn btn-default" name="image" id="image" />
        </form>
    </div>
    <h1 id='likes_title_1'><?php echo $name; ?></h1>
    <a id='edit_prof' class="btn btn-default" href="<?= base_url() ?>user/edit_profile">Edit Profile</a>
    <div id='likes_middle'>
        <h2>Likes</h2>
        <div id='likes'>
            <?php
            foreach ($likes as $thing) {
                echo $thing['item'];
                echo "<br />";
            }
        ?>
            <h3><span class="label label-info">Berry Picking</span></h3>
            <h3><span class="label label-info">Gum Chewing</span></h3>
        <!-- here will be pulled from the database -->
        </div>
        <?php echo form_open( base_url().'user/profile')?>
            <input type='text' name='item' class="form-control" placeholder='Enter other likes here'><br />
            <button type="submit" class="btn btn-default">Add a Like</button>
        </form>
    </div>
    </div>
    </div
<?php $this->load->view('partials/footer') ?>
