<?php include("../database/dbconn.php"); ?>
<?php

    // Get form data
    $organ_type = $_POST['OrganType'];
    $blood_group = $_POST['BloodGroup'];
    $nic = $_POST['NIC'];

    // Insert form data into the database
    $sql = "INSERT INTO organ_bank (organ_type, blood_group, nic) VALUES ('$organ_type', '$blood_group', '$nic')";

    if ($conn->query($sql) === TRUE) {
        echo "Data stored successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
?>
