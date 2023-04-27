<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyles/styles.css">
    <title>This is my first PHP
    </title>
</head>
<body color-"color:white;">
    <section class="main">
        <style>
    .main{
    width: 100%;
    height: 600px;
    position: relative;
    background-image: url(./images/aboutbackgr.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    color: white;
    }

        </style>
        <nav>
            <a href="#" class="logo">
                <img src="images/menulogo.png" alt="This is the menu" style="width: 70px;">
            </a>

            <ul>
                <li><a href="index.php" >Home</a></li>
                <li><a href="features.php">Features</a></li>
                <li><a href="about.php" class="active">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>

        <div class="main-part">
            <h1>About us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis molestias labore sunt non quo.</p>
        </div>

    </section>

<!-- ABOUT SECTION -->
    <section class="about" style="height: 60vh">
        <div class="about-img">
            <img src="images/about1.jpg" alt="My picture" width=400px style="border-radius: 50px;">
        </div>
        <div class="about-text">
            <h2>Where it all started</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit sapiente, ipsa aspernatur soluta, alias ipsam eveniet quaerat maxime, laborum odio recusandae. Quisquam, dolorum.</p>
        </div>
    </section>

        <section class="about" style="height: 60vh">

        <div class="about-text">
            <h2>Our aspiration</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit sapiente, ipsa aspernatur soluta, alias ipsam eveniet quaerat maxime, laborum odio recusandae. Quisquam, dolorum.</p>
        </div>

        <div class="about-img">
            <img src="images/about2.jpg" alt="My picture" width=400px style="border-radius: 50px;">
        </div>
        
    </section>

        <section class="about" style="height: 70vh">
        <div class="about-img">
            <img src="images/about3.jpg" alt="My picture" width=400px style="border-radius: 50px;">
        </div>
        <div class="about-text">
            <h2>What we offer</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit sapiente, ipsa aspernatur soluta, alias ipsam eveniet quaerat maxime, laborum odio recusandae. Quisquam, dolorum.</p>
        </div>
    </section>

   

    <section class="ending">
        <div>
            <p>From the same creators of</p>
            <div>
                <img src="images/gymlogo.png" alt="picture of what i have been working on" class="ending-img">
            </div>
            <p class="a">Copyright &copy2023 Robert_Samal</p>
        </div>
    </section>
    
</body>
</html>