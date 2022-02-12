
<?php
$msg="";
if(isset($_POST['submit'])){
if(empty($_POST[''])){
$msg="<div class='alert alert-danger'>full Name is required.</div>";
}
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title> <!--Title of the web page-->
    <style>
        body{
            background-color: #00aBff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
        .wrapper{
            background: white;
            padding: 30px 30px;
            min-width: 370px;
            max-width: 370px;
        }
        .wrapper .title{
            margin: 10px 0;
            border-left: 5px solid #00aBff;
            padding-left: 5px;
            color: darkslategrey;
            font-size: 25px;
        }
        .wrapper .form{
            margin: 10px 0;
        }
        .wrapper .form .input-field{
            width: 100%;
            display: block;
            margin: 10px 0;
        }
        .wrapper .form .input-field .input-label{
            display: block;
            margin-bottom: 1px;
            font-weight: 550;
            font-size: 15px;
        }
        .wrapper .form .input-field .input{
            width: 100%;
            padding: 10px;
            outline: none;
            border: 1px solid #ccc;
            font-size: 15px;
            transition: 0.3s all ease;

        }
        .wrapper .form .input-field .input:focus{
            background: #86cfda;
        }
        .wrapper .form .btn{
            background: #00aBff;
            border: 1px solid #00aBff;
            width: 100%;
            padding: 10px;
            outline: none;
            color: white;
            font-size: 15px;
            font-family: 'poppins',sans-serif;
            cursor: pointer;
            margin: 10px 0;
            transition: 0.3s all ease;
        }
        .wrapper .form .btn:hover, .wrapper .form .btn:focus{
            background: #0b2e13;
        }
        .alert{
            background: #eee;
            padding: 10px;
            width: 100%;
        }
        .alert-danger{
            background: #e84118;
            color: white;
        }

    </style>
</head>
<body>
<div class="wrapper">
    <h2 class="title">Register</h2>
<!--    <div class="alert alert-danger">All fields are required.</div>-->
    <?php echo $msg; ?>
    <form action=""method="post" class="form">
        <div class="input-field">
            <label for="full_name"class="input-label">Full Name</label>
            <input type="text"name="full_name" class="input"id="full_name"placeholder="Enter your full Name">
        </div>
        <div class="input-field">
            <label for="email"class="input-label">Email</label>
            <input type="email"class="input"id="email"placeholder="Enter your email address">
        </div>
        <div class="input-field">
            <label for="website"class="input-label">website</label>
            <input type="url"class="input"id="website"placeholder="Enter your website">
        </div>
        <div class="input-field">
            <label for="password"class="input-label">Password</label>
            <input type="password"class="input"id="password"placeholder="Enter your password">
        </div>
        <div class="input-field">
            <label for="cpassword"class="input-label">Confirm Password</label>
            <input type="password"class="input"id="cpassword"placeholder="Enter confirm password">
        </div>
        <button type="submit"name="submit" class="btn">Register</button>
    </form>
</div>

</body>
</html>