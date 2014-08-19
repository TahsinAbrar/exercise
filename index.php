<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students List</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">Home - Students Database</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        <div class="row">
            <div class="jumbotron">
                <h3>Student Database</h3>  
            </div>
            
            <div class="col-md-4">
                <ul class="nav nav-pills nav-stacked" id="sidebar">
                    <li><a href="dashboard.html">Home</a></li>
                    <li><a href="add_student.php">Add student</a></li>
                    <li><a href="add_course.php">Add course</a></li>
                    <li><a href="index.php">List of Students</a></li>
                </ul>
            </div>
            <div class="col-md-8">
                    <div class="row">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Students</a></li>
                            <li class="active">Lists</li>
                        </ol>
                    </div>

                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>Action</th>
                    </tr>
                    </thead>
<?php
    require_once 'db.php';
    $sql = mysqli_query($con, "SELECT * FROM students");
?>
                    <tbody>
                    <?php
                        while($row=mysqli_fetch_array($sql))
                        {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['ftfl_id']; ?></td>
                        <td>
                            <a href="student_details.php?student_id=<?php echo $row['id'];?>">Details</a> |
                            <a href="edit_student.php?student_id=<?php echo $row['id'];?>">Edit</a> |
                            <a href="delete_student.php?student_id=<?php echo $row['id'];?>">Delete</a>
                        </td>
                    </tr>
                    <?php }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>