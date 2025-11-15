<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lightweight</title>
    <style>
        
     body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
     }

     .container {
        position: relative;
        width: 100%;
        height: 100vh;
     }

     .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
     }

    </style>
</head>
<body>
  
<div class="container">
    <div class="content">
        <div class="logo">
            <img src="<?php echo Base_URL; ?>/images/laptop.png" alt="">
        </div>
        <div class="text">
            <p><?php echo isset($message) ? htmlspecialchars($message, ENT_QUOTES, 'UTF-8') : ''; ?></p>
        </div>
    </div>
</div>


</body>
</html>