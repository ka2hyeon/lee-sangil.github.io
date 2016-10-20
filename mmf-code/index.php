<?
  $release = file_get_contents("MMF_Software_Release_Agmt.html");
  $releaseDated = str_replace("TODAY",date('l jS \of F Y'),$release);
  echo $releaseDated;
?>

<form method="post" action="download.php">
  <center>
<p style="font-size: 18px;">
Please enter your full name and email address so we can keep you posted about updates to the code:
</p>
  <table style="font-size: 20px; border-collapse:none;">
    <tr>
    <td style="border:none;">Name:</td>
    <td style="border:none;"><input type="text" name="uname" style="font-size: 20px"></td>   
    <td style="border:none; width:50px"></td>
    <td style="border:none;">Email:</td>
    <td style="border:none;"><input type="text" name="email" style="font-size: 20px"></td>    
  </tr> 
  </table>
<p>
  <center>
    <input style="width: 500px; height:35px; font-size: 20px; " type="submit" name="submit" value="Accept Terms and Proceed to Download">
  </center>
</p>
  </center>
</form>
