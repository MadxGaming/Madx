<?php 
	
	
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
	$fee = $_POST['fee'];
	$mb = $_POST['mb'];
	$to = $_POST['email'];
	$msg = "WELCOME INERNET PROVIDER\n\nUsername  :  ".$name."\nFEE   :   ".$fee."\nINTERNET SPEED   :   ".$mb ;
	$subject = "Thankx for giving Fee";
	$message =	$msg;
	$headers = "From: sgben10.tk";

	if(mail($to, $subject, $message, $headers)){
		$display = "Submited";
	}
	else
	{
		echo "Not Submited";

	}
	}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title></title>
 </head>
 <body> 
        <style>
                body{
                    display: flex;
                    color: white;
                justify-content: center;
                align-items: center;
                flex-direction:  column;
                background: black;
                }
            form{
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction:  column;
                width: 100%;
                align-items: center;
                margin-top: 15%;
                padding: 20px;
            }
            input{
                width: 80%;
                padding: 5px 8px;
                background: none;
                outline: none;
                border: 1px solid white;
                color: white;
                transition: 0.5s;
            }
            input:hover{
                border: 1px solid orange;
            }
            input[type=submit]:hover{
                background: orange;
            }
            
        </style>
 		<form method="POST">
 		    <p><?php echo $display; ?></p>
 		<input type="email" name="email" placeholder="enter a user email" required=""><br>
 		<input type="text" name="name" placeholder="enter a user name" required=""><br>

 		<input type="text" name="fee" placeholder="enter a fee" required=""><br>
 		<input type="mb" name="mb" placeholder="enter a net limit" required=""><br>
 		<input type="submit" name="submit">
 		</form>

 </body>
 </html>
