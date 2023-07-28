<button onclick="document.location='?action=login'">login</button>
<button onclick="document.location='?action=logout'">logout</button>
<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "update_appointment_status":
            $db_handle->appointment_update($_GET['order_idd'], $_GET['current_status']);
            $db_handle->dropqueryparam();
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Booking</title>
    <link rel="stylesheet" href="seller_dashboard.css">
</head>

<body>
    <div class="topnav">
        
        
        
        <a class="active" href="./user_booking.php">User Booking</a>
    </div>
    <h1> Choose Doctors </h1>
    <div class="txt-heading">Book Appointment</div>
    <div class="order-list">
        <table class="order-table" cellpadding="10" cellspacing="1">

            <tr>
                
                <th style="text-align:center;">SL no</th>
                <th style="text-align:center;">Doctor Name</th>
                <th style="text-align:center;">Speciality</th>
                <th style="text-align:center;">Appointment date</th>
                <th style="text-align:center;">Appointment time</th>
                <th style="text-align:center;">Appointment status</th>
                <th style="text-align:center;">Update status</th>
            </tr>
            <?php
            $sql = "SELECT order_idd,name,speciality,date,time,status from Booking where status != 'completed'";
            $result = $db_handle->selectQuery($sql);
            if (!empty($result)) {
                foreach ($result as $key => $rows) {
            ?>
                    <tr>
                        
                        <td style="text-align:center;"><?php echo $rows["order_idd"]; ?></td>
                        <td style="text-align:center;"><?php echo $rows["name"]; ?></td>
                        <td style="text-align:center;"><?php echo $rows["speciality"]; ?></td>
                        <td style="text-align:center;"><?php echo $rows["date"]; ?></td>
                        <td style="text-align:center;"><?php echo $rows["time"]; ?></td>
                        <td style="text-align:center;"><?php echo $rows["status"]; ?></td>
                        <td style="text-align:center;">
                            <form method="post" action="?action=update_appointment_status&order_idd=<?php echo $rows["order_idd"]; ?>&current_status=<?php echo $rows["status"]; ?>"><input class="btnUpdate" type="submit" value="Update Status"> </form>
                        </td>
                    </tr>

            <?php
                }
            }
            ?>
        </table>
    </div>
    