<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>PIN Authentication</h2>
    
    <!-- 5. Display the dynamic message variable -->
    <p><strong>Status:</strong> <?php echo $message; ?></p>

    <!-- 6. The HTML Form for user input -->
    <form method="POST" action="">
        <label for="user_pin">Enter PIN:</label>
        <input type="password" id="user_pin" name="user_pin" required>
        <button type="submit">Verify</button>
    </form>
   <?php
   echo "helloworld";
   $x=5;
   $y="apple";
   $z=$x.$y;
   print$z;
   $pin=1122;
   switch($pin){
    case 1122:
        echo "correct";
        break;
    case 0:
        echo "enter pin";
        break;
    default:
        echo "wrong pin";        
   }
   ?>
</body>
</html>