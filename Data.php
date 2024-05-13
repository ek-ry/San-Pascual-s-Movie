<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//film info
$email = $_POST['email'];
$film = $_POST['film'];
$time = $_POST['time'];
$date = $_POST['date'];

//buyer info
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pm = $_POST['pm'];

echo "<h3>**********User Ticket**********</h3>";
echo "<h3>WARNING: DO NOT LOSE YOUR TICKET</h3>";
echo "<h1><strong>Film:</strong> $film</h1>";
echo "<h2><strong>Date:</strong> $date</h2>";
echo "<h2><strong>Time:</strong> $time</h2>";

echo "<p>Buyer Information</p>";
echo "<p>Name: <strong>$fname $lname</strong></p>";
echo "<p>Payment Method: <strong>$pm</strong></p>";
}
?>