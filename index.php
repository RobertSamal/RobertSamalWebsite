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
        <nav>
            <a href="#" class="logo">
                <img src="images/menulogo.png" alt="This is the menu" style="width: 70px;">
            </a>

            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="features.php">Features</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>

        <div class="main-part">
            <h1>My Website</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis molestias labore sunt non quo.</p>
            <a href="features.php" class="main-btn">Let's Go!</a>
        </div>

    </section>

    <section class="features">
        <div class="features-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/computer.jpg" alt="This is a picture of a PC" style="width: 100%; height: 100%"   >

                </div>
                <div class="f-text">
                    <h4>Website privacy</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae, debitis facere. Dolore.</p>
                    <a href="#" class="main-btn">Check</a>

                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/computer.jpg" alt="This is a picture of a PC" style="width: 100%; height: 100%"   >

                </div>
                <div class="f-text">
                    <h4>Website privacy</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae, debitis facere. Dolore.</p>
                    <a href="#" class="main-btn">Check</a>

                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/computer.jpg" alt="This is a picture of a PC" style="width: 100%; height: 100%"   >

                </div>
                <div class="f-text">
                    <h4>Website privacy</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae, debitis facere. Dolore.</p>
                    <a href="#" class="main-btn">Check</a>

                </div>
            </div>
        </div>
    </section>


    <section class="about">
        <div class="about-img">
            <img src="images/mypic.jpg" alt="My picture" width=400px>
        </div>
        <div class="about-text">
            <h2>About us</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit sapiente, ipsa aspernatur soluta, alias ipsam eveniet quaerat maxime, laborum odio recusandae. Quisquam, dolorum.</p>
            <a href="about.php" class="main-btn">See More</a>
        </div>
    </section>

    <section class="contact">
        <div class=contact-heading>
            <h1>Contact Me</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ea laborum perferendis.</p>
        </div>

        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name" required="">
            <input type="email" name="emial" placeholder="Your Email" required="">
            <textarea name="message" placeholder="Type your message"  cols="30" rows="10" required=""></textarea>
            <button class="main-btn contact-btn" type="submit" >Continue</button>

        </form>
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