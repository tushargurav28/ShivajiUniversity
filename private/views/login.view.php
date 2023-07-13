<?php $this->view('/includes/header'); ?>

<div class="  container-fluid">
    <div class="p-4 mx-auto shadow rounded" style="margin-top:10%; width:100%; max-width:340px;">
    <h2 class="text-center">Shivaji  University</h2>
    <img src="<?=ROOT?>/assets/logo.png" class="d-block mx-auto rounded circle" style="width: 150px;">
    <h3>Login</h3>
        <input type="text" name="email" placeholder="Email" class="form-control" autofocus>
       <br>
       <input type="Password" name="Password" placeholder="Password" class="form-control" >
       <br>
       <button class="btn btn-primary">Login</button>
    </div>
</div>

<?php $this->view('/includes/footer'); ?>