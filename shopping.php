
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
  #electronics{
    display:none;
    position:absolute;
    width:1125px;
    height:375px;
    margin-top:30px;
    margin-left: 119px;
    margin-bottom: -40px;
    background-color:#ECF0F1;
    padding:40px;
    border-radius:25px;
    border:1px black solid;
    z-index:10;
  }
  #appliances{
    display:none;
    position:absolute;
    width:1125px;
    height:375px;
    margin-top:30px;
    margin-left: 119px;
    margin-bottom: -40px;
    background-color:#ECF0F1;
    padding:40px;
    border-radius:25px;
    border:1px black solid;
    z-index:10;
  }

  #men{
    display:none;
    position:absolute;
    width:1125px;
    height:375px;
    margin-top:30px;
    margin-left: 119px;
    margin-bottom: -40px;
    background-color:#ECF0F1;
    padding:40px;
    border-radius:25px;
    border:1px black solid;
    z-index:10;
  }

  #women{
    display:none;
    position:absolute;
    width:1125px;
    height:375px;
    margin-top:30px;
    margin-left: 119px;
    margin-bottom: -40px;
    background-color:#ECF0F1;
    padding:40px;
    border-radius:25px;
    border:1px black solid;
    z-index:10;
  }

  #offer{
    display:none;
    position:absolute;
    width:1125px;
    height:375px;
    margin-top:30px;
    margin-left: 119px;
    margin-bottom: -40px;
    background-color:#ECF0F1;
    padding:40px;
    border-radius:25px;
    border:1px black solid;
    z-index:10;
  }
  #baby{
    display:none;
    position:absolute;
    width:1125px;
    height:375px;
    margin-top:30px;
    margin-left: 119px;
    margin-bottom: -40px;
    background-color:#ECF0F1;
    padding:40px;
    border-radius:25px;
    border:1px black solid;
    z-index:10;
  }

  #sports{
    display:none;
    position:absolute;
    width:1125px;
    height:375px;
    margin-top:30px;
    margin-left: 119px;
    margin-bottom: -40px;
    background-color:#ECF0F1;
    padding:40px;
    border-radius:25px;
    border:1px black solid;
    z-index:10;
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
  #beauty{
    display:none;
    position:absolute;
    width:1125px;
    height:375px;
    margin-top:30px;
    margin-left: 119px;
    margin-bottom: -40px;
    background-color:#ECF0F1;
    padding:40px;
    border-radius:25px;
    border:1px black solid;
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
	<a  class="top-menu" href="loginpage.php" >Login & Signup</a>
	 
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

 <p> <a id="cart" class="top-menu" href="cart.php"> Cart</a><p>
 <img id="cart-img" src="images\pngtree-add-icon-isolated-on-abstract-background-png-image_1854790.jpg" width=40px height=26px>
	</div>
</div>

<div id="Items-container">
<div id="Items">
<a id="elec" class="item" href="">Electronics</a>
<a id="app" class="bord item" href="">TVs & Appliances</a>
<a id="mens" class="bord item" href="">Men</a>
<a id="womens" class="bord item" href="">Women</a>
<a id="babies" class="bord item" href="">Baby & Kids</a>
<a id="sport" class="bord item" href="">Sports,Books and More</a>
<a id="offers" class="bord item" href="">Offer Zone</a>
<a id="beauties" class="bord item" href="myorders.php">My Orders</a>
</div>
</div>

<div class="clear" id="ad-image
<div  class="container">
  <div id="electronics">
  <ul class="limheight">
<li><a href="">Mobiles    </a></li>
<li><a href="">Mi</a></li>
<li><a href="">Realme</a></li>
<li><a href="">Oppo</a></li>
<li><a href="">Vivo</a></li>
<li><a href="">Honor</a></li>
<li><a href="">Infix</a></li>
<li><a href="">Redmi</a></li>
<li><a href="">Xaomi</a></li>
<li><a href="">Realme 5</a></li>
<li><a href="">Apple</a></li>
<li><a href="">Samsung</a></li>
<li><a href="">Mobile Cases</a></li>
<li><a href="">Headsets</a></li>
<li><a href="">Power Banks</a></li>
<li><a href="">Cards</a></li>
<li><a href="">Chargers</a></li>
<li><a href="">Smart Watches</a></li>
<li><a href="">Bands</a></li>
<li><a href="">Monitors</a></li>
<li><a href="">Laptops</a></li>
<li><a href="">Desktop</a></li>
<li><a href="">DSLR</a></li>
<li><a href="">Compact</a></li>
<li><a href="">Mirrror Lenses</a></li>
<li><a href="">Tripods</a></li>
<li><a href="">Roouters</a></li>
<li><a href="">DTH</a></li>
<li><a href="">Soundbars</a></li>
<li><a href="">Bluetooth</a></li>


    <button id="listbuttonforelectronics" type="button" class="btn btn-primary listbutton">CLOSE</button>
  </ul>
</div>

<div id="appliances">
<ul class="limheight">
  <div class="alert alert-info">
  <strong>Sorry!</strong> There is no products regarding this option.
</div>
  <button id="listbuttonforappliances" type="button" class="btn btn-primary listbutton">CLOSE</button>
</ul>
</div>

<div id="appliances">
<ul class="limheight">
 <li><a href="">AC </a></li>
<li><a href="">Refrigerator</a></li>
<li><a href="">Irrons</a></li>
<li><a href="">Water Purifier</a></li>
<li><a href="">Air Coolers</a></li>
<li><a href="">Vacumm Cleaners</a></li>
<li><a href="">Voltage Stabilizer</a></li>
<li><a href="">Sewing Machines</a></li>
<li><a href="">Fans</a></li>
  <button id="listbuttonforappliances" type="button" class="btn btn-primary listbutton">CLOSE</button>
</ul>
</div>



<div id="men">
<ul class="limheight">
 <li><a href="">Sexual Wellness </a></li>
<li><a href="">casual Shoes</a></li>
<li><a href="">Flip-Flops</a></li>
<li><a href="">Boots</a></li>
<li><a href="">SAndals</a></li>
<li><a href="">Sneakers</a></li>
<li><a href="">Running Shoes</a></li>
<li><a href="">Loafers</a></li>
<li><a href="">Deodrants</a></li>
<li><a href=""Perfumes</a></li>
<li><a href="">Beard Care</a></li>
<li><a href="">Sport Shoes</a></li>
<li><a href="">T shirts</a></li>
<li><a href="">Shiirts</a></li>
<li><a href="">Kurtas</a></li>
<li><a href="">Suits</a></li>
<li><a href="">jeans</a></li>
<li><a href="">Trousers</a></li>
<li><a href="">Cargos</a></li>
<li><a href="">Track pants</a></li>
<li><a href="">Fabrics</a></li>
<li><a href="">Boxers</a></li>
  <button id="listbuttonformen" type="button" class="btn btn-primary listbutton">CLOSE</button>
</ul>
</div>

<div id="women">
<ul class="limheight">
 <li><a href="">Top </a></li>
<li><a href="">T shirts</a></li>
<li><a href="">Dresses</a></li>
<li><a href="">Capries</a></li>
<li><a href="">SAndals</a></li>
<li><a href="">Sneakers</a></li>
<li><a href="">Running Shoes</a></li>
<li><a href="">Leggings</a></li>
<li><a href="">Deodrants</a></li>
<li><a href=""Perfumes</a></li>
<li><a href="">Personal Care</a></li>
<li><a href="">Sport Shoes</a></li>
<li><a href="">Shorts</a></li>
<li><a href="">Skirts</a></li>
<li><a href="">Saree</a></li>
<li><a href="">Suits</a></li>
<li><a href="">Lengerie</a></li>
<li><a href="">Trousers</a></li>
<li><a href="">Cargos</a></li>
<li><a href="">Shapewear</a></li>
<li><a href="">Nightdresses</a></li>
<li><a href="">Hair Dryers</a></li>
  <button id="listbuttonforwomen" type="button" class="btn btn-primary listbutton">CLOSE</button>
</ul>
</div>

<div id="baby">
<ul class="limheight">
  <li><a href="">Polos</a></li>
<li><a href="">Ethnic</a></li>
<li><a href="">Dresses</a></li>
<li><a href="">Sport Shoes</a></li>
<li><a href="">SAndals</a></li>
<li><a href="">Sneakers</a></li>
<li><a href="">Sunglasses</a></li>
<li><a href="">Loafers</a></li>
<li><a href="">Deodrants</a></li>
<li><a href=""Perfumes</a></li>
<li><a href="">Remote Cars/a></li>
<li><a href="">Sport Shoes</a></li>
<li><a href="">T shirts</a></li>
<li><a href="">Shiirts</a></li>
<li><a href="">Kurtas</a></li>
<li><a href="">Suits</a></li>
<li><a href="">jeans</a></li>
<li><a href="">Trousers</a></li>
<li><a href="">Cargos</a></li>
<li><a href="">Track pants</a></li>
<li><a href="">Fabrics</a></li>
<li><a href="">Boxers</a></li>
  <button id="listbuttonforbaby" type="button" class="btn btn-primary listbutton">CLOSE</button>
</ul>
</div>

<div id="sports">
<ul class="limheight">
    <div class="alert alert-info">
  <strong>Sorry!</strong> There is no products regarding this option.
</div>
  <button id="listbuttonforsports" type="button" class="btn btn-primary listbutton">CLOSE</button>
</ul>
</div>


<div id="offer">
<ul class="limheight">
  <div class="alert alert-info">
  <strong>Sorry!</strong> There is no products regarding this option.
</div>
  <button id="listbuttonforoffer" type="button" class="btn btn-primary listbutton">CLOSE</button>
</ul>
</div>

<div id="beauty">
<ul class="limheight">
  <li><a href="">Eyeliner</a></li>
<li><a href="">Foundation</a></li>
<li><a href="">Maskara</a></li>
<li><a href="">Sport Shoes</a></li>
<li><a href="">Lipstic</a></li>
<li><a href="">kajal</a></li>

  <button id="listbuttonforbeauty" type="button" class="btn btn-primary listbutton">CLOSE</button>
</ul>
</div>




<div id="demo" class="carousel slide" data-ride="carousel">


  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
	<li data-target="#demo" data-slide-to="3"></li>
  </ul>


  <div class="carousel-inner">

    <div class="carousel-item active">

      <img src="images\va527h-i.jpg" alt="prodump sale" width="1500" height="450">
    </div>
    <div class="carousel-item">
      <img src="images\e0k634-i_1.jpg" alt="offer" width="1500" height="450">
    </div>
    <div class="carousel-item">
      <img src="images\0c8c7ae8-9e83-449e-ba4a-f992ba5947e41562222307722-Women-Desktop-Slider-StaticPage-1300X470.jpg" alt="yeah..geting out of stock" width="1500" height="450">
    </div>
	<div class="carousel-item">
      <img src="images\Unisex-WebBanner-eHW4g1.jpg" alt="yeah..geting out of stock" width="1500" height="450">
    </div>
  </div>


  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</div>
<div class="clear"> </div>
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
				<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
					<div class="floating" style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" >
							<img src="images/<?php echo $row["image"]; ?>" width="250px" height="300px"" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						
						<div id="descri">
						<p id="desc"><?php echo $row["description"]; ?></p><br>
						</descri>
						<br><h4 class="text-danger">Rs <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>

<script type="text/javascript">
  //electronics
var enterHandlerforelectronics = function(){
   $("#electronics").show();
};

var leaveHandlerforelectronics = function(){
   $("#electronics").hide();
};
$("#elec").hover(function(){
  $("#electronics").css("display","block");
  $("#sports").css("display","none");
  $("#beauty").css("display","none");
  $("#offer").css("display","none");
  $("#women").css("display","none");
  $("#baby").css("display","none");
  $("#appliances").css("display","none");
  $("#men").css("display","none");
});

$("#listbuttonforelectronics").click(leaveHandlerforelectronics);
//appliances
var enterHandlerforappliances = function(){
   $("#appliances").show();
};

var leaveHandlerforappliances = function(){
   $("#appliances").hide();
};
$("#app").hover(function(){
  $("#appliances").css("display","block");
  $("#sports").css("display","none");
  $("#beauty").css("display","none");
  $("#offer").css("display","none");
  $("#women").css("display","none");
  $("#baby").css("display","none");
  $("#electronics").css("display","none");
  $("#men").css("display","none");
});
$("#listbuttonforappliances").click(leaveHandlerforappliances);

//men
var enterHandlerformen = function(){
   $("#men").show();
};

var leaveHandlerformen = function(){
   $("#men").hide();
};
$("#mens").hover(function(){
  $("#men").css("display","block");
  $("#sports").css("display","none");
  $("#beauty").css("display","none");
  $("#offer").css("display","none");
  $("#women").css("display","none");
  $("#baby").css("display","none");
  $("#electronics").css("display","none");
  $("#appliances").css("display","none");
});
$("#listbuttonformen").click(leaveHandlerformen);

//women
var enterHandlerforwomen = function(){
   $("#women").show();
};

var leaveHandlerforwomen = function(){
   $("#women").hide();
};
$("#womens").hover(function(){
  $("#women").css("display","block");
  $("#sports").css("display","none");
  $("#beauty").css("display","none");
  $("#offer").css("display","none");
  $("#men").css("display","none");
  $("#baby").css("display","none");
  $("#electronics").css("display","none");
  $("#appliances").css("display","none");
});
$("#listbuttonforwomen").click(leaveHandlerforwomen);
//baby
var enterHandlerforbaby = function(){
   $("#baby").show();
};

var leaveHandlerforbaby = function(){
   $("#baby").hide();
};
$("#babies").hover(function(){
  $("#baby").css("display","block");
  $("#sports").css("display","none");
  $("#beauty").css("display","none");
  $("#offer").css("display","none");
  $("#men").css("display","none");
  $("#women").css("display","none");
  $("#electronics").css("display","none");
  $("#appliances").css("display","none");
});
$("#listbuttonforbaby").click(leaveHandlerforbaby);

//sport
var enterHandlerforsports = function(){
   $("#sports").show();
};

var leaveHandlerforsports = function(){
   $("#sports").hide();
};
$("#sports").hover(function(){
  $("#sport").css("display","block");
  $("#baby").css("display","none");
  $("#beauty").css("display","none");
  $("#offer").css("display","none");
  $("#men").css("display","none");
  $("#women").css("display","none");
  $("#electronics").css("display","none");
  $("#appliances").css("display","none");
});
$("#listbuttonforsports").click(leaveHandlerforsports);



var enterHandlerforoffer = function(){
   $("#offer").show();
};

var leaveHandlerforoffer = function(){
   $("#offer").hide();
};
$("#offers").hover(function(){
  $("#offer").css("display","block");
  $("#baby").css("display","none");
  $("#beauty").css("display","none");
  $("#sports").css("display","none");
  $("#men").css("display","none");
  $("#women").css("display","none");
  $("#electronics").css("display","none");
  $("#appliances").css("display","none");
});
$("#listbuttonforoffer").click(leaveHandlerforoffer);
</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
