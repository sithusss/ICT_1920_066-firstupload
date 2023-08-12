<?php
   
   include 'config.php';

if (isset($_POST['submit'])){
    // $empid=isset($_POST['user_id']) ? $_POST['user_id'] :"100" ;
    $nic= $_POST['nic'];
    $fname= $_POST['firstname'];
    $lname = $_POST['lastname'];
    $citizen = $_POST['citizenship'];
    $cat =$_POST['category'];
    $bdate = $_POST['bdate'] ;
    $nobooking =$_POST['no_booking'];
}

    $sql = "insert into booking(nic ,fname, lname, nationality, age_range, booking_date, no_booking) 
    values('$nic','$fname','$lname','$citizen','$cat','$bdate','$nobooking')";

    $statement = $connection->prepare($sql);

    if($connection->query($sql)===TRUE){

        echo'<h1> Data Insertion Success...</h1>';
        echo '<table border=1>';
                echo '<tr>
                        <th>NIC</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Booking Date</th>
                        <th>No of Bookings</th>
                    </tr>';
                echo '<tr>
                        <td>'.$nic.'</td>
                        <td>'.$fname.'</td>
                        <td>'.$lname.'</td>
                        <td>'.$bdate.'</td>
                        <td>'.$nobooking.'</td>
                        
                </tr>';

            echo '</table>';
            echo'<h1> Thank You...</h1>';
        
    }
    else{
        // $statement->bind_param("sss", $user_name,$password,$email);
        // echo nl2br("");
        mysqli_error($connection);   
    }

    $connection->close();
    ?>
