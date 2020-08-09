<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is an example of a meta description. This will often show up in the results.">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Feyn_man/login</title>
        <link rel="stylesheet" type="text/css" href="css/Fey_man.css">
    </head>
    <body>
        <header>
            <nav>
                <a href="#">
                    <img src="logo.png">
                </a>
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li> 
                </ul>
                <div>
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
                        <input type="password" name="pwd" placeholder="Password...">
                        <button type="submit" name="login-submit">Login</button>
                    </form>
                    <a href="signup.php">Signup</a>
                    <form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="login-submit">Logout</button>
                    </form> 
                </div>
            </nav>
        </header>