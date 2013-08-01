<?php $this->load->view('partials/header') ?>
<?php $this->load->view('partials/normal_navbar') ?>
    <img id = 'face' src= 'assets/img/james_franco.jpg' alt='james franco' class="img-rounded">
    <h1 id='likes_title_1'>James Franco</h1>
    <div id='likes_middle'>
        <h2>Likes</h2>
        <div id='likes'>
            <h3><span class="label label-info">Berry Picking</span></h3>
            <h3><span class="label label-info">Gum Chewing</span></h3>
        <!-- here will be pulled from the database -->
        </div>
        <form id='input_likes'>
            <input type='text' class="form-control" placeholder='Enter other likes here'><br />
            <button type="submit" class="btn btn-default">Add a Like</button>
        </form>
    </div>
    </div>
    </div
<?php $this->load->view('partials/footer') ?>
