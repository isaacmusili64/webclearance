<?php
 include("functions/functions.php");
 if(isset($_POST['login'])){
    login();
  }
 if(isset($_POST['forgotpass'])){
   recoverpass();
  }
?>
<html><head><title></title></head>
<body>
<form method="post" action="">
<input  name=username type=text></br>
<input type=password name=password>
<input type=submit name=login>
</form>
</body>
