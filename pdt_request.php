<?php


 
 $con = mysqli_connect("localhost","root","","tutorial") or die("Couldn't connect");


// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["checkout-name"];
    $email = $_POST["checkout-email"];
    $phone = $_POST["checkout-phone"];
    $productReq = $_POST["product_req"];
    

    // Prepare the SQL statement to insert data into the table
    $sql = "INSERT INTO requests(Name, Email, Phone_no, Product_req)
            VALUES ('$name', '$email', '$phone', '$productReq')";

    // Execute the SQL statement
    if ($con->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Close the database connection
$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aura - eCommerce Website</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>customercare</title>
 <style>
    .button-31 {
  background-color: #222;
  border-radius: 4px;
  border-style: none;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: "Farfetch Basis","Helvetica Neue",Arial,sans-serif;
  font-size: 16px;
  font-weight: 700;
  line-height: 1.5;
  margin: 0;
  max-width: none;
  min-height: 44px;
  min-width: 10px;
  padding: 9px 20px 8px;
  position: relative;
}

.button-31:hover,
.button-31:focus {
  opacity: .95;
}
.container-cc{
    width:100%;
    margin: 50px auto;
}
 </style>
 
  
</head>

<body>
  <div class="overlay" data-overlay></div>
  <!--
    - HEADER
  -->
  <header> 
    <div class="header-main">
      <div class="container">
        <a href="./index.html" class="header-logo">
          <p style="font-size: 35px;font-weight: 600;color: rgb(251, 113, 159);font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Aura</p> 
        </a>
        <nav class="desktop-navigation-menu">
          <div class="container">
            <ul class="desktop-menu-category-list">
                <li class="menu-category">
                    <a href="./index.html" class="menu-title">Home</a>
                  </li>     
        
                  <li class="menu-category">
                    <a href="./Mens.html" class="menu-title">Men's</a>
                  </li>
        
                  <li class="menu-category">
                    <a href="./womens.html" class="menu-title">Women's</a>
                  </li>
        
                  <li class="menu-category">
                    <a href="./shoes.html" class="menu-title">Shoes</a>
                  </li>
        
                  <li class="menu-category">
                    <a href="./watches.html" class="menu-title">Watches</a>
              </li>
    
            </ul>
          </div>
        </nav>
        <div class="header-user-actions">

          <button class="action-btn">
            <ion-icon name="person-outline"></ion-icon>
          </button>

          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
           
          </button>

          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
           
          </button>

        </div>

      </div>

    </div>

    <!--For Mobile view-->
    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

       
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

       
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>
    </div>
  </header>

 <!--
      - PRODUCT
    -->
    <main>
    
        <section class="checkout-form">
        <form action="pdt_request.php" method="post">
               <br/><div class="container-cc"> <p>
    
                    Dear Valued Customer,
                    
                    Thank you for choosing Aura! We are committed to providing the best customer
                    service and ensuring your shopping experience is smooth and enjoyable. If you have any questions, concerns, 
                    or need assistance, please fill out the following Customer Care Form, and we will get back to
                    you as soon as possible.</p></div><br/>
                <div class="form-control">
                    <h3>Contact information</h3><br/>
                  <label for="checkout-name"><h3>Full name</h3></label>
                  <div>
                      <span class="fa fa-user-circle"></span>
                      <input type="text" id="checkout-name" name="checkout-name" placeholder="Enter you name...">
                  </div>
              </div>
    
    <br/>
                <div class="form-control">
    
                    <label for="checkout-email"><h3>E-mail</h3></label>
                    <div>
                        <span class="fa fa-envelope"></span>
                        <input type="email" id="checkout-email" name="checkout-email" placeholder="Enter your email...">
                    </div>
                </div><br/>
                <div class="form-control">
                    <label for="checkout-phone"><h3>Phone</h3></label>
                    <div>
                        <span class="fa fa-phone"></span>
                        <input type="tel" name="checkout-phone" id="checkout-phone" placeholder="Enter you phone...">
                    </div>
                </div>
                <br>
               
                
                <div class="form-control">
                    <label for="product_req"><h3>Product Request:</h3></label>
                    <div>
                        <span class="fa fa-home"></span>
                        <input type="text" name="product_req" id="product_req" placeholder="Enter product description...">
                    </div>
                </div>
               <br/>
                
                        </div>
                    </div>
                   
   
    </div>           
     
                <div class="form-control-btn">
                    <button class="button-31" type="submit" role="button">Submit</button>
                </div><br/>
            </form>
            
    
       
        </section>
     
    
    </main>    

   <!--
    - FOOTER
  -->

  <footer>

    <div class="footer-category">

    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Popular Categories</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Fashion</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Electronic</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Cosmetic</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Health</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Watches</a>
          </li>

        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Products</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>
  
        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              419 State 414 Rte
              Beaver Dams, New York(NY), 14812, USA
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </footer>

  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>
  </html>