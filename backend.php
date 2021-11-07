<?php
    if($_POST){
        require 'connection.php';
        $conn = connect_db();
        if(isset($_POST['psubmit'])){
            $ptext = $_POST['ptext'];
            $ptext = mysqli_real_escape_string($conn, $ptext);
            $sql = "INSERT INTO preturn(ptext)VALUES('$ptext')";
            $sql = $conn->query($sql);
            $sql = $sql-> fetch_assoc();
            if($sql){
                echo "<p>data inserted!</p>";     
            exit();
            }
            // array define with random int values
            // random number picker ? in php we'll use and it will return random number
            //  $percentage = random number

            // remarks - 
        }
    }

?>
