<?php
require_once 'db.php';
if(isset($_POST['update']))
{
    $id= $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ftfl_id = $_POST['ftfl_id'];
    $phone = $_POST['phone'];
    $query = "update students set name='$name', email='$email', ftfl_id='$ftfl_id', phone='$phone' where id='$id' ";
    if (mysqli_query($con, $query))
    {
        echo 'Data updated successfully';
        echo '<a href="index.php">View Students</a>';
    }
}
?>