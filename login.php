<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Quicksand|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/core.css" >
    <title>Login | Inventory Project</title>
</head>
<body>
    <div class="container">
        <div class="right-side">
            <form action="../controller/login/proses_login.php" method="POST">
                <div class="form-title">
                    <h2>SIGN IN</h2>
                    <label style="font-size:12px;">Save your inventory data. easy and efficient</label>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="masukkan username..." autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="masukkan password..." >
                </div>
                <div>
                    <button style="width:280px;" type="submit" name="btn-login" class="btn">Login</button>
                </div>
            </form>
        </div>

        <div class="left-side">
            <div class="title">
                <h2>Inventory Project</h2>
                <h4>created by at0m1c</h4>
            </div>
            
            <div class="background-color">

            </div>
            <div class="background">
                <img src="asset/img/photo1.jpg" />
            </div>
        </div>
    </div>
</body>
</html>