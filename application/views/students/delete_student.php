<h1>Delete student</h1>
<p>
    Do you want to delete student: <br>
</p>
<?php
    print_r($chosen_student);
?>
<ul>
    <li> <?php echo $chosen_student[0]['fname'] ?> </li>
    <li> <?php echo $chosen_student[0]['lname'] ?> </li>
</ul>
<a href="<?php echo site_url('students/delete_student/').$chosen_student[0]['idStudents']; ?>"><button>DELETE</button> </a>
<a href="<?php echo site_url('students/show_students'); ?>"><button>CANCEL</button></a>