<html lang="en" style="background-color: beige">
<?php
/**
 * Created by PhpStorm.
 * User: anmolsingh
 * Date: 2018-03-13
 * Time: 10:36 AM
 */
require "SQLQuery.php";
$conn = oraConnect();
if (!$conn) {
    exit;
}
else {
    print "Connected to Oracle!";
}
?>

<head>
    <meta charset="UTF-8">
    <title>PUser Home</title>
</head>
<body>
<div align="center" style="margin-bottom: 40px; margin-top: 20px; background-color: red">
    <b style="font-family: 'American Typewriter'; font-size: 30px">
        <a href="SQLConnect.php" style="text-decoration: none; color: #000000;">
            PharmTech
        </a>
    </b>
</div>
<form action="RegCustDatRetr.php">
    <div class="container" align="center" style="margin-top: 20px;">
        <button type="submit" style="width: 70px">Search</button>
    </div>
</form>
<form action="PrescriptionsRetr.php">
    <div class="container" align="center">
        <button type="submit" style="width: 80px;">Prescriptions</button>
    </div>
</form>
<form action="UnregCustDatRetr.php">
    <div class="container" align="center">
        <button type="submit" style="width: 70px;">Orders</button>
    </div>
</form>
</form>
<form action="SQLConnect.php">
    <div class="container" align="center">
        <button type="submit" style="width: 70px;">Logout</button>
    </div>
</form>
</body>
</html>

