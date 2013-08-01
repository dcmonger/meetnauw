<?php $this->load->view('partials/header') ?>

    <img src= 'assets/james_franco.jpg' alt='james franco' class="img-rounded">
    <h1>James Franco</h1>
    <div id='middle'>
        <h2>Likes</h2>
        <div id='likes'>
            <h3><span class="label label-info">Berry Picking</span></h3>
            <h3><span class="label label-info">Gum Chewing</span></h3>
        <!-- here will be pulled from the database -->
        </div>
        <form>
            <input type='text' class="form-control" placeholder='Enter other likes here'><br />
            <button type="submit" class="btn btn-default">Add a Like</button>
        </form>
    </div>
    </div>
<?php $this->load->view('partials/footer') ?>
