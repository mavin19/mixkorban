<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>footer</title>
    <style>
        .background{
            background-color:#A8F1B7;
            margin-top:20px;
            border-top:1px solid black;
        }
        .vl {
        border-right: 1px solid black;
        height: auto;
        }
        .logo{
            size:100px;
        }
    </style>
</head>
<body>
    <?php
        include_once("Script.php");
    ?>
     <div class="container-fluid background">
        <div class="row">
            <div class="col-sm vl">
                <H2> Mixkorban</h2>
                <p>We are the website that can help your finding problem solve.</P>
            </div>
            <div class="col-sm vl">
                <H2>Keep Connected</h2>
                <p><i class="fab fa-google-plus"></i> Link Us on Google+</p>     
                <p><i class="fab fa-facebook-f "></i> Link Us on Facebook</p>
            </div>
            <div class="col-sm ">
            <H2>Address</h2>
                <p><i class="fas fa-phone"></i> 086 307 286</p>
                <p><i class="fas fa-envelope"></i> Mixkorban@gmil.com</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>