
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
if(isset($_POST["delete_product"]))
{
		$id=$_GET['pro_id'];
	  if(mysqli_query($link,"delete from products where id='$id' "))
	   {
	echo "Item Deleted Successfully";
	   }
	else
	   {
	   echo "Item is not deleted";
	   }	
	

}

?>
<br>
<br>
<a href="adminpage.php">Go back to Admin Panel</a>