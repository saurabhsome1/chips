
<?php
include('connection.php');
if(isset($_POST['Submit'])) {
    $name = $_POST['Name'];
    $lname = $_POST['lname'];
    $gmail = $_POST['Gmail'];
    $address = $_POST['Address'];

    $query = mysqli_query($con, "INSERT INTO FIRSTOPRATION (name, lname, gmail, address)
     VALUES ('$name', '$lname', '$gmail', '$address') ");
     if($query){
        echo "<script>alert('successful')</script>";
     }else{
        echo "<script>alert('fail')</script>";

     }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert deta into Db</title>
</head>
<body>
    <div style="margin: 5px auto">
        <form action="home.php" method="post">
            <input type="text" name="Name" placeholder="Enter name"/>
            <br/> <br/>

            <input type="text" name="lname" placeholder="Enter last name"/>
            <br/> <br/>

            <input type="gmail" name="Gmail" placeholder="Enter gmail"/>
            <br/> <br/>

            <input type="text" name="Address" placeholder="Enter Address"/>
            <br/> <br/>
            <button type="submit" name="Submit" >Submit</button>

         </form>
    </div>
</body>
</html>