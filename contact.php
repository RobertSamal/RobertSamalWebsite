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
    height: 980px;
    position: relative;
    background-image: url("./images/contactbackground.jpg");
    transform-image: scaleX(-1);
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
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php" class="active">Contact Us</a></li>
            </ul>
        </nav>

        <div class="main-part" style="margin-top: -100px">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis molestias labore sunt non quo.</p>
            <a href="#contact1" class="main-btn">Contact Us</a>
        </div>
 
    </section>

<section class="contactbox">

    <section class="about" style="height: 80vh">
        <div class="about-img">
            <img src="images/locationicon.png" alt="My picture" width=400px>
        </div>
        <div class="about-text">
            <h2>Our Location</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit sapiente, ipsa aspernatur soluta, alias ipsam eveniet quaerat maxime, laborum odio recusandae. Quisquam, dolorum.</p>
            <a href="https://goo.gl/maps/FhfxaYhH7mnSgpAY8" class="main-btn" target="_blank">See our location</a>
        </div>
    </section>

    
    <section class="about" style="height: 60vh">

        <div class="about-text">
            <h2>My Github</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit sapiente, ipsa aspernatur soluta, alias ipsam eveniet quaerat maxime, laborum odio recusandae. Quisquam, dolorum.</p>
            <a href="https://github.com/RobertSamal" class="main-btn" target="_blank">Check Out</a>
        </div>

        <div class="about-img">
            <img src="images/gihublogo.png" alt="My picture" width=400px>
        </div>
    </section>

      <section class="about" style="height: 80vh">

        <div class="about-img">
            <img src="images/whatsapp.png" alt="My picture" width=400px>
        </div>

         <div class="about-text">
            <h2>Let's Chat</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit sapiente, ipsa aspernatur soluta, alias ipsam eveniet quaerat maxime, laborum odio recusandae. Quisquam, dolorum.</p>
            <a href="https://api.whatsapp.com/send?phone=254707611315" class="main-btn" target="_blank">Chat with me</a>
        </div>

    </section>

          <section class="about" style="height: 80vh">
       
        <div class="about-text">
            <h2>My Designs Portfolio</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit sapiente, ipsa aspernatur soluta, alias ipsam eveniet quaerat maxime, laborum odio recusandae. Quisquam, dolorum.</p>
            <a href="https://www.behance.net/gallery/162815699/SAMAL-DESIGNS" class="main-btn" target="_blank">Check Out</a>
        </div>

         <div class="about-img">
            <img src="images/behance.png" alt="My picture" width=400px>
        </div>
    </section>

      <section class="about" style="height: 80vh">
        <div class="about-img">
            <img src="images/instagramicon.png" alt="My picture" width=400px>
        </div>
        <div class="about-text">
            <h2>My instagram</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit sapiente, ipsa aspernatur soluta, alias ipsam eveniet quaerat maxime, laborum odio recusandae. Quisquam, dolorum.</p>
            <a href="https://www.instagram.com/samal_robert/" class="main-btn" target="_blank">Check Out</a>
        </div>
    </section>
    


    <section class="contact" id="contact1">
        <div class=contact-heading>
            <h1>Contact Us</h1>
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