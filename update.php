<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","record");
$q="select * from book where bookid='".$id."' ";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
?>
<html>
    <body>
    <form>
        Book id <input type="text" name="bid" value="<?php echo $row[0];?>">
        <input type="textarea" name="t2" value="<?php echo $row[1];?>" placeholder="Describe about your property" required autocomplete="off"></textarea>
        Title <input type="text" name="t3" value="<?php echo $row[2];?>">
        Date <input type="text" name="t4" value="<?php echo $row[3];?>">
        <input type="submit" name="s" value="SUBMIT">
    </form>
    </body>
</html>
<?php
if(isset($_REQUEST['s']))
{
    $id=$_REQUEST['bid'];
    $au=$_REQUEST['t2'];
    $ti=$_REQUEST['t3'];
    $da=$_REQUEST['t4'];
    $con=mysqli_connect("localhost","root","","record");
    $q="update book set author='".$au."',title='".$ti."',date='".$da."' where bookid='".$id."' ";
    $res=mysqli_query($con,$q);
    mysqli_close($con);
    header('location:view.php');
}
?>