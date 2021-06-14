<?php
  $link = mysqli_connect("shareddb-o.hosting.stackcp.net", "usersdetails-31303954a5", "|+H/=In?x2J}", "usersdetails-31303954a5");

        if (mysqli_connect_error()) {

            die ("Database Connection Error");

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

    <title>ChooseOp</title>
<style>

    html {

          background: url(images/ml.jpg)  no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          margin-top:40px;
          }
#add{
padding:40px;
position:absolute;
width:50%;
}
</style>
<?php
if(isset($_POST["addressdetails"]))
{
if($_GET["action"] == "adds")
{
 $dataset=$_POST['data'];
	$operation=$_POST['op1'];

 if(mysqli_query($link,"insert into algo  values('$dataset','$operation')"))
	   {

	   }
	else
	   {
	   echo "Some error Occured!";
   }
}
}
?>

  </head>
  <body>
<div id="add">
  <div class="alert alert-primary" role="alert">
  File chosen by user is <?php echo $_POST['data']; ?>
</div>
<div class="alert alert-primary" role="alert">
  Technique chosen by user is <?php echo $_POST['op1']; ?>
</div>

	<form method="post" action="kmeans.php?action=adds">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Enter the value of 'n'!</label>
      <input  name="number" class="form-control" id="inputEmail4" placeholder="Number of data you want to use.">
    </div>

  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail5">Enter the number of clusters !</label>
      <input  name="cluster" class="form-control" id="inputEmail5" placeholder="1,2,3...">
    </div>

  </div>



  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Proceed Further :)
      </label>
    </div>
  </div>
  <button type="submit" name="addressdetails" class="btn btn-success">Implement K Means</button>
</form>

<a href="rpsloginpage.php">Go back to Login Page!</a>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
