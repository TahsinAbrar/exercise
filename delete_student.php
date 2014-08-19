<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/19/14
 * Time: 10:30 AM
 */

require_once 'db.php';
$id = $_GET['student_id'];
$query = "delete from students where id = '$id'";
if(mysqli_query($con, $query))
{
    echo 'Data deleted successfully';
    echo '<a href="index.php">View Students</a>';
}