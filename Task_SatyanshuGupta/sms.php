<?php
$insert=false;
if(isset($_POST['submit'])){
    
    
    $sendercontact=$_POST['sender'];
    $recievercontact=$_POST['reciever'];
    $message=$_POST['message'];
    if(empty($sendercontact) || empty($recievercontact) || empty($message)){
        header('location:sms.php?error');
    }else{


    $server="localhost";
    $username="root";
    $password="";

    $con= mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());

    }

    $recievercontact='91'.$_POST['reciever'];
    $sql = "INSERT INTO `autowork`.`sms log` (`Sender Contact`, `Reciever Contact`, `Date and Time`) VALUES ('$sendercontact', '$recievercontact', current_timestamp());";
    
    //API INTEGRATION:
    $apiKey = urlencode('t9e3wxJxlPM-dsgzgMDX7BMs3yptpEYSE4G3S8o9k2');
	// Message details
	$numbers = array($recievercontact);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($message);
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	// Process your response here
    echo $response;
    
       
    if($con->query($sql)==true){
    
        $insert=true;
        
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
}

 
    $con->close();

 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEND SMS</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .error {color: #FF0000;}
    .success {color: #008000;}
  </style>

  
</head>
<body>
    <header class="text-gray-700 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a href="index.html" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">HOME</span>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900">Welcome On Board</a>
            
          </nav>
         
        </div>
      </header>

      <div class="container">
          <?php
          $sch="";
          if($insert==true){
              $sch="Your message has been sent and a record is maintained. Thank You !!!";
              //echo "<p>Your message has been sent and a record is maintained. Thank You. </p>";

          }
          ?>
          <span class="success"><?php echo '<div>'.$sch.'</div>'; ?> </span>
        <h2>Enter the details to send the SMS</h2>
        <?php
          $msg="";
          if(isset($_GET['error'])){
              $msg="Please fill all the details.";
            
          }
          ?>
          <span class="error"><?php echo '<div>'.$msg.'</div>'; ?> </span>
          <hr>
        <form action="sms.php" method="POST">
          <div class="form-group">
            <label for="number">Reciever contact number:</label>
            <input type="number" class="form-control" id="reciever" placeholder="Enter reciever's contact number" name="reciever">
            <span class="error">*</span>
          </div>
          <div class="form-group">
            <label for="number">Sender's contact number:</label>
            <input type="number" class="form-control" id="sender" placeholder="Enter sender's contact number" name="sender">
            <span class="error">*</span>
          </div>
          <div class="form-group">
            <label for="pwd">Message:</label>
            <input type="text" class="form-control" id="message" placeholder="Enter your message" name="message">
            <span class="error">*</span>
            
          </div>
          
          <button type="submit" class="btn btn-primary" name="submit">SEND</button>
        </form>
      </div>




    


      <footer class="text-gray-700 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">AutoWork Project</span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 autoworks —
            <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@SatyanshuGupta</a>
          </p>
          
        </div>
      </footer>
</body>
</html>
