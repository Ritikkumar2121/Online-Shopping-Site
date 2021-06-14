
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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Address</title>
<style>

    html { 
          
          background: url(adress.jpg)  no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          margin-top:-40px;
          }
#add{
padding:40px;
position:absolute;
width:50%;
}
</style>
  </head>
  <body>
<div id="add">
<form  method="post" action="addproducts.php?action=add" >
<div class="form-group">
  <label for="it">Item Name</label>
 <input type="text" class="form-control" id="it"name="item">
</div>
<div class="form-group">
  <label for="its" >Price</label>
 <input type="text" class="form-control" id="its" name="pri">
</div>
<div class="form-group">
<label for="de">Description</label>
 <input type="text"  class="form-control"  id="de" name="descri">
</div>
<div class="form-group">
<label for="im">Image</label>
 <input type="text" class="form-control" id="im" name="image">
</div>
<input name="add_products" type="submit">
</form>

<?php
if(isset($_POST["add_products"]))
{
if($_GET["action"] == "add")
{


	  $name=$_POST['item'];
		 $img=$_POST['image'];
 		$price=$_POST['pri'];
 		$desc=$_POST['descri'];
	      if(mysqli_query($link,"insert into products  values('','$name','$img','$price','$desc')"))
	   {
	    echo "Product Added Successfully";
	   }
	else
	   {
	   echo "Could not add product";
	   }

}

}
?>
<br>
<br>
<a href="adminpage.php">Go back to Admin Panel</a>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>