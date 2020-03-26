<?php 

$fName = "Full name:".$_POST['fullName']."
";
$adress = "Adress:".$_POST['adress']."
"; 
$email = "Email:".$_POST['email']."
";
$phone = "Phone:".$_POST['phone']."
";  
$message = "message:".$_POST['message']."
"; 
$names=$_POST['fullName']. ".txt";
if (file_exists($names))  
{ 
    echo "The user" ." ". $_POST['fullName'] . " " . "already exists try another name"; 
}else{
    $file = fopen($names, 'w') or die('fopen failed');
    fwrite($file, $fName) or die('fwrite failed');
    fwrite($file, $adress) or die('fwrite failed');
    fwrite($file, $email) or die('fwrite failed');
    fwrite($file, $phone) or die('fwrite failed');
    fwrite($file, $message) or die('fwrite failed');
    fclose($file);
    echo "Succesfull";
} 
?>

