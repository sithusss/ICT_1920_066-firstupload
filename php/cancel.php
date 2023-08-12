<?php
   
   include 'config.php';

if (isset($_POST['submit'])){
    // $empid=isset($_POST['user_id']) ? $_POST['user_id'] :"100" ;
    $nic= $_POST['nic'];
    $bdate = $_POST['bdate'] ;
    $nobooking =$_POST['no_booking'];
}

    $query = "SELECT nic, fname, lname,booking_date, no_booking from booking where nic='$nic' and booking_date='$bdate' and no_booking='$nobooking'";

// Execute the query and get the result
$result = $connection->query($query);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<table border=1>';
                echo '<tr>

                        <th>NIC</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Booking Date</th>
                        <th>No of Bookings</th>
                    </tr>';
                echo '<tr>
                        <td>'.$row['nic'].'</td>
                        <td>'.$row['fname'].'</td>
                        <td>'.$row['lname'].'</td>
                        <td>'.$row['booking_date'].'</td>
                        <td>'.$row['no_booking'].'</td>
                        
                </tr>';

            echo '</table>';

    }
    $sql = "DELETE FROM booking WHERE nic = '$nic' and booking_date = '$bdate' and no_booking='$nobooking';
    ";

    $statement = $connection->prepare($sql);

    if($connection->query($sql)===TRUE){

        echo'<h1> Successfully cancel the booking</h1>';
        
            echo'<h1> Thank You...</h1>';
        // <script>
        //     alert("Insert Data Success")
        // </script>
        
    }
    else{
        // $statement->bind_param("sss", $user_name,$password,$email);
        // echo nl2br("");
        mysqli_error($connection);   
    }

        } else {
            echo "No results found";
}

   
    $connection->close();
    ?>
