
<?php
    if(isset($_POST["submit"]))
    {
       include 'connection.php';
       $id=$_POST['id'];

       $query=" UPDATE user SET username = '$username', password='$password' WHERE ID =$id; ";
	   $result=mysqli_query($connection,$query);

	   if (!$result) {
	   die('query failled');
	      
	          }

	 }  


  ?>


  <!DOCTYPE html>
  <html>
     <head>
          <title>login</title>	
          <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     </head>

     <body>
     	<div class="container">
     		<div class="col-sm-6">
     			<form action="update.php" method="post">

                         <label for="id">give id for update data</label>
                         <input type="text" name="id" class="form-control">
                         <div/>

                         <br>
     				<div class="form-group">
     				<label for="username" >User Name</label>
     				<input type="text" name="username" class="form-control">
     				<div/>
     				<div class="form-group">
     				<label for="password">Password</label>
     				<input type="password" name="password" class="form-control">
     				<div/>
     				
     				<input type="submit" name="submit" value="SUBMIT" class="btn btn-primary">

     			</form>

     		</div>
     		
     	</div>
     	
     </body>

<html>

