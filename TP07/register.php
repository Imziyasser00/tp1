<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>
    <form action="login_action.php" method="post">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="name">Name : </label>
            <input type="text" name="uname" id="name" placeholder="Enter Name">
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="mail" id="email"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>


            <hr>


            <button type="submit" class="registerbtn" name="rbtn">Register</button>
        </div>

    </form>
</body>

</html>