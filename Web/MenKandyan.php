<?php 
    require_once 'DBConn.php'; 
    session_start();
    
    if(isset($_POST["add"])){
        $pid=$_GET["id"];
        $pname=$_POST["hidden_name"];
        $pimg=$_POST["hidden_image"];
        $pprice=$_POST["hidden_price"];
        $pqty=$_POST["quantity"];

        $query="INSERT INTO `customer_order` (`description`, `image`, `qty`, `price`) VALUES ('$pname', '$pimg', '$pqty', '$pprice');";
        mysqli_query($conn,$query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="HomePage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                            <option value="WomenWestern.php">western</option>
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
        <h1>Kandyan</h1>
    </div>
    <div class="conten produdiv">
        
        <?php 
            $query="SELECT * FROM child_mens_admin_control ORDER BY id ASC;";
            $result=mysqli_query($conn,$query);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <!-- <div class="product"> -->
                        <form action="MenKandyan.php?action=add&id=<?php echo $row["id"] ?>" method="POST">
                            <div class="product">
                                <img src="img/<?php echo $row["image"]; ?>" alt="">
                                <h3><?php echo $row["description"]; ?></h3>
                                <p>Rs <?php echo $row["price"]; ?></p>
                                <input type="number" id="quantity" name="quantity" value="1">
                                <input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["description"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" id="spc" value="Add to Cart">
                            </div>
                        </form>
                    <!-- </div> -->
                    <?php
                }
            }
            ?>
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