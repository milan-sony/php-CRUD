<html>
    <head>
        <title>Search</title>
    </head>
</body>
<form>
    Enter the id to be searched <input type="text" name="t1">
    <input type="submit" name="s" value="SUMBIT">
</form>
<?php
if(isset($_REQUEST['s']))
{
    $id=$_REQUEST['t1'];
    $con=mysqli_connect("localhost","root","","record");
    $q="select * from book where bookid='".$id."'";
    $res=mysqli_query($con,$q);
    if($res)
    {
?>
    <table border="1">
        <tr>
            <th>Book id</th>
            <th>Author</th>
            <th>Title</th>
            <th>Date</th>
        </tr>
<?php
    }
    while($row=mysqli_fetch_array($res))
    {
?>
    <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
    </tr>
<?php
    }
    mysqli_close($con);
}
?>