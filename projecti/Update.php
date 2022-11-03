<?php
include 'connect.php';
$id=$_GET['Updateid'];
$sql="Select * from crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$Name=$row['name'];
$Mobile=$row['mobile'];
$Address=$row['address'];

if(isset($_POST['submit'])){
   $Name=$_POST['name'];
   $Mobile=$_POST['mobile'];
   $Address=$_POST['address'];
   
   $sql="Update crud set id=$id,name='$Name',mobile='$Mobile',address='$Address' where id=$id";
   $result=mysqli_query($con, $sql);
   if($result){
   // echo"data Updated successfully";
    header('location:display.php');

   }else{
    die(mysqli_error($con)); 
   }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>crud operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="Post">
            <div class="form-group">
                <label> Name</label>
                <input type="text" class="form-control" placeholder="Enter name " name="name" autocomplete="off" value=<?php echo $Name;?>>
            </div>
            <div class="form-group">
                <label> Mobile </label>
                <input type="text" class="form-control" placeholder="Enter your mobile no " name="mobile" autocomplete="off"value=<?php echo $Mobile;?>>
            </div>
            <div class="form-group">
                <label> Address</label>
                <input type="text" class="form-control" placeholder="Enter your address " name="address" autocomplete="off"value=<?php echo $Address;?>>
            </div>
           
           
           
            <button type="submit" class="btn btn-primary"name="submit">Update</button>
        </form>

    </div>

</body>

</html>
