<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wowFood</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar section start here -->
    <section class="Navbar">
        <div class="container">   
            <div class="logo">
                <img src="images/logo.png" alt="Restaurant logo"class="img-responsive">
            </div>
            <div class="Menu text-right">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Food</a>
                    </li>
                    <li>
                        <a href="#">Contract</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> 
    </section>
    <!-- Navbar section ends here-->
      <!-- Order section start here -->
  <div id="content--body">
            <div class="content--body--list">
                <h2 class="list--items">Fill this form to comfirm your order.</h2>
                <form action="#" class="list--items">
                    <fieldset>
                        <legend>Selected Foods</legend>
                        <div class="items--img">
                            <img src="images/menu-pizza.jpg" alt="">
                        </div>
                        <class class="items--dsc">
                            <h2>Food Title</h2>
                            <h3>$2.3</h3>
                            <div class="order--label">Quantity</div>
                            <input class="item--number" type="number">
                        </class>
                    </fieldset>
                    <fieldset>
                        <legend>Delivery Details</legend>
                        <div class="order--label">Full Name</div>
                        <input type="text" class="order--input" placeholder="E.g. loofeht">
                        <div class="order--label">Phone Number</div>
                        <input type="tel" class="order--input" placeholder="E.g. 034229xxxx">
                        <div class="order--label">Email</div>
                        <input type="email" class="order--input" placeholder="E.g. phu832001@xxx.com">
                        <div class="order--label">Address</div>
                        <textarea name="address" class="text--address" rows="10"
                            placeholder="E.g. Street, City, Country"></textarea>
                        <textarea name="address" class="text--address" rows="10" placeholder="E.g. Street, City, Country"></textarea>
                        <input type="submit" class="confirm--btn" value="Comfirm Order">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- Order section ends here-->
    </body>
</html>