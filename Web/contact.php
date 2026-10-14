<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contact.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="navbar">
            <a href="FirstPage.php"><img src="img/alitradersicon.jpg" class="logo"></a>
            <nav>
                <ul>
                    <li>        
                        <select name="" id="lds" onchange="window.location.href=this.value;" onfocus="this.size=3;" onblur="this.size=0;" onchange="this.size=1; this.blur()">
                            <option selected disabled>Women Category</option>
                            <option value="WomenKandyan.php">Candyan</option>
                            <option value="WomenWestern.php">Western</option>
                        </select>        
                    </li>
                    <li>
                        <select name="" id="mns" onchange="window.location.href=this.value;" onfocus="this.size=3;" onblur="this.size=0;" onchange="this.size=1; this.blur()">
                            <option selected disabled>Mens Catogory</option>
                            <option value="MenKandyan.php">Candyan</option>
                            <option value="MenWestern.php">Western</option>
                        </select>
                    </li>
                    <li><a href="about.php">About Us</li>
                    <li><a href="contact.php">Contact Us&nbsp;<i class="fa fa-address-book" style="font-size:25px"></i></li>
                    <li><a href="cart.php">Cart&nbsp;<i class="fa fa-shopping-cart" style="font-size:25px;color:red"></i></li>
                    <li><a href="FirstPage.php"></a></li>
                </ul>
            </nav>
        </div>
        <h1>Contact Us</h1>
        <div class="contn">
            <div class="abt">
                <p>&nbsp;<i class="fa fa-envelope" style="font-size:25px"></i>&nbsp;&nbsp;&nbsp;Email - alitradersheadoffice@gmail.lk</p>
                
                <p><i class="material-icons" style="font-size:30px">place</i>&nbsp;&nbsp;Address - D 161/3 <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Temple Road,<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gampola,<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ulapane. </p> 
                
                <p>&nbsp;<i class="fa fa-mobile-phone" style="font-size:35px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact No: - 081-2485612<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;077-4875624
                </p>
                <br>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-content">
                <h3>Wedding Suit</h3>
                <p>Dress to impress for your big day! Explore our exquisite collection of wedding suits. Reserve yours today for timeless elegance and impeccable style. From classic tuxedos to modern designs, find the perfect ensemble for your special occasion.</p>
                <ul class="socials">
                    <li><a href="#"><i class="fa fa-facebook-f" style="font-size:36px"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" style="font-size:36px"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" style="font-size:36px"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" style="font-size:36px"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>Copyright &copy;2024 name. Design By <span>Students of NIBM Software Engineer</span></p>
            </div>
    </footer>
</body>
</html>