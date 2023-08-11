<html>
    <head>
        <title>Book</title>
    </head>
    <body>
        <form>
            Enter book author <input type="text" name="t1"><br><br>
            Enter book title <input type="text" name="t2"><br><br>
            Enter book date <input type="text" name="t3"><br><br>
            <input type="submit" name="s" value="SUBMIT"><br><br>
            <a href="view.php">View all</a><br><br>
            <a href="search.php">Search</a>
        </form>
    </body>
</html>
<?php
if(isset($_REQUEST['s']))
{
    $au=$_REQUEST['t1'];
    $ti=$_REQUEST['t2'];
    $da=$_REQUEST['t3'];
    $con=mysqli_connect("localhost","root","","record");
    $q="insert into book(author,title,date) values('".$au."','".$ti."','".$da."')";
    $res=mysqli_query($con,$q);
    if($res)
    {
        echo "values inserted";
        //include("view.php");
    }else{
        echo "value not inserted";
    }
    mysqli_close($con);
}
?>
