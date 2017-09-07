<?php
include "db.php";
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>html form</title>
    <!-- Latest compiled and minified css !--> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Optional theme !-->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>  
<div id="content">
<form action="contribute.php" method="post">
<div class="form-btn">
         <input type="submit" id="submit" class="btn btn-default" value="Contribute">
        </div>
</form>
<form action="index.php" method="post">
<div class="form-btn">
         <input type="submit" id="home" class="btn btn-default" value="Home">
        </div>
</form>

    <div class="container">
        <div class="row">
            <div class="col-xs-12"> 
                <h2>Contribute with your ASCII art!</h2>
                <!-- action + method er tom, fyld ud senere. !-->
                <form action="handleContribute.php" method="post">
                    <div class="form-group">
                    <label for="title">Title</label> 
                    <input type="text" class="form-control" name="title" id="title"/> 
                    </div>
                        <div class="form-group">
                        <label for="content">Enter your ASCII art here</label> 
                        <textarea class="form-control" rows="5" id="content" name="content"></textarea>
                        </div>
                            <div class="form-group">
                                <input type="submit" id="submit" class="btn btn-default" value="submit">
                            </div>
                    </form>
            </div> 
        </div>
    </div>
    </div>
    <!-- Jquery !-->
    <script> src="js/jquery-3.2.1.min.js"</script>
    <!-- Latest compiled and minified javascript !-->
    <script> src="js/bootstrap.min.js" </script>    
</body>
</html>