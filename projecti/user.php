<?php
include 'connect.php';
if(isset($_POST['submit'])){
   $Name=$_POST['name'];
   $Mobile=$_POST['mobile'];
   $Address=$_POST['address'];
  
   $sql ="insert into crud (name,mobile,address)values('$Name','$Mobile','$Address')";
   $result=mysqli_query($con, $sql);
   if($result){
    //echo"data inserted successfully";
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
                <input type="text" class="form-control" placeholder="Enter name " name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label> Mobile </label>
                <input type="number" class="form-control" placeholder="Enter your mobile no" name="mobile" autocomplete="off" maxlength="10" size="10">
            </div> 
            <div class="form-group">
                <label> Address</label>
                <input type="text" class="form-control" placeholder="Enter your address " name="address" autocomplete="off">
            </div>
            <div class="form-group">
                <label> checkup</label>
                <input type="text" class="form-control" placeholder="Enter your checkup type " name="checkup" autocomplete="off">
            </div>
           
           
            <button type="submit" class="btn btn-primary"name="submit">Submit</button>
        </form>

    </div>

</body>

</html>