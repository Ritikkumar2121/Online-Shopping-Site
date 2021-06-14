
<?php

    session_start();

   

    if (array_key_exists("id", $_SESSION)) {
  

  $link = mysqli_connect("shareddb-o.hosting.stackcp.net", "usersdetails-31303954a5", "|+H/=In?x2J}", "usersdetails-31303954a5");

        if (mysqli_connect_error()) {

            die ("Database Connection Error");

        }
        

    } else{
        header("Location: loginpage.php");
    }


?>

<?php
if(isset($_POST["update_desc"]))
{

		$id=$_GET['pro_id'];
		$desci="Ritik";
		if(mysqli_query($link,"update products set description='$desci' where id='$id'"))
	   {
	    echo "Description Updated Successfully";
	   }
	else
	   {
	   echo "Could not update Description";
	   }
}

?>
<br>
<br>
<a href="adminpage.php">Go back to Admin Panel</a>