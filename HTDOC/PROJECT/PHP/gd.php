
<?php 

include "config.php";

$Usernamee=$_POST['Username'];
$Password=$_POST['Password'];





$sql_login = "INSERT INTO `gd`(`id`, `username`, `password`, `faculty_id`,`createdOn`) VALUES ('','$Username','$Password','$',NOW())";
if(mysqli_query($conn,$sql_login))
{
   
    echo '<script>alert("Registration successful")
    window.location.href="http://127.0.0.1/PROJECT/PHP/homepage.php";
    </script>'; 

    // header("Location:http://127.0.0.1/PROJECT/PHP/homepage.php");
}
else
{  
    echo mysqli_error($conn);
    echo '<script>alert("Registration unsuccessful")
     window.location.href="http://127.0.0.1/PROJECT/PHP/homepage.php";
    </script>'; 
}

?>