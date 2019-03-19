<h2>Users</h2>
<table border="1">
    <thead>
        <tr> <th>ID</th> <th>Username</th> <th>User group</th> </tr>
    </thead>
    <tbody>
        <tr> 
            <td>Test id</td> <td>test name</td> <td>test group</td> 
        </tr>
        <?php
            foreach ($users as $row)
            {
                echo '<tr>';
                echo '<td>'.$row['idUsers'].'</td>';
                echo '<td>'.$row['username'].'</td>';
                echo '<td>'.$row['usergroup'].'</td>';
            }
        ?>
    </tbody>
</table>
