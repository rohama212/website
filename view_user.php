<?php
include 'header.php';
$user=[];

$sql="select * from users";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
$users[]=$row;

}
//echo"<pre>";
//print_r($users);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_user.php">Users</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <a href="create.php" class="pull-right">Create User</a>
            </div>
        </div>

        <table class="table table-condensed table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($users as $user)

                ?>
              <tr>
                    <td><?php echo $user ['id'];?></td>
                    <td><?php echo $user ['name'];?>/td>
                    <td><?php echo $user['username'];?></td>
                    <td><?php echo $user['email'];?></td>
                    <td><?php echo $user['status'];?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $user['id'];?>">edit</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</body>

</html>