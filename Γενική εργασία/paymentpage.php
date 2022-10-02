<!DOCTYPE html>
<html>
<head><title> Σελίδα πληρωμής </title> <meta charset="utf-8">
<style>
/*Χαρακτηριστικά σε πεδία input*/
 input[type="submit"] {color:#3300FF;}
 input[type="reset"] {color:red;}
 strong {color:red;}
 form {background-color:black; margin:0 auto; width:60%; color:white;}
</style>
</head>
<body  style="background-color:	#990033;">
<form name="form" method="POST" action="Insert.php" >
<fieldset>
<legend style="size:font-25pt; color:black; background-color:#FFFFCC; width:103%; text-align:center; font-style:italic; font-weight:bold; font-variant:small-caps; font-size:0.35in;
font-family:courier; ">ΦΟΡΜΑ</legend>
<br>
Τελική χρέωση:
<br><br>
username<strong>*</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <input id="username" type="text" name="username" size="30" required><br><br>
password<strong>*</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <input id="password" type="password" name="psw" size="30" maxlength="10"  required><br><br>
Ονοματεπώνυμο<strong>*</strong> &nbsp; &nbsp; <input  type="text" name="name" size="30"  required><br><br>
E-mail<strong>*</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input id="email" placeholder="xxxxx@gmail.com" type="email" name="email" size="30"  required ><br><br>
Ηλικία<strong>*</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<select multiple name="hlikia" required>
<?php
    for ($i=10; $i<=110; $i++){
        ?>
            <option><?php echo $i;?></option>
        <?php
    }
?>
</select>
<br><br>
Ημερομηνία<strong>*</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input  type="date" name="birth_date" required><br>Γέννησης<br><br>
Διεύθυνση<strong>*</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input  type="text" name="dieythinsi" size="30" required><br><br><br><br>
<fieldset >
<legend  style="size:font-20pt; font-family:arial; color:white; background-color:#ff3333; width:102.7%; text-align:center"> Μεθοδος πληρωμης * </legend>
<label for="payment"> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Αντικαταβολή</label>
<input type="radio" name="payment" value="antikataboli" required>
<label for="payment">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Χρεωστική κάρτα</label>
<input type="radio" name="payment" value="xreostikh karta">
<label for="payment">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  Paypal</label>
<input type="radio" name="payment" value="Paypal">
</fieldset>
<br><br>
Σχόλια <br> <textarea rows="6" cols="60" name="comments"></textarea><br><br>
<br><br>
<input type="submit" id="submit" name="submit" value="Αγορά"/> <input type="Reset" name="Reset" value="Καθαρισμός Φόρμας"/>
<br><br>
Τα πεδία με <strong>*</strong> είναι υποχρεωτικά.
<br><br>
<a href="genikh.html">ΕΠΙΣΤΡΟΦΗ  ΣΤΗΝ  ΚΕΝΤΡΙΚΗ  ΣΕΛΙΔΑ</a>
</fieldset> 
</form>
<script>
function valelements(element)
{
 if (/^[a-zA-Z]*$/.test(element)) 
      { return true;}
 else 
      {
alert("Παρακαλώ στο username και passsword εισάγετε μόνο χαρακτήρες του λατινικού αλφάβητου!!!");
return false;
      }
}
document.getElementById("submit").onclick=function () {valelements(document.getElementById("username").value); valelements(document.getElementById("password").value);}
</script>
</body>
</html>