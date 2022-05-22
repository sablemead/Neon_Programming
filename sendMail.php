<?php


if(isset($_POST['submit'])) {
$to = "swilliams15@rams.umobile.edu"; 					

//getting customer data
$superhero $_POST['superhero'];        					
$dessert $_POST['dessert'];        				
$starwars $_POST['starwars']; 						
$CustEmail $_POST['email'];						
$subject = "Results Received";					
$subject2 = "Thank you!";				 


$message = "Favorite superhero: " . $superhero . "\n Favorite icecream:" . $dessert . "\n Hot dogs or Hamburgers:"
 . $food . "\n Email: " . $CustEmail . "\n" ;




$message2 = "Thank you for submitting! ";


$headers = "From: " . $CustEmail; 
$headers2 = "From: " . $to; 



$result1 = mail($to, $subject, $message, $headers); 
$result2 = mail($CustEmail, $subject2, $message2, $headers2); 

if ($result1 && $result2) {
	$success = "Your results were sent successfully!";
}
else {
	$failed = "Sorry! Results were not sent. Try again.";
}

}

?>