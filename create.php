<?php
include 'header.php';

if(isset($_POST['insert']))
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $status=$_POST['status'];


    $sql="INSERT INTO users (name,username,password,email,status) 
          VALUES('$name','$username','$password','$email','$status')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"Inserted";
    }else
    {
        echo mysqli_error($con);
    }

}
?>
<body>

</body>
</html>


    <div class="container">
        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name="name" id="Name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" id="Username" name="username" placeholder="Username">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputStatus">Status</label>
                    <select type="email" class="form-control" id="inputStatus" placeholder="Email">
                        <option value="">Select Status</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>

                </div>
            </div>
            <input type="submit" name="insert" class="btn btn-primary">
            
        </form>
    </div>
</body>

</html>