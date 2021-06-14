
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
	<form method="post" action="address.php?action=addr">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="mail" class="form-control" id="inputEmail4" placeholder="Email">
    </div>

  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="add1" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" name="add2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>

    <div class="form-group">
      <label for="inputCity">City</label>
      <input type="text" name="city" class="form-control" id="inputCity">
    </div>
    <div class="form-group">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Bengal</option>
        <option>Bihar</option>
  <option>Jharkhand</option>
  <option>odisa</option>
  <option>UP</option>
      </select>
    </div>
    <div class="form-group">
      <label for="inputZip">Zip</label>
      <input type="text" name="zip" class="form-control" id="inputZip">
    </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" name="address_details" class="btn btn-success">Check Out</button>
</form>
<?php
if(isset($_POST["address_details"]))
{
if($_GET["action"] == "addr")
{


					if(!empty($_SESSION["shopping_cart"]))
					{
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
							$pro_id=$values["item_id"];
						}
					}


 $email=$_POST['mail'];
	$address=$_POST['add1'];
	$address2=$_POST['add2'];
	$code=$_POST['zip'];
 if(mysqli_query($link,"insert into address  values('$pro_id','$email','$address','$address2','$code')"))
	   {
	    echo "Order Placed Successfully";
	   }
	else
	   {
	   echo "Could not place order";
	   }


}

}
?>
<a href="shopping.php">Continue Shopping</a>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
