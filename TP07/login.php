<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="login_action.php" method="post">

        <!--       <?php /*   print_r($_COOKIE);*/?> -->
        <div class="container">
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Enter Username" name="uname"
                value="<?php if(isset($_COOKIE["username"])){echo $_COOKIE["username"]; };?>">

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                value="<?php if(isset($_COOKIE["password"])){echo $_COOKIE["password"]; };?>">
            <div>
                <input type="checkbox" name="rmbr"> Remember me
            </div>
            <button type="submit" name="sub">Login</button>

            <button type="submit" name="reg">Register</button>

        </div>

    </form>
</body>

</html>