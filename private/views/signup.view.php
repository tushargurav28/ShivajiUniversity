<?php $this->view('/includes/header'); ?>

<div class="  container-fluid">
    <div class="p-4 mx-auto shadow rounded" style="margin-top:7%; width:100%; max-width:340px;">
        <h2 class="text-center">Shivaji University</h2>
        <img src="<?=ROOT?>/assets/logo.png" class="d-block mx-auto rounded circle" style="width: 150px;">
        <h3>Add User</h3>
        <input type="text" name="FirstName" placeholder="First Name" class="my-2 form-control" autofocus>
        <input type="text" name="LastName" placeholder="Last Name" class="my-2 form-control">
        <input type="text" name="email" placeholder="Email" class="my-2 form-control">
        <select class=" my-2 form-control">
            <option value="">--Select - gender --</option>
            <option value="">male</option>
            <option value="">Female</option>
        </select>
        <select class=" my-2 form-control">
            <option value="">--Select - Role --</option>
            <option value="Student">Student</option>
            <option value="Clerk">Clerk</option>
            <option value="Professor">Professor</option>  
            <option value="HOD">Head OF Department</option>
            <option value="super_admin">Super Admin</option>
        </select>
        <input type="Password" name="Password" placeholder="Password" class="my-2 form-control">
        <input type="Password" name="Password2" placeholder="ReType Password" class="my-2 form-control">
        <br>
        <button class="btn btn-danger">Cancle</button>
        <button class="btn btn-primary float-end">Login</button>
    </div>
</div>

<?php $this->view('/includes/footer'); ?>