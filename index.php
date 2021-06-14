<?php 
mysqli_connect("shareddb-r.hosting.stackcp.net","kundanmani-313233c185","asdfghjkl123");

if(mysqli_connect_error())
{
    echo connection not successful;
}
else{
    echo connection successful;
}

?>