<?php
$insert=false;
if(isset($_POST['submit'])){

    $sendercontact=$_POST['sender'];
    $recievercontact=$_POST['reciever'];
    $date=$_POST['date'];
    $duration=$_POST['duration'];

    if(empty($sendercontact) ||  empty($recievercontact) || empty($date) || empty($duration)){
        header('location:call.php?error');

    }else{
    $server="localhost";
    $username="root";
    $password="";

    $con= mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());

    }
    
    $sql = "INSERT INTO `autowork`.`call log` ( `Call made from`, `Call recieved to`, `Date of call`, `Call Duration`) VALUES ('$sendercontact', '$recievercontact', '$date', '$duration');";
    //echo $sql;

    if($con->query($sql)==true){
        //echo "Succesfully saved";
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
    <title>INITIATE CALL</title>
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
              $sch="Your call has been initiated and details are saved in log. Thank You !!";
           //echo "<p>Your call has been initiated and details are saved in log. Thank You. </p>";
          }
           ?> 
           <span class="success"><?php echo '<div>'.$sch.'</div>'; ?> </span>
        <h2>Enter the details to Initiate a call</h2>
        <?php
          $msg="";
          if(isset($_GET['error'])){
              $msg="Please fill all the details.";
            
          }
          ?>
          <span class="error"><?php echo '<div>'.$msg.'</div>'; ?> </span>
          <hr>
        <form action="call.php" method="POST">
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
            <label for="date">Date of call:</label>
            <input type="date" class="form-control" id="date" placeholder="date of call" name="date">
            <span class="error">*</span>
          </div>
          <div class="form-group">
            <label for="time">Call Duration:</label>
            <input type="time" class="form-control" id="time" placeholder="Duration of call" name="duration">
            <span class="error">*</span>
          </div>
          
          <button type="submit" class="btn btn-primary" name="submit">INIATIATE CALL</button>
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
