<?php
// Replace these variables with your actual database credentials

 
 $con = mysqli_connect("localhost","root","","tutorial") or die("Couldn't connect");


// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["checkout-name"];
    $email = $_POST["checkout-email"];
    $phone = $_POST["checkout-phone"];
    $place = $_POST["checkout-place"];
    $city = $_POST["checkout-city"];
    $country = $_POST["checkout-country"];
    $postal = $_POST["checkout-postal"];

    

    // Prepare the SQL statement to insert data into the table
    $sql = "INSERT INTO checkout_details(Username, Email, Phone, Place,Country, City,Postal_code)
            VALUES ('$name', '$email', '$phone', '$place','$country','$city','$postal')";

    // Execute the SQL statement
    if ($con->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Close the database connection
$con->close();
?>