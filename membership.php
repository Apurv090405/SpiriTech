<?php
// Check if the form is submitted

$servername = "localhost";
$username = "";
$password = "";
$dbname = "spiritech";

// Connect to your MySQL database (replace with your database credentials)

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $studentID = $_POST["student_id"];
    $phoneNumber = $_POST["phone_number"];
    $email = $_POST["email"];
    $reasonToJoin = $_POST["reason_to_join"];

    // Insert data into the database
    $sql = "INSERT INTO membership_form (first_name, last_name, student_id, phone_number, email, reason_to_join)
            VALUES ('$firstName', '$lastName', '$studentID', '$phoneNumber', '$email', '$reasonToJoin')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> alert('Submit Sucessfully'); </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}

    // Close the database connection
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Form</title>
    <!-- Corrected Bootstrap Icons CDN link -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        /* Add this style block to enhance the Membership Form */
        * {
            font-family: "Muli", "Noto Color Emoji";
        }

        .navbar {
            background-color: white;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
            /* Blue color for "Spri" */
        }

        .navbar-brand span {
            color: black;
            /* Black color for "Tech" */
        }

        body {
            font-family: 'Muli', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            padding: 2em;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: aliceblue;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            max-width: 100%;
            height: auto;
        }

        .about-club {
            margin-bottom: 20px;
        }

        .about-club p {
            text-align: justify;
        }

        /* Rest of the styles remain unchanged */
        .contact-wrap .form-group {
            margin-bottom: 20px;
        }

        .contact-wrap input,
        .contact-wrap textarea {
            width: 100%;
            padding: 10px;
            /* Adjusted padding */
            border: 1px solid #ffa500;
            /* Orange border */
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
            color: black;
            /* Font color black */
        }

        .contact-wrap input[type="submit"] {
            background-color: #ffa500;
            /* Orange background */
            color: white;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease-in-out;
        }

        .contact-wrap input[type="submit"]:hover {
            background-color: #ff8c00;
            /* Darker orange on hover */
        }

        /* Add this to change border color on hover for input fields */
        .contact-wrap input:hover,
        .contact-wrap textarea:hover {
            border: 1px solid #ff8c00;
            /* Darker orange on hover */
        }

        /* New styles for the requested format */
        .form-group.row {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .form-group.row label {
            text-align: right;
            flex: 1;
            padding-right: 15px;
        }

        .form-group.row .col-md-6,
        .form-group.row .col-md-12 {
            flex: 2;
        }

        .submit-btn-row {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .submit-btn-row .col-md-12 {
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Existing code above this line -->

    <nav class="navbar" style="padding: 1em;">
        <a class="navbar-brand" href="./index.html" style="font-size: 40px;">SPRI<span>TECH</span></a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="./index.html" style="font-size: 25px;">Home</a>
            </li>
        </ul>
    </nav>


    <div class="container" style="padding: 2rem;">
        <p style="font-size: 20px;">Membership Form</p>
        <div class="row justify-content-center" style="padding: 2rem;">

            <div class="col-md-10   ">
                <form method="POST" data-aos="fade" action="">
                    <div class="form-group row">
                        <div class="col-md-6 mb-3 mb-lg-0">
                            <input type="text" class="form-control" placeholder="First name" name="first_name" value="">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last name" name="last_name" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 mb-3 mb-lg-0">
                            <input type="text" class="form-control" placeholder="Student ID" name="student_id" value="">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control" placeholder="Phone Number" name="phone_number" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="email" class="form-control" placeholder="Email" name="email" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea class="form-control" id="reasonToJoin" name="reason_to_join" rows="4" placeholder="Why do you want to join the club?" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row submit-btn-row">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary py-3 px-5 btn-block" value="Join Now">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Existing code below this line -->

</body>

</html>