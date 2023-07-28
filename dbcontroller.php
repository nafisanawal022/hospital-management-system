<?php
class DBController
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "Project";
    private $conn;

    function __construct()
    {
        $this->conn = $this->connectDB();
    }

    function connectDB()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $conn;
    }

    function selectQuery($query)
    {
        $result = mysqli_query($this->conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if (!empty($resultset))
            return $resultset;
    }

    function executeQuery($query)
    {
        mysqli_query($this->conn, $query);
    }

    

    function dropqueryparam()
    {
        $base_url = strtok($_SERVER['REQUEST_URI'], '?');
        header('Location: ' . $base_url);
    }

    
    function status_update($order_id, $order_status)
    {
        if ($order_status == 'pending') {
            $sql = "UPDATE appoint SET `status`='booked' WHERE `order_id`=$order_id ";
        } elseif ($order_status == 'booked') {
            $sql = "UPDATE appoint SET `status`='session on' WHERE `order_id`=$order_id ";
        } elseif ($order_status == 'session on') {
            $sql = "UPDATE appoint SET `status`='completed' WHERE `order_id`=$order_id ";
        }
        mysqli_query($this->conn, $sql);
    }
    function orderQueue($id)
    {
        $query = "SELECT ROW_NUMBER() OVER(ORDER BY `order_id`) AS `num_row`, `order_id` FROM `appoint` WHERE `status` != 'completed' AND STATUS != 'canceled'";
        $result  = mysqli_query($this->conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $resultset[$row["order_id"]] = $row["num_row"];
        }
        return ($resultset[$id]);
    }
    function appointment_update($order_idd, $order_status)
    {
        if ($order_status == 'Send Request') {
            $sql = "UPDATE Booking SET `status`='pending' WHERE `order_idd`=$order_idd ";
        } elseif ($order_status == 'pending') {
            $sql = "UPDATE Booking SET `status`='pending' WHERE `order_idd`=$order_idd ";
        } elseif ($order_status == 'booked') {
            $sql = "UPDATE Booking SET `status`='booked' WHERE `order_idd`=$order_idd ";
        }   
        mysqli_query($this->conn, $sql);
    }
    
}
