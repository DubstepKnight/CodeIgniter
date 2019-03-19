<h2>Add student</h2>
<form action="<?php echo site_url('students/add_student'); ?>" method="post">
    <label for="">User ID</label> <br>
    <input type="number" name="id" value=""> <br>

    <label for="">Firstname</label> <br>
    <input type="text" name="fn" value="" required> <br>

    <label for="">Lastname</label> <br>
    <input type="text" name="ln" value="" required> <br>

    <label for="">Email</label> <br>
    <input type="text" name="em" value=""> <br>

    <input type="submit" value="Add">
</form>