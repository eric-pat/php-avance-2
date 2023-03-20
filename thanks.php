<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// nettoyage et validation des données soumises via le formulaire
    if (!isset($_POST['firstname']) || trim($_POST['firstname']) === '')
        echo $errors[] = "Le prénom est obligatoire";
    if (!isset($_POST['lastname']) || trim($_POST['lastname']) === '')
        $errors[] = "Le nom est obligatoire";
    if (!isset($_POST['email']) || trim($_POST['email'] || filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) === '')
        $errors[] = "L'email est obligatoire";
    if (!isset($_POST['phone']) || trim($_POST['phone']) === '')
        $errors[] = "Le numéro de téléphone est obligatoire";
    if (!isset($_POST['subject']) || trim($_POST['subject']) === '')
        $errors[] = "Le sujet est obligatoire";
    if (!isset($_POST['message']) || trim($_POST['message']) === '')
        $errors[] = "Le message est obligatoire";

// Vérifier si le formulaire est soumis
    if (isset($_POST['submit'])) {
        /* récupérer les données du formulaire en utilisant
           la valeur des attributs name comme clé
          */
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    }
    // afficher le résultat
    echo 'Merci ' . $firstname . ' ' . $lastname . ' de nous avoir contacté à propos de ' . $subject . "." . '<br>';
    echo 'Un de nos conseillers vous contactera soit à l’adresse ' . $email . ' ou par téléphone au ' . $phone . ' dans les plus brefs
	délais pour traiter votre demande : ';
    echo $message;
}




