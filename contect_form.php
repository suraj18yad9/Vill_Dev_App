<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contect Form</title>
    <link rel="stylesheet" href="contect_style.css">
</head>

<body>
    <header class="header"><span><h1>Contect Us</h1></span></header>
    <form action="contact.php" method= "post" class="container">
        
        First Name:<input type="text" name="fname" id="" placeholder="First Name">
        <br><br>
        Last Name:<input type="text" name="lname" id="" placeholder="Last Name">
        <br><br>
        Email:<input type="email" name="email" id="" placeholder="Email">
        <br><br>
        Phone Number:<input type="text" name="phone" id="" placeholder="Phone Number">
        <br><br>
        Message:<textarea></textarea>
        <br><br>
        <input type="submit" value="contact"> 
    </form>
    
</body>
</html>