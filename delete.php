<?php
    $id=$_REQUEST['id'];
    $con=mysqli_connect("localhost","root","","record");
    $q="delete from book where bookid='".$id."'";
    $res=mysqli_query($con,$q);
    mysqli_close($con);
    header('location:view.php');
?>