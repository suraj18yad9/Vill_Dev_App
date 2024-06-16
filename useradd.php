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
                <a href="useradd.php"> Add Users </a>
                <a href="viewuser.php"> veiw Users</a>
                <a href="postprogram.php"> Post Programs</a>
                <a href="viewprogram.php"> view Programs</a>
                <a href="#"> Add Villages Info</a>
                <a href="viewprogram.php"> View Problem</a>
                <a href="logout2.php">Log out</a>
            </div>
            <div class="register">
                <a href="contect_form.php">Contact</a>
            </div>
            
        </nav>

        <section class="h_txt">
            
            <h1>Add Users</h1>
            <br><br>
            <form action="save2.php" method="post">
               
                    <Span>Users Email-Id</Span>
                    <input type="text"placeholder="Login " name="user">
                    <br><br>
                    <span>Users Password</span>
                    <input type="password" placeholder="Password" name="password">
                
                <br><br>
                <div  class="loginbtn">
                    <input type="submit" value="Add"> 
                                      
                </div>           
            </form>
                    
        </section>

    </header>
</body>
</html>