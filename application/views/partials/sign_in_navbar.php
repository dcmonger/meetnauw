<div id='stuff_wrapper'>
    <div class='navbar navbar-inverse'>
        <?= form_open('user/process_login', array('class' => 'navbar-form pull-right')) ?>
          <input type="text" name="email" class="form-control" style="width: 200px;" placeholder='Email'>
          <input type="password" name="password" class="form-control" style="width: 200px;" placeholder='Password'>
          <button type="submit" class="btn btn-default">Sign In</button>
        </form>
    </div>