<!DOCTYPE html>
 <html>
   <head>
	  <title></title>
      </head>
         <body>
           <form method="post" action="forms.php">
	         email<input type="text" name="email" placeholder="email" required><br></br>
	         password<input type="text" name="password" placeholder="password" required><br></br>
	   <input type="submit" name="submit"><br></br>
     </form>
   </body>
</html>
<?php
   if(filter_has_var(INPUT_POST, "submit"))
     {
	       $email=$_POST['email'];
	       $email=filter_var($email,FILTER_SANITIZE_EMAIL);
	     if(filter_var($email,FILTER_VALIDATE_EMAIL))
	         {
     	        echo "<br>";
     	        echo $email;
     	        echo "<br>";
     	        echo "validated";		
	         }
	     else
	         {
		        echo "<br>";
		        echo "invalidated";
	         }
     }
?>


