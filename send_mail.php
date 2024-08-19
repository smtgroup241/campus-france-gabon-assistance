<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $niveau = htmlspecialchars($_POST['niveau']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'smtgroup241@gmail.com';
    $subject = 'Nouveau message de contact';
    $body = "Nom: $nom\nPrénom: $prenom\nNiveau scolaire: $niveau\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email\r\n";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès!";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
} else {
    echo "Méthode de requête invalide.";
}
?>
