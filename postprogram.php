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
                <a href="useradd.php"> Add Users </a>
                <a href="viewuser.php"> veiw Users</a>
                <a href="postprogram.php"> Post Programs</a>
                <a href="viewprogram.php"> view Programs</a>
                <a href="village.pdf"> Add Villages Info</a>
                <a href="logout2.php">Log out</a>
            </div>
            <div class="register">
                <a href="contect_form.html">Contact</a>
            </div>

        </nav>

        <section class="h_txt">

            <h1>Post Program</h1>
            <br><br>
            <form action="postsave.php" method="post">

                <label for="district">District </label>
                <input type="text" placeholder="Ghazipur" name="district">
                <br>

                <label for="district">Mandal </label>
                <input type="text" placeholder="Todarpur" name="mandal">
                <br>
                <label for="district">Program Name </label>
                <input type="text" placeholder="Swachchh Bharat Mission" name="programname">
                <br>

                <label for="textarea">Program Description </label>
                <label for="txarea">
                
                    <input type="text" placeholder="Swachchh Bharat Mission" name="pd">

                    <br><br>
                    <div class="loginbtn">
                        <input type="submit" value="Post Program">

                    </div>
            </form>

        </section>

    </header>
</body>

</html>