
<?php

    session_start();

   

    if (array_key_exists("id", $_SESSION)) {
  

  $link = mysqli_connect("shareddb-o.hosting.stackcp.net", "usersdetails-31303954a5", "|+H/=In?x2J}", "usersdetails-31303954a5");

        if (mysqli_connect_error()) {

            die ("Database Connection Error");

        }
        

    } else{
        header("Location: adminlogin.php");
    }


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" type="images/png" href="images\84059075-letter-p-logo-red-star-sign-branding-identity-corporate-unusual-logo-design-template.jpg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script type="text/javascript" src="C:\Users\Om Computer\Documents\Web Developer\jquery-3.4.1.min.js"></script>
    <title>proDump</title>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <style type="text/css">
    
#prod{
width:100%;
padding:20px;
}
.floating{
float:left;
  padding: 10px;
    margin-bottom: 30px;
     margin-right: 30px;
}
#descri{
height:300px;
width:256px;
}
#frm{
margin-left:20px;
}

  </style>
 </head>
  <body>

<?php if (!array_key_exists("id", $_SESSION)) {?>
<div class="alert alert-info rit">
  <strong>Not yet Logged In!</strong> Login  first to see products and start ordering. Click on Login & SignUp.
</div>
<?php } ?>
 <?php if (array_key_exists("id", $_SESSION)) {?>
<nav class="navbar navbar-light clr navbar-fixed-top site">
  

  

<p><span id="green">Logged in!</span><span id="weight"> Log out first to login with other account<span>.</p>    <div class="pull-xs-right">
      <a href ='adminlogin.php?logout=1'>
        <button class="btn btn-success width" type="submit"><span>Logout</span></button></a>
    </div>


</nav>
<?php } ?>
<form id="frm"method="post" action="addproducts.php">
						<input type="submit" name="add_products" style="margin-top:5px;" class="btn btn-primary" value="Add Products To Site" />
						</form>
<div id="prod">
			
			<?php
				$query = "SELECT * FROM products ORDER BY id ASC";
				$result = mysqli_query($link, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div >
				<form method="post" action="deleteproduct.php?action=delete&pro_id=<?php echo $row["id"]; ?>">
					<div class="floating" style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" >
							<img src="images/<?php echo $row["image"]; ?>" width="250px" height="300px"" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						<div id="descri">
						<p><?php echo $row["description"]; ?></p><br>
						

						<br><h4 class="text-danger">Rs <?php echo $row["price"]; ?></h4>

					

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="delete_product" style="margin-top:5px;" class="btn btn-primary" value="Delete Product" />
					
					</div>
				</form>
<form method="post" action="updatedesc.php?pro_id=<?php echo $row["id"]; ?>">
						<input type="submit" name="update_desc" style="margin-top:5px;" class="btn btn-primary" value="Update Description" />
						</form>
</div>
			</div>
			<?php
					}
				}
			?>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
