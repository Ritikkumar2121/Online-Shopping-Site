
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
    #Items-container{
	background-color:#F3ED15;
	height:40px;
	width:100%;
	float:left;
	margin-top:-26px;
	}
#descri{
height:300px;
width:250px;
}
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
#desc{
font-weight:normal;
color:black;
}
	a{
	color:black;
	}

	a:hover{
	color:green;
  text-decoration:none;
	}

	#body{
	padding:0;
	margin:0;
	}

	.item{
	font-weight:bold;
	float:left;
	margin-top:5px;
	font-size:20px;
	margin-right:10px;
  position:relative;
	}

	.bord{
	margin-right:10px;
	padding:0px 10px;
	border-left:1px black solid;

	}

	#Items{
	width:1200px;
	margin:0 auto;
	height:100px;
	}

	#cart-img{
	float:left;
	margin-top:27px;
	margin-left:-24px;
	}

#ord{
float:left;
}
	#more-but{
	float:left;
	}

	.clear{
	clear:both;
	}

	#topbar-container{
	height:70px;
	width:100%;
	background-color:black;

	}

	#topbar{
	width:1200px;
	margin:0 auto;
	height:100px;
	}

	#logo{
	margin-bottom:20px;
	float:left;
	}

	#search-box{
	width:400px;
	float:left;
	margin-top:20px;
	padding:5px;
	border-radius:40px;
	border-left:25px white solid;
	}

	p{
	font-weight:bold;
	font-color:#FFFFFF;
	float:left;
	}

	.search-btn{
	margin-top:27px;
	margin-left:-35px;
	float:left;
	width:20px;
	height:30px;
	background:white;
	}

	.top-menu{
	font-weight:bold;
	font-size:20px;
	color:#FDFEFE;
	padding:25px;
	margin-left:35px;
	float:left;
	}

	.top-more{
	font-weight:bold;
	color:#FDFEFE;
	margin-top:18px;
	font-size:20px;
	
	}

	#cart{
	float:left;
	margin-left:-5px;
	}

.clr{
    background-color:#F3ED15;
height:40px;
}
#popup{
  display:none;
  position:absolute;
  width:100%;
  height:45px;
  z-index:10;
}

  .listbutton{
    margin-top:200px;
    margin-left:960px;
  }
  ul {
  list-style-type: none;
}
#para{
  float:right;
  font-size:40px;
  transform:rotate(45deg);
  margin-top:-20px;
}
.limheight {
    height: 375px; /*your fixed height*/
    -webkit-column-count: 1;
       -moz-column-count: 1;
            column-count: 1; /*3 in those rules is just placeholder -- can be anything*/
}

.limheight li {
    display:inline-block; /*necessary*/
}
#weight{
font-weight:normal;
}
#green{
color:green;

margin-left:500px;}
.width{
margin-top:-20px;
height:32px;
}
.rit{
margin-bottom:-1px;
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
  
  

<p><a href="adminlogin.php">Login as Admin</a><span id="green">Logged in!</span><span id="weight"> Log out first to login with other account<span>.</p>    <div class="pull-xs-right">
      <a href ='loginpage.php?logout=1'>
        <button class="btn btn-success width" type="submit"><span>Logout</span></button></a>
    </div>

</nav>
<?php } ?>
<div id="topbar-container">
	<div id="topbar">
	<a href="shopping.php"><img id="logo" type="jpg/png" src="images\onlinelogomaker-102519-2043-5112.png" width="275px"></a>
	
	<input id="search-box" type="text" placeholder="Search  for products,brands and more">
	<a class="search-btn" href="#">
	<i class="fa fa-search"></i>
	</a>
	<a  class="top-menu" href="" >Login & Signup</a>
	 
     <div id="more-but" class="dropdown ">
    <button type="button" class="btn " data-toggle="dropdown">
     <p class="top-more">Admin</p>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Sell on proDump</a>
      <a class="dropdown-item" href="#">Advertise</a>
      <a class="dropdown-item" href="#">Customer Care</a>
    </div>
  </div>

 <p> <a id="cart" class="top-menu" href=""> Cart</a><p>
 <img id="cart-img" src="images\pngtree-add-icon-isolated-on-abstract-background-png-image_1854790.jpg" width=40px height=26px>
	</div>
<h2 id="ord">My Orders :</h2><br>
<br>
<br>
<?php
				$query = "SELECT * FROM address";
				$result = mysqli_query($link, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div >
						
					<?php $ro=  $row["id"]; ?>
						Given Email:<h4 class="text-info"><?php echo $row["email"]; ?></h4>
							<br>Product ID:<h4 class="text-danger"><?php echo $row["id"]; ?></h4>
						<br>Address 1:<h4 class="text-danger">Rs <?php echo $row["add1"]; ?></h4>
						<br>Address 2:<h4 class="text-danger">Rs <?php echo $row["add2"]; ?></h4>
						<br>Zip Code:<h4 class="text-danger">Rs <?php echo $row["code"]; ?></h4>
	<br>Product Details:<br>
						<?php
				$queri = "SELECT * FROM products where id='$ro'";
				$results = mysqli_query($link, $queri);
				if(mysqli_num_rows($results) > 0)
				{
					while($rows = mysqli_fetch_array($results))
					{
				?>
				<div >
					
					<div class="floating" style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" >
							<img src="images/<?php echo $rows["image"]; ?>" width="250px" height="300px"" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $rows["name"]; ?></h4>
						
						<div id="descri">
						<p id="desc"><?php echo $rows["description"]; ?></p><br>
						</descri>
						<br><h4 class="text-danger">Rs <?php echo $rows["price"]; ?></h4>

						

					</div>
				
		
			<?php
					}
				}
			?>
						

					</div>
				
			
			<?php
					}
				}
			?>


   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>