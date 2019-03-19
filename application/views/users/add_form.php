<h2>Add User</h2>
<p>
    <form action="<?php echo site_url('users/add_user'); ?>" method="post">
        <label for="">ID</label> <br>
        <input type="text" name="idUsers" value=""> <br>
        <label for="">Username</label> <br>
        <input type="text" name="username" value=""> <br>
        <label for="">Password</label> <br>
        <input type="text" name="password" value=""> <br>
        <label for="">User group</label> <br>
        <input type="number" name="usergroup" value=""> <br>
        <input type="submit" name="" value="Add"> 
    </form>
</p>