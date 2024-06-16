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
                <a href="viewprogram.php"> view program </a>
                <a href="village.pdf"> view village Information</a>
                <a href="logout3.php">Log out</a>
            </div>
            <div class="register">
                <a href="contect_form.php">Contact</a>
            </div>    
        </nav>

        <section class="h_txt">
            <h1>Post Problem By the Users</h1>
            <br><br>
            <form action="postsaveproblem.php" method="post"> 
                    <label for="district">District  </label>
                       <input type="text" placeholder="Ghazipur" name="district">
                        <br>
                    <label for="district">Mandal  </label>
                       <input type="text" placeholder="Todarpur" name="mandal">
                    <br>
                    <label for="district">Problem  Name  </label>
                       <input type="text" placeholder=" Crop Subsidy" name="problemname">
                    <br>
                    <label for="textarea">Program Description </label>
                        <input type="text" placeholder="Distroy the crop due to Mansoon" name="postd">
                <br><br>
                <div  class="loginbtn">
                <input type="submit" value="Post Program">                                  
                </div>           
            </form>    
        </section>
    </header>
</body>
</html>