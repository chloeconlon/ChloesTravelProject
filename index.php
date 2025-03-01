<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Chloe's Travel Project</title>
    <link rel="stylesheet" href="style/home.css"> <!-- Link the CSS file -->
    <style>
        /* General Page Styling */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8f0;
            /* Light sage green background */
            color: #333;
        }

        /* Navbar */
        .navbar {
            background-color: #8fbc8f;
            /* Sage Green */
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-right a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            margin: 0 10px;
            padding: 8px 16px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .navbar-right a:hover {
            background-color: #6c9e6c;
            /* Darker sage green */
        }

        /* Section */
        .mainsection {
            background: linear-gradient(135deg, #8fbc8f, #f5fdf5);
            /* Gradient background */
            color: white;
            text-align: center;
            padding: 100px 20px;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }

        .text1 h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .text1 p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .text1 button {
            padding: 10px 20px;
            background-color: white;
            color: #8fbc8f;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s ease, background-color 0.3s ease;
        }

        .text1 button:hover {
            background-color: #f5fdf5;
            /* Lightened green */
            transform: scale(1.05);
        }

        /* Features Section */
        .features {
            padding: 50px 20px;
            text-align: center;
            background-color: white;
        }

        .features h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #4f784f;
        }

        .feature-cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background-color: #f5fdf5;
            /* Lightened green */
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 250px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card h3 {
            font-size: 1.5rem;
            color: #8fbc8f;
            margin-bottom: 10px;

        }


        .card p {
            font-size: 1rem;
            color: #666;
        }

        #linkss {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php
    if (!isset($_COOKIE["selected_avatar"])) {

        //Set cookie for avatar ID
        setcookie("selected_avatar", 0, time() + (86400 * 30), "/"); //Expires in 70 days
    }
    ?>
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-container">
            <div class="navbar-right">
                <a href="index.php" class="active">Home</a>
                <a href="animals.php">Animals</a>
                <a href="animal_sightings.php">Animal Sightings</a>
                <a href="reviews.php">Reviews</a>
                <a href="login_signup.php">Login</a>
            </div>
        </div>
        <div id="backdrop"></div>
        <div id="modal_front" class="box3 div-border div-no-border form-container"></div>
        <div id="image_modal" class="boc3a div-border div-no-border"></div>
    </div>
    <span id="avatarimage">
        <img onclick="showModalImages()" src="images/Avatars/avatar<?php echo $_COOKIE["selected_avatar"] ?>.jpg"
            alt="Animal Stars" width="130px">
    </span>


    <!-- Main Content -->
    <div class="mainsection">
        <div class="text1">
            <h1>Welcome to Chloe's Travel Project!</h1>
            <p>Explore the world of animals, discover unique sightings, and share your own adventures!</p>
            <button onclick="window.location.href='animal_sightings.php'">Get Started</button>
        </div>
    </div>

    <!--  Some Features -- to add more to this after semester 1 -->
    <div class="features">
        <h2>Our Features</h2>
        <div class="feature-cards">
            <div class="card">
                <a href="animals.php" id="linkss">
                    <h3>Animal Encyclopedia</h3>
                    <p>Discover fascinating information about various animals.</p>
                </a>
            </div>
            <div class="card">
                <a href="animal_sightings.php" id="linkss">
                    <h3>Sightings Map</h3>
                    <p>Track and share animal sightings from around the globe.</p>
                </a>
            </div>
            <div class="card">
                <a href="reviews.php" id="linkss">
                    <h3>User Reviews</h3>
                    <p>Read and write reviews to share your travel experiences.</p>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>© 2024 Chloe's Travel Project | Made with ❤️</p>
    </footer>
</body>

<script src="script.js"></script>

</html>