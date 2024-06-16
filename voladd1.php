<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Village Development  Page</title>
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
                <a href="voladd1.php"> Add Volunteers </a>
                <a href="viewvol1.php"> veiw Volunteers</a>
                <a href="viewuser.php"> veiw Users</a>
                <a href="logout1.php">Log out</a>
            </div>
            <div class="register">
                <a href="contect_form.php">Contact</a>
            </div>
            
        </nav>

        <section class="h_txt">
            
            <h1>Add Volunteers</h1>
            <br><br>
            <form action="save1.php" method="post">              
                    <Span>Volunteers Email-Id</Span>
                        <input type="text"placeholder="Add Id " name="username">
                    <br><br>
                    <span>Volunteer password</span>
                        <input type="password" placeholder="Password"  name="password">    
                <br><br>
                <div  class="loginbtn">
                    <input type="submit" value="Add">                                    
                </div>           
            </form>
                    
        </section>

    </header>
</body>
</html>