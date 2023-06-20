<?php
if(isset($_POST['submit'])){
    if($_POST['username'] == "admin" && $_POST['password'] == "admin"){
        header("Location: index.php");
    }
    else{
        $eror = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <style>
        body{
            background-color: #1F6E8C;
        }
        .card{
            margin-top: 70px;
            box-shadow:2px 4px 2px 4px rgba(0,0,0,0.8);
            margin: 100px;
        }
        .img{
            background-color: ;
            width: 600px;
            height: 400px;
        }
        .content-right{
            width: 400px;
            height: 200px;
            margin-left: 70px;
            margin-top: 50px;
            color: black;
        }
    </style>
<body>
</head>

<div class="card"> 
<div class="d-flex ">
    <div class="car">
        <div class="content-foto">
            <img src="img/logo-park.png" alt="" class="img">
        </div>
    </div>
    <div class="content-right">
        <h3 style="margin-bottom: 40px; text-align: center; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Login </h3>
        <form action="" method="post"  border ="">
            <div class="input-group flex-nowrap" style="margin-bottom: 20px;">
                <span class="input-group-text" id="addon-wrapping"><img src="https://cdn-icons-png.flaticon.com/128/456/456212.png" alt="" style="witdh: 20px; height: 20px;"></span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" style="margin-right: 20px;" name="username">
            </div>
            <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><img src="https://cdn-icons-png.flaticon.com/128/63/63432.png" alt="" style="witdh: 20px; height: 20px;"></span>
                <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping" style="margin-right: 20px;" name="password">
            </div>
                        
            <div class="d-grid gap-2" Style="padding: 30px 20px 30px 0px; text-align: center;"'>
               <button class="btn btn-primary"type="submit" name="submit">MASUK</button>
            </div>

            <p style="margin-bottom: 40px; text-align: center"><b>for help, contact cs </b><a href="https://www.instagram.com/vonix_d4/" style="text-decoration: none; color: #46458C">here</a></p>
        </form>
    </div>
</div>
</div>
    
</body>
</html>



