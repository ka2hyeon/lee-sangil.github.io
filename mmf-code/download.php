<?

/**
 * Download file
 *
 * @param string $path
 * @param string $type
 * @param string $name
 * @param bool $force_download
 * @return bool
 */
function download($path, $name = '', $type = 'application/octet-stream', $force_download = true) {

  if (!is_file($path) || connection_status() !== 0);

  if($force_download) {
    header("Cache-Control: public");
  } else {
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
  }

  header("Expires: ".gmdate("D, d M Y H:i:s", mktime(date("H")+2, date("i"), date("s"), date("m"), date("d"), date("Y")))." GMT");
  header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
  header("Content-Type: $type");
  header("Content-Length: ".(string)(filesize($path)));

  $disposition = $force_download ? 'attachment' : 'inline';

  if(trim($name) == '') {
    header("Content-Disposition: $disposition; filename=" . basename($path));
  } else {
    header("Content-Disposition: $disposition; filename=\"" . trim($name)."\"");
  }

  header("Content-Transfer-Encoding: binary\n");

  if ($file = fopen($path, 'rb')) {
    while(!feof($file) and (connection_status()==0)) {
      print(fread($file, 1024*8));
      flush();
    }
    fclose($file);
  }

  return((connection_status() == 0) && !connection_aborted());
}  


$uname = $_POST["uname"];
$email = $_POST["email"];

// git clone https://github.com/zytzagoo/smtp-validate-email
require('smtp-validate-email/smtp-validate-email.php');

$from = 'smtp_validate@validate.com'; // for SMTP FROM:<> command
$validator = new SMTP_Validate_Email($email, $from);
$smtp_results = $validator->validate();
//var_dump($smtp_results);

if($uname)
{
  if($smtp_results[$email])
  {
    mail("jstraub@csail.mit.edu","download of MMF","There was a download of the
      MMF code by $uname with email $email");
    // give file to download

    //  $release = file_get_contents("./include/MMF_Software_Release_Agmt.html");
    //  $releaseDated = str_replace("TODAY",date('l jS \of F Y'),$release);
    //  
    //  header("Content-Type: application/octet-stream");
    //  header("Content-Disposition: attachment; filename=MMF_Software_Release.txt");
    //  echo $releaseDated

    download("../code/mmf-v1.0.tar.gz","mmf-v1.0.tar.gz","application/zip",true);

    exit;
  }else{
    echo "<p style='font-size=20px;'>Something went wrong!  </p>";
    echo "<p style='font-size=20px;'>Please enter your valid email address.</p>";
    echo "<a href='http://people.csail.mit.edu/jstraub/mmf-code/index.php'>back</a>";
  }
}else{
  echo "<p style='font-size=20px;'>Something went wrong!  </p>";
  echo "<p style='font-size=20px;'>Please enter your name and email address.</p>";
  echo "<a href='http://people.csail.mit.edu/jstraub/mmf-code/index.php'>back</a>";
}

?>

