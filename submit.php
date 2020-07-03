<?php
	
			if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			// variable setting
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
            
			//check input fields
			if (empty($name) ||empty($email) ||empty($message))
			{
				echo "Please fill all the fields";
			}
			else
			{
				$to ="brightcompanyltd@gmail.com"
				mail($to,"Bright Group",$message,"From: $name  <$email>");
				echo "<script type='text/javascript'>alert('Your message sent successfully');
				window.history.log(-1);
				</script>";
			}
		}
	?>