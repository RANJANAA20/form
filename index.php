<?php
$server="localhost";
$username="root";
$password="";
$databasename="ranju";   // parameters

// connection
$conn=mysqli_connect($server,$username,$password,$databasename);

//check for connection
if(isset($_POST['submit']))
{
    if(!empty($_POST['name']) && !empty($_POST['emaail']) && !empty($_POST['address']) && !empty($_POST['phoneno']))
    {
        // fetch the details
        $name=$_POST['name'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $phoneno=$_POST['phoneno'];

        // insert the data into table
        $query="insert into form(name,email,address,phoneno) values('$name','$email','$address','$phoneno') ";

        // to run the aboe query
        $run=mysqli_query($conn,$query) or die(mysqli_error());

        //check whether the query runs or not
        if($run)
        {
            echo "done";
        }
        else
        {
            echo "not done";
        }
    }
    else
    {
        echo "all fields are required";
    }
}
?>
