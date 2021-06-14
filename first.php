<?php
 if($_GET)
 {
       $i=2;
       $isprime = true;
       while($i < $_GET['number'])
       {
            if($_GET['number']% $i==0)
            {
                $isprime = false;
            }
            $i++;
       }
    if($isprime)
    {
        echo "<p>".$i."is a prime number</p>";
    }
    else
    echo "<p>".$i."is not a prime number</p>";
 }
 ?>
 <p> Please Enter a Whole Nmumber</p>
 <form>
  <input name="Number" type="text">
  <input type="submit" value="Go!">
  </form>