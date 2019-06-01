<?php header('Content-type: text/html; charset=utf-8'); session_start();?>
<?php 

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
die();
    
} 
      $con = mysqli_connect("localhost", "root", "", "cinemania");
        
        $con->set_charset('utf8');
        $username=$_SESSION['user']['KorisnickoIme'];
        $vip = mysqli_query($con, "SELECT * FROM registrovankorisnik WHERE KorisnickoIme='$username'"); 
        $result=$vip->fetch_assoc();
        if($result['VIPKorisnik']!=2){    
                header("Location: index.php");
                die();

        }
?>



<?php


/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;

require '..\php\vendor\autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages


//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port =587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "cinemateam6@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "admin1234#";

//Set who the message is to be sent from
$con = mysqli_connect("localhost","root","","cinemania");
$con->set_charset('utf8');
      $username=$_SESSION['user']['KorisnickoIme'];
        $e_mail = mysqli_query($con, "SELECT * FROM registrovankorisnik WHERE KorisnickoIme='$username'");

 $result=$e_mail->fetch_assoc();
 $user_mail=$result['Email'];
 $ime=$result['Ime'];
 $prezime=$result['Prezime'];
$mail->From=$user_mail;
$mail->FromName=$ime." ".$prezime;
$mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
)
);


//Set who the message is to be sent to
$mail->addAddress('jk160079d@student.etf.bg.ac.rs', 'admin');
$naziv=$_POST['naziv'];
//Set the subject line
$mail->Subject = 'Prijava greske uocene kod filma '.$naziv;
   

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body


//Replace the plain text body with one created manually

$mail->Body =$_POST['opis'];
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    $message=" Uspesno ste prijavili gresku! Hvala sto doprinosite poboljasnju naseg sajta!";
    echo "<script type='text/javascript'>alert('$message'); window.location.href = 'index.php'</script>";
 
}


?>



