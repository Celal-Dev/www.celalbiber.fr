<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$erreur= '';

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
?>

<?php
if($_POST){

if(!isset($_POST['nom'])) {
    $erreur .= '<div style=" background-color:red; color:white; font-size :20px; text-align:center; padding:10px; display: flex;flex-direction: column;justify-content: center; margin-top: 15px; margin-bottom :15px; ">CHAMPS NOM DOIT ÊTRE RENSEIGNER</div>';
}

if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
    $erreur .= '<div style=" background-color:red; color:white; font-size :20px; text-align:center; padding:10px; display: flex;flex-direction: column;justify-content: center; margin-top: 15px; margin-bottom :15px; ">CHAMPS EMAIL DOIT ÊTRE RENSEIGNER</div>';
} 

if(empty($_POST['telephone'])  ){
    $erreur .= '<div style=" background-color:red; color:white; font-size :20px; text-align:center; padding:10px; display: flex;flex-direction: column;justify-content: center; margin-top: 15px; margin-bottom :15px; ">CHAMPS TELEPHONE DOIT ÊTRE RENSEIGNER</div>';
}

if(!isset($_POST['description'])){
  $erreur .= '<div style="background-color:red; color:white; font-size :20px; text-align:center; padding:10px; display: flex;flex-direction: column;justify-content: center; margin-top: 15px; margin-bottom :15px; ">CHAMPS DESCRIPTION DOIT ÊTRE RENSEIGNER</div>';
}

if(empty($erreur)){

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $nom = isset($_POST['nom']) ? $_POST['nom'] : 'Non spécifié';
    $email = isset($_POST['email']) ? $_POST['email'] : 'Non spécifié';
    $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : 'Non spécifié';
    $description = isset($_POST['description']) ? $_POST['description'] : 'Non spécifié';

    // Préparer le message
    $message = "Nom : " . $nom . "\n";
    $message .= "Email : " . $email . "\n";
    $message .= "Téléphone : " . $telephone . "\n";
    $message .= "Description : " . $description;

    $mail = new PHPMailer(true);

    try {
        // Configurations du serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'cbiber.dev@gmail.com';
        $mail->Password = 'jqwy zqqq hbkg nbiy';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Destinataires
        $mail->setFrom('from@example.com', 'Contact - Portfolio');
        $mail->addAddress('cbiber.dev@gmail.com');

        // Contenu du mail
        $mail->isHTML(true);
        $mail->Subject = 'Contact - Portfolio';
        $mail->Body = nl2br($message);  // nl2br pour conserver les sauts de ligne
        $mail->AltBody = strip_tags($message);

        $mail->send();

        header("Location: confirmation.php");

        // annonce message envoyer :


        
    } catch (Exception $e) {}
}

}
}

?>