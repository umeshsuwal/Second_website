
<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $uname=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "umesh";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO users (id, username, email, password) VALUES ('0', '$uname', '$email', '$password')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Registration Successful";
    }
  
    // close connection
    mysqli_close($con);

?>