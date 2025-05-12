<style type="text/css">
      body{
         background-color: black;
      }
</style>
<?php
require 'db.php'; // include your DB connection
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $emailid=$_POST['emailid'];
    $phoneno=$_POST['phoneno'];
    $daddress=$_POST['daddress'];
    $pincode=$_POST['pincode'];
    $itemname=$_POST['itemname'];
    $cityname=$_POST['cityname'];
    $quantity=$_POST['quantity'];  
    $payment=$_POST['payment'];
    $run=" insert into order1(Firstname, Lastname, Emailid,Phoneno,Daddress,Pincode,Itemname, Cityname, Quantity, Payment) values('$firstname', '$lastname', '$emailid', '$phoneno', '$daddress', '$pincode', '$itemname', '$cityname', '$quantity', '$payment')";
    if(!mysqli_query($CONNECTION,$run))
    {
        echo  "record not submitted";
    }
    else
    {
        echo "<div class='thank-you-container' style='text-align:center; margin-top:60px; color: white;'>";
        echo "<img src='images/thank.jpg' class='thank'>"; 
        echo "<h2>Thank you, $firstname $lastname!</h2>";
        echo "<p>Your order for <strong>$itemname</strong> has been received.</p>";
        echo "<p>We will contact you at <strong>$phoneno</strong> and deliver to:</p>";
        echo "<pre>$daddress</pre>";
        echo" <div>";
    }  
}
mysqli_close($CONNECTION);  
?>