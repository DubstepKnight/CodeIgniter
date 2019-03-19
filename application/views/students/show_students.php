<h2>Students</h2>
<table border="1">
    <thead>
        <tr> <th>Student ID</th> <th>Firstname</th> <th>Lastname</th> <th>Email</th> <th>Username</th> <th>Delete</th>  <th>Edit</th> </tr>
    </thead>
    <tbody>
        <?php    
            foreach ($students as $row)
            {
                echo '<tr>';
                    echo '<td>'.$row['idStudents'].'</td>';
                    echo '<td>'.$row['fname'].'</td>';
                    echo '<td>'.$row['lname'].'</td>';
                    echo '<td>'.$row['email'].'</td>';
                    echo '<td>'.$row['username'].'</td>';
                    echo '<td><a href="'.site_url('students/show_delete/').$row['idStudents'].'">DELETE</a></td>';
                    echo '<td><a href="'.site_url('students/show_edit/').$row['idStudents'].'">EDIT</a></td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>