<?php  


    if(isset($_POST["submit"]))
    {

      $username= $_POST["username"];
	  $password= $_POST["password"];

	  if ($username && $password) {
		echo "data passed...";
	  }
	  else{ echo "data not passed..."; }


      $connection= mysqli_connect('localhost','root','root','login');
	
	  if ($connection) {
		 echo "connected";
	  }
	  else{ echo "not connected";}

        
    }

    //include 'create.php';

	?>