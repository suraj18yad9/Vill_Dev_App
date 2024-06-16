<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Village Development Page</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <nav>
            <div class="logo">
                Village Development
            </div>
            <div class="menu">
                <a href="Village.php">Home</a>
                <a href="index1.php">Administrator</a>
                <a href="vollogin.php">Volunteers </a>
                <a href="index3.php">Users</a>
                <a href="#">View Village Info.</a>
            </div>
            <div class="register">
                <a href="contect_form.php">Contact</a>
            </div>

        </nav>

        <section class="h_txt">

            <h1>Volunteers Login</h1>
            <br><br>
            <form action="vollogin.php" method="post">

                <Span>Email-Id</Span>
                <input type="text" placeholder="Login " name="username">
                <br><br>
                <span>Password</span>
                <input type="password" placeholder="Password" name="password">

                <br><br>
                <div class="loginbtn">
                    <button type="submit">Login</button>
                    <button>Reset</button>
                </div>

            </form>



        </section>

    </header>
</body>

</html>