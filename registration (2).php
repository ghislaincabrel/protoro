<?php require_once("includes/connection.php"); ?>
<?php

  if (isset($_POST[‘submitted’])) {
    $errors = array(); // Initialize an error array.

   // Check for a first name:
 if (empty($_POST[‘first_name’])) {
     $errors[] = ‘You forgot to enter your first name.’;
 } else {
     $fist_name= trim($_POST[‘first_name’]);
 }
 // Check for a last name:
 if (empty($_POST[‘last_name’])) {
     $errors[] = ‘You forgot to enter your last name.’;
 } else {
     $last_name= trim($_POST[‘last_name’]);
 }
 // Check for an telepone number:
 if (empty($_POST[‘telephone’])) {
    $errors[] = ‘You forgot to enter your telepone number.’;
 } else {
    $telepone = trim($_POST[‘telephone’]);
 }
 // Check for an email address:
 if (empty($_POST[‘email’])) {
    $errors[] = ‘You forgot to enter your email address.’;
 } else {
    $email = trim($_POST[‘email’]);
 }
 // Check for an date:
 if (empty($_POST[‘date’])) {
    $errors[] = ‘You forgot to enter the date.’;
 } else {
    $date = trim($_POST[‘date’]);
 }
 // Check for a password and match against the confirmed password:
 if (!empty($_POST[‘pass1’])) {
    if ($_POST[‘pass1’] !=$_POST[‘pass2’]) {
    	$errors[] = ‘Your password did not match the confirmed password.’;
    } else {
        $password = trim(sha1($_POST[‘pass1’]);
    }
 } else {
    $errors[] = ‘You forgot to enter your password.’;
 }
 if (empty($errors)) { 
 	$req=$bdd->prepare('INSERT INTO registration(first_name,last_name,phone,email,date,password,date_of_inscrition)
    VALUES(:first_name, :last_name, :telephone, :email, :date, :password ,CURDATE())') ;
    $req->execute(array(
                        'first_name'=>$first_name,
                        'last_name'=>$last_name,
                        'phone'=>$telephone  ,
                        'email'=>$email,
                        'date'=>$date,
                        'password'=>$password )) or die(print_r($req->errorInfo()));
     if ($req) {
         $message = "Votre compte a bien ete creer ";
    } else {
         $message = "ERROR ERROR ERROR ";
    }
 } else { 
 	
 } // End of if (empty($errors)) IF.
} // End of the main Submit conditional.
 ?>