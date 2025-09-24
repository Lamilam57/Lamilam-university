<!DOCTYPE>
<html>
    <head>
        <title>university website design</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, inital-scale=1.0 ">
    </head>
    
    <body>
        <section class="header">
            <nav>
                <a href="index.php"><img src="img/logo.png"></a>
                <div class="nav-links" id="navLinks">
                    <button type="button" class="btn" id="btnc" onclick="hideMenu()"><a>&times;</a></button>
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="about.php">about</a></li>
                        <li><a href="course.php">course</a></li>
                        <li><a href="blog.php">blog</a></li>
                        <li><a href="contact.php">contact</a></li>
                        
                    </ul>
                </div>
                <button type="button" class="btn" onclick="showMenu()"><a>&#9776;</a></button>
            </nav>
            
            <div class="text-box">
                <h1>World Biggest University.</h1>
                <p>Making website one of the easiest thing in the world. You need to learn HTML, CSS, <br>Javascript and you are good to go.</p>
                <a href="about.html" class="hero-btn">Visit Us To Know More</a>
            </div>
        </section>
    
        <section class="course">
            <h1>courses we offer</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>          
            <div class="row">
                <div class="col">
                    <h3>Intermediate</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor aliquet turpis nulla, eleifend fauctibus est sollicitudin ut. Maecenas ut venenatis ex, et depibus purus Donec sit.</p>
                </div>
                <div class="col">
                    <h3>Degree</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor aliquet turpis nulla, eleifend fauctibus est sollicitudin ut. Maecenas ut venenatis ex, et depibus purus Donec sit.</p>
                </div>
                <div class="col">
                    <h3>Post-Graduation</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor aliquet turpis nulla, eleifend fauctibus est sollicitudin ut. Maecenas ut venenatis ex, et depibus purus Donec sit.</p>
                </div>
            </div>
            
        </section>
        
        <section class="campus">
            <h1>our global campus</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="row">
                <div class="campus-col">
                    <img src="img/london.png">
                    <div class="layer">
                        <h3>LONDON</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="img/newyork.png">
                    <div class="layer">
                        <h3>NEW YORK</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="img/washington.png">
                    <div class="layer">
                        <h3>WASHINGTON</h3>
                    </div>
                </div>
            </div>
        </section>
        
        
        <section class="facilites">
            <h1>our facilites</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="row">
                <div class="facilites-col">
                    <img src="img/library.png">
                    <h3>Post-Graduation</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor aliquet turpis nulla.</p>
                </div>
                <div class="facilites-col">
                    <img src="img/basketball.png">
                    <h3>Largest PlayGround</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor aliquet turpis nulla.</p>
                </div>
                <div class="facilites-col">
                    <img src="img/cafeteria.png">
                    <h3>tasty and Healthy Food</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor aliquet turpis nulla.</p>
                </div>
            </div>
        </section>
        
        
        <section class="testimonial">
            <h1>what our student says</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="testimonial-col">
                    <img src="img/user1.jpg">
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor aliquet turpis nulla, eleifend fauctibus est sollicitudin ut. Maecenas ut venenatis ex, et depibus purus Donec sit.</p>
                        <h3>Christine Barkley</h3>
                    </div>
            </div>
            <div class="testimonial-col">
                    <img src="img/user2.jpg">
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor aliquet turpis nulla, eleifend fauctibus est sollicitudin ut. Maecenas ut venenatis ex, et depibus purus Donec sit.</p>
                        <h3>David Byer</h3>
                    </div>
            </div>
        </section>
        
        
        <section class="cta">
            <h1> Enroll for our various online courses <br>anywhere from the world</h1>
            <a href="registration.php" class="hero-btn">REGISTRATION</a>
        </section>
        
        
        

<?php
    include_once 'main-partials/footer.php';
?>