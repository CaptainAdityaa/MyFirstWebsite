<?php

if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['Message'];

  $mailto = "billionaire630@gmail.com";
  $headers = "From :".$mailFrom;
  $txt = "Ek email ay ah bhai ye..".$name.".\n\n".$message;

  mail($mailto, $txt, $headers);
  header(Location : index.php?mailsend);
}
