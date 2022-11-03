 <?php
 include 'connect.php';
 if(isset($_GET['Deleteid'])){
    $id=$_GET['Deleteid'];
    $sql="delete from crud where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo"Deleted successfully";
       header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
 }





 ?>