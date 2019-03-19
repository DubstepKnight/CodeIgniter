<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<div class="container">
<h1>Students application</h1>
<?php 
if(!empty($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
{
    echo $_SESSION['username'];
}
else
{
    echo "Quest";
}
?>

<ul>
    <li> <a href="<?php echo site_url('students/show_students'); ?>">Show Students.</a> </li>
    <li> <a href="<?php echo site_url('students/add_form'); ?>">Add student</a> </li>
    <?php
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']==false)
    {
        
        echo "<li> <a href=" . site_url('login') . ">Login</a> </li>";
    }
    else
    {
        echo "<li> <a href=" . site_url('users/show_users') .">Show users</a> </li>";
        echo "<li> <a href=" . site_url('users/add_form') . ">Add user</a> </li>";
        echo "<li> <a href=" . site_url('login/logout') . ">Logout</a> </li>";
    }
    
    ?>
</ul>
<hr>