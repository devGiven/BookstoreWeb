<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Book Hub</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    <body style="background-image: url(img/502079.jpg)">
        <section class="web-body" style="background-size: cover;">
            <nav>
                <a href="#"><img src="img/Book-icon.png" alt="logo"class="logo"></a>
                
                <div class="navigation">
                    <ul>
                        <li><a href="#" style="color: gray;">Dashboard</a></li>
                        <li><a href="#" style="color: gray;">Home</a></li>
                        <li><a href="#" style="color: gray;">Shop</a></li>
                        <li><a href="#" style="color: gray;">Cart</a></li>
                    </ul>
                </div>
            </nav>
    
            <div class="wrap">
            <h2>Sign up</h2>
            <form method="POST" name="registerForm" action="Guest_RegisterServ" onsubmit=" return validateUserData(this) ">
                <input type="text" placeholder="Full Name.." name="fullname" required>
                <input type="email" placeholder="Email Address.." name="email" required>
                <input type="number" placeholder="Contact Number.." name="cont_number" required>
                <input type="password" placeholder="Password" name="password" required>
                <input type="password" placeholder=" Confirm Password" name="confirm_password" required>

                <textarea name="enquire" id="textarea" cols="10" rows="4" placeholder="Enquiries.."></textarea>
                <input type="reset" value="Reset">  <input type="submit" value="Submit"> 
                
            </form>
        </div>
        <div>
            <p  id="sign">Let's get you<br> </p>
            <p id="sign2">     Registered</p>
        </div>
        <div class="footer">
            snow &copy; | Designed by Tshiamo Monageng 
        </div>
    </section>
    
    </body>
</html>