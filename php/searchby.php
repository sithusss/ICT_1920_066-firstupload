<?php
    include 'config.php';
    
    $key = $_POST['key'];
    $sql = "SELECT booking_id,nic,fname,lname,booking_date,no_booking FROM booking WHERE nic = '$key'";

    $result = $connection->query($sql);

    if ($result->num_rows>0){
        while ($row = $result->fetch_assoc()){
            echo '<table border=1>';
                echo '<tr>
                        <th>Booking ID</th>
                        <th>NIC</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Booking Date</th>
                        <th>No of Bookings</th>
                    </tr>';
                echo '<tr>
                        <td>'.$row['booking_id'].'</td>
                        <td>'.$row['nic'].'</td>
                        <td>'.$row['fname'].'</td>
                        <td>'.$row['lname'].'</td>
                        <td>'.$row['booking_date'].'</td>
                        <td>'. $row['no_booking'].'</td>
                </tr>';

            echo '</table>';

        }
    }
    else{
        echo "<br />Id not exist";
    }

?>