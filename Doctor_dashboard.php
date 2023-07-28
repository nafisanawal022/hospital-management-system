<button onclick="document.location='?action=login'">login</button>
<button onclick="document.location='?action=logout'">logout</button>
<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "update_order_status":
            $db_handle->status_update($_GET['order_id'], $_GET['current_status']);
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
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="seller_dashboard.css">
</head>

<body>
    <div class="topnav">
      
        
        
        
        <a class="active" href="./Doctor_dashboard.php">Doctor Dashboard</a>
    </div>
    <h1> Doctor Dashboard </h1>
    <div class="txt-heading">View Appointment History</div>
    <div class="order-list">
        <table class="order-table" cellpadding="10" cellspacing="1">

            <tr>
                <th style="text-align:center;">Queue</th>
                <th style="text-align:center;">Patient ID</th>
                <th style="text-align:center;">Patient Name</th>
                <th style="text-align:center;">Email address</th>
                <th style="text-align:center;">Appointment date</th>
                <th style="text-align:center;">Appointment time</th>
                <th style="text-align:center;">Appointment status</th>
                <th style="text-align:center;">Update status</th>
            </tr>
            <?php
            $sql = "SELECT order_id,name,email,date,time,status from appoint where status != 'completed' and status != 'canceled'";
            $result = $db_handle->selectQuery($sql);
            if (!empty($result)) {
                foreach ($result as $key => $rows) {
            ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $key + 1; ?></td>
                        <td style="text-align:center;"><?php echo $rows["order_id"]; ?></td>
                        <td style="text-align:center;"><?php echo $rows["name"]; ?></td>
                        <td style="text-align:center;"><?php echo $rows["email"]; ?></td>
                        <td style="text-align:center;"><?php echo $rows["date"]; ?></td>
                        <td style="text-align:center;"><?php echo $rows["time"]; ?></td>
                        <td style="text-align:center;"><?php echo $rows["status"]; ?></td>
                        <td style="text-align:center;">
                            <form method="post" action="?action=update_order_status&order_id=<?php echo $rows["order_id"]; ?>&current_status=<?php echo $rows["status"]; ?>"><input class="btnUpdate" type="submit" value="Update Status"> </form>
                        </td>
                    </tr>

            <?php
                }
            }
            ?>
        </table>
    </div>
    