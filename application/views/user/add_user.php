<div class="container">
    <h4>Add User</h4>
    <form action="<?php echo base_url('user/add_user');?>" method="post" class="container">
        <label for="">
            <input type="text" name="name" id="addusername"  class="form-control" placeholder="Enter Name">
        </label>
        <label for="">
            <input type="text" name="email" id="adduseremail"  class="form-control" placeholder="Enter Email">
        </label>
        <label for="">
            <!-- <input type="submit" class="btn btn-outline-primary p-2 form-control" value="ADD USER"> -->
        </label>

        <label for="">
            <button class="btn btn-outline-danger p-2" id="adduserjs">Add User JS</button>
        </label>
    </form>
</div>
