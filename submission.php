<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>WPY - Submitted Personal Information</title>

        <!-- Imported CSS/JS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Roboto+Condensed&family=Roboto+Mono:wght@400;500&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="WPY.css">

        <?php
            $firstName = $_POST['name_first'];
            $lastName = $_POST['name_last'];
            $streetAddress = $_POST['address'];
            $apt = $_POST['apt'];
            $city = $_POST['city'];
            $province = $_POST['province'];
            $country = $_POST['country'];

            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $loc =  $city . ', ' . $province;
            $fullName = ucwords(strtolower($firstName . ' ' . $lastName));
            $streetAddress = ucwords(strtolower($streetAddress));
            $loc = ucwords(strtolower($loc));

            /* SQL EXAMPLE NOT IMPLEMENTED -> Assuming the database has been created with correct parameters

            //Connection Info
            $hostname = "sqlDomain";
            $username = "sqlUserName";
            $password = "sqlPassword";
            $database = "databaseName";

            //Connection
            $connect = mysqli_connect($hostname, $username, $password, $database);

            //Error Checking
            if($connect) { 
                print("Connection Established Successfully"); 
            }
            else { 
                print("Connection Failed "); 
            } 

            //SQL QUERY -> I do not have to define columns as I am inserting into all of them
            $sql = "INSERT INTO users VALUES ('$firstName', '$lastName', '$email', '$phone', '$streetAddress', '$city', '$province', '$country')";

            //Retrieve result of query
            $result = mysqli_query($connect, $sql);

            //Do whatever with the $result (error check the addition to the database or display a message -> whatever is required)

            //Close Connection
            mysqli_close($connect);
            */
        ?>
    </head>

    <body class="d-flex flex-column h-100">
        <header>
            <h1 id="header" class="col-12 is-vcentered">
                <span style="color: #e21d1d;">&ensp;&ensp;&ensp;Signup</span>
                <span style="color: #0b0b0c;">Successful</span>
            </h1>
        </header>

        <main class="flex-shrink-0 pb-0">      
            <div class="container p-0">
                <div class="row m-md-1 pt-2 justify-content-center">
                    <span class="col-lg-5 m-3 p-3 shadow text-md-left panel">
                        <h3>Your Personal Details</h3>
                        <hr>
    
                        <p class="details">
                            Full Name: &ensp; &ensp; <?php echo $fullName ?><br>
                            Email Address: <?php echo $email ?><br>
                            Phone Number: &ensp;<?php echo $phone ?>
                        </p>
    
                        <br>
                        <h3>Your Full Address</h3>
                        <hr>

                        <p class="details">
                            <?php 
                                echo $streetAddress;

                                if ($apt != '') {
                                    echo "<br>" . $apt;     
                                }

                                echo "<br>" . $loc . "<br>" . $country;
                            ?>
                        </p>
                    </span>
    
                    <span class="row m-0">
                        <article class="col-lg-12 text-center">
                            <a href="Form.html">
                                <input type="submit" value="Go back" class="b shadow-lg">
                            </a>
                        </article>
                    </span>
                </div>
            </div>     
            
        </main>

        <footer class="footer text-center" >
            <p id="footer">
                This is a website created with bootstrap and PHP. <br>It serves as my submission for the WhoPlusYou Co-op Challenge.
                <br><br>
                ©2022 Aminnausin 
            </p>
        </footer>
    </body>
</html>