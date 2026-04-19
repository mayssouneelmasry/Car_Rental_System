<html>
<?php
session_start();
include("connect.php");
$sql = "SELECT * FROM messages";
$q=mysqli_query($conn,$sql) or die (mysqli_error($conn));

?>

<head>
    <title>Cars</title>
    <link rel="stylesheet" href="admin.css">
</head>
<header>
    <div class="container" style="align-self: center">
        <img src = "http://localhost/CarRentalSystem/logo.jpg" alt="logo" class = "logo">
        <nav>
            <ul>
                <li><a href="adminReservations.php">Reservations</a></li>
                <li><a href="adminCars.php"> Cars</a></li>
                <li><a href="adminCustomer.php"> Customer </a></li>
                <li><a href="adminReports.php"> Reports </a></li>
                <li><a href="adminMessages.php"> Messages </a></li>
                <li class="log"><a href="adminlogout.php">Log out</a></li>
            </ul>
        </nav>
    </div>
</header>



<style>
    .all{

        background: #8B0000;
        color: white;
        border: none;
        width: 90px;
        height: 50px;
        border-radius: 15px;
    }

    table,td,th{


        width: 50%;
        padding: 10px;

    }

    td,th{

        border-bottom: 1px solid black;
    }

    td:hover {background-color: #8B0000;}
    .center {
        margin-left: auto;
        margin-right: auto;
    }
.center tr {
    background-color: #FFFFFF; /* White background for each row */
}

.center tr:hover {
    background-color: #F0F0F0; /* Light gray background on hover for each row */
}

.center td, .center th {
    padding: 10px; /* Add padding for table cells */
    border-bottom: 1px solid #DDD; /* Add a border to separate rows */
}

.center th {
    background-color: #8B0000; /* Dark red background for headers */
    color: white; /* White text for headers */
}


</style>
</div>
<form name="search_box" method="post" >

<h1 style="margin-top: 100px;">Messages Sent</h1>

<table class="center">
    <tr>
        <th style="white-space:nowrap">
            <strong>Name</strong>

        </th>
        <th>
            <strong>Email</strong>

        </th>
        <th>
            <strong>Message</strong>

        </th>
    </tr>
    <?php while($row= mysqli_fetch_array($q)){?>
        <tr>
            <?php


            echo "<tr>";

            echo "<td>";
            echo $row['name'];
            echo "</td>";
            echo "<td>";
            echo $row['email'];
            echo "</td>";
            echo "<td >";
            echo $row['message'];
            echo "</td>";
            echo "</tr>";




            ?>
        </tr>
</form>
    <?php }?>



</html>