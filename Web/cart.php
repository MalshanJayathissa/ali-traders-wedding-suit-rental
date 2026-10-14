<?php 
    require_once 'DBConn.php'; 
    session_start();

    if(!isset($_SESSION['username'])){
        header("Location:login.php");
    }
    
    if(isset($_GET["action"]) && $_GET["action"] == "delete"){
        $pName=$_GET["name"];
        $Dquery="DELETE FROM `customer_order` WHERE description = '$pName';";
        mysqli_query($conn,$Dquery);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
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
        <h1>Cart</h1>
    </div>
    <div class="table_container">
        <table>
        <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Remove Items</th>
        </tr>
        <?php
            $query="SELECT * FROM customer_order ORDER BY id ASC;";
            $result=mysqli_query($conn,$query);

            $total=0;

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr id="trspc">
                        <td><img src="img/<?php echo $row["image"]; ?>" alt=""></td>
                        <td><?php echo $row["description"]; ?></td>
                        <td><?php echo $row["price"]; ?></td>
                        <td><?php echo $row["qty"]; ?></td>
                        <td><?php echo number_format($row["price"]*$row["qty"],2); ?></td>
                        <td><a href="cart.php?action=delete&name=<?php echo $row["description"]; ?>"><span>Remove Item</span></a></td>

                        <?php
                        $total = $total + ($row["qty"]*$row["price"]);
                    

                }
            }
        ?>
        </tr>
        <tr></tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td id="tot">Total</td>
            <td id="totcal"><?php echo number_format($total, 2); ?></td>
            <td><a href="userDetails.php"><button>Proceed to Payment</button></a></td>
        </tr>
        </table>
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