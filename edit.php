<!DOCTYPE html>
<html lang="en">

<?php

include 'header.php';
$id=$_GET['id'];

$sql="select * from users where id=".$id;
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $status=$_POST['status'];
    $sql="UPDATE users set Name= '$name', '$username', $email='email, $status='status', where id =.$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:view_user.php");
    }else
    {
        echo mysqli_error($con);
    }
    echo $sql;
    # code...
}

echo "<pre>";
print_r($row);
?>


    <div class="container">
        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" id="Username" placeholder="Username">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputStatus">Status</label>
                    <select type="email" class="form-control" id="inputStatus" placeholder="Email">
                        <option value="">Select Status</option>
                        <option >
                        <?php if($row['status']=='Active') echo "selected"; {
                            # code...
                        }?>
                        <option value="Active">Active</option>
                        <option <?php if($row['status']=='Inactive') echo "selected"; {
                            # code...
                        }?> value="Inactive">Inactive</option>
                    </select>

                </div>to
            </div>
            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>
</body>

</html>