<html>
    <head>
        <title>SignUp - Created By Rahul</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./assets/css/style.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href='https://fonts.googleapis.com/css?family=Athiti' rel='stylesheet'>
    </head>
    <body>
        <div class="container">
            <div class="box">
                <div class="sign-up">
                    <div class="header">
                        <img src="./assets/img/logo.png" height="52" width="52"/>
                        <h3>Bellefit</h3>
                    </div>
                    <div class="form">
                        <h4>Create Account</h4>
                        <form method="post" action="#">
                            <div class="signupfield">
                                <i class="signupicon fa-solid fa-circle-user"></i>
                                <input name="uname" required title="Full Name is required" type="text" class="signupinput" placeholder="Full Name">
                            </div>
                            <div class="signupfield">
                                <i class="signupicon fa-regular fa-at"></i>
                                <input name="uemail" required title="Email Address is required" type="email" class="signupinput" placeholder="Email Address">
                            </div>
                            <div class="signupfield">
                                <i class="signupicon fa-solid fa-lock"></i>
                                <input name="upassword" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" required title="Password is required At least 1 Uppercase
At least 1 Lowercase
At least 1 Number
At least 1 Symbol, symbol allowed --> !@#$%^&*_=+-
Min 8 chars and Max 12 chars" type="password" class="signupinput" placeholder="Password">
                            </div>
                            <div class="signupcheckbox">
                                <input id="termscheck" required title="You have to check this for further process" type="checkbox"><label for="termscheck" class="terms">I agree with <a href="#">Terms</a> and <a href="#">Privacy</a></label>
                            </div>
                            <div class="signupfield">
                                <input type="submit" class="signupbtn" value="SIGN UP">
                            </div>
                        </form>
                        <div class="infomsg"><?php require('store.php'); ?></div>
                    </div>
                </div>

                <div class="img-box">
                    <img src="./assets/img/object.png" />
                </div>
            </div>
        </div>
    </body>
</html>