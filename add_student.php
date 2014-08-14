<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

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
                <a class="navbar-brand" href="list_students.html">Dashboard - Students Database</a>
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
        <div class="col-md-4">
            <ul class="nav nav-pills nav-stacked list-group" id="sidebar">
                <li><a class="list-group-item active" href="dashboard.html">Home</a></li>
                <li><a class="list-group-item" href="add_student.php">Add student</a></li>
                <li><a class="list-group-item" href="add_course">Add course</a></li>
                <li><a class="list-group-item" href="assign_course">Assign Course to Student</a></li>
                <li><a class="list-group-item" href="list_students.html">List of Students</a></li>
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

            <div class="col-md-10">
                <div class="well well-sm">
                    <h4>Add Student</h4>
                </div>
            </div>
            <div class="col-md-12">
                <form action="studentEntry.php" method="POST">
                    <fieldset>
                        <legend>Student Registration</legend>
                        <label class="label label-info">Name: </label>
                        <input type="text" name="studentName" id="studentName" placeholder="Your Name" tabindex="1" />
                        <br/>
                        <label class="label label-info">Email: </label>
                        <input type="text" name="studentEmail" id="studentEmail" placeholder="Your Email" tabindex="2" />
                        <br/>
                        <label class="label label-info">ID: </label>
                        <input type="text" name="ftflId" id="ftflId" placeholder="Your FTFL ID" tabindex="3" />
                        <br/>
                        <label class="label label-info">Phone: </label>
                        <input type="text" name="studentPhone" id="studentPhone" placeholder="Your Phone" tabindex="4" />
                        <br/>
                        <input type="submit" class="btn btn-default" name="submit" value="Submit" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!--background color had default, didn't change like header, so i extended color on style-->

    <div class="row">
        <div class="panel-footer">
            <p>Copyright <i class="glyphicon glyphicon-copyright-mark"></i>
                2014 . All rights reserved.</p>
        </div>
    </div>
</div>
<!-- JavaScript -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
