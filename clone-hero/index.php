<?php
  $user_name = htmlspecialchars($_POST['user_name']);
  $user_email= htmlspecialchars($_POST['user_email']);
  $user_question= htmlspecialchars($_POST['user_question']);
  echo  $user_name, ' ', $user_email, ' ', $user_question; ?>
    

<html> 

<head>
    <link rel="stylesheet" href="css/php.css">
    <link rel="stylesheet" href="css/body.css">
<meta name="PHP" content="HTML">
</head>
<body>

<div id="errormsg"> oops, Something Went Wrong </div>




      <a class="back-button" href="../index.html">Back To Websites</a>



</body>
</html>


