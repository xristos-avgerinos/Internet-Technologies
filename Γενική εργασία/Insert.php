<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";
// Δημιουργία σύνδεσης
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Έλεγχος σύνδεσης
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
//ορισμός charset της σύνδεσης ώστε να παρουσιάζονται τα ελληνικά σωστά
mysqli_set_charset($conn, "utf8");
$username = $_POST['username'];
$password = $_POST['psw'];
$flname = $_POST['name'];
$E_mail = $_POST['email'];
$hlikia = $_POST['hlikia'];
$birth = $_POST['birth_date'];
$address = $_POST['dieythinsi'];
$payment= $_POST['payment'];
$comment = $_POST['comments'];
$sql = "INSERT INTO myform1(username, password, name, email, hlikia, birth, address, payment, comment)
VALUES ('$username','$password','$flname','$E_mail','$hlikia','$birth','$address','$payment','$comment');";
//echo $sql;
if (!mysqli_query($conn,$sql))
{
echo 'Ούπς! Κάτι πήγε στραβά με την αγορά σας.';
}
else
{
echo 'Η αγορά σας ολοκληρώθηκε με επιτυχία!!!';
} 
header ("refresh:5;  url=genikh.html");
//κλείσιμο σύνδεσης
mysqli_close($conn);
?>