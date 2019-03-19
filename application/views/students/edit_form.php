<h2>Edit Student</h2>
<form action="<?php echo site_url('students/edit_student'); ?>" method="post">
    <label for="">Student ID</label> <br>
    <input type="number" name="id" value="<?php echo $student[0]['idStudents']; ?>" disabled> <br>

    <label for="">User ID</label> <br>
    <input type="number" name="id" value="<?php echo $student[0]['idUsers']; ?>"> <br>

    <label for="">Firstname</label> <br>
    <input type="text" name="fn" value="<?php echo $student[0]['fname']; ?>" > <br>

    <label for="">Lastname</label> <br>
    <input type="text" name="ln" value="<?php echo $student[0]['lname']; ?>" > <br>

    <label for="">Email</label> <br>
    <input type="text" name="em" value="<?php echo $student[0]['email']; ?>"> <br>

    <input type="hidden" name="current_id" value="<?php echo $current_id; ?>">
    <input type="submit" value="Edit">
</form>