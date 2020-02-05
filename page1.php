<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 1</title>
</head>

<body>
    <?php require  "inc/proj2_header.inc.php"; ?>
    <form action="page2.php" method="GET">
        <fieldset>
            <form action="page2.php" method="GET">
                <legend>Please type your name below and click submit. We will pass your name as a query string parameter to page2/name=</legend>
                <p><input type="text" name="name"></p>
        </fieldset>
        <fieldset>
            <legend>Please choose a pet!</legend>
            <p>Below are 3 choices that will pass a query string perameter to page2.php called "pet"</p>
            <p><label for="dog"><input type="radio" name="pet" value="dog" id="dog"> Dog</label></p>
            <p><label for="cat"><input type="radio" name="pet" value="cat" id="cat"> Cat</label></p>
            <p><label for="deer"><input type="radio" name="pet" value="deer" id="deer"> Deer</label></p>
        </fieldset>
        <fieldset>
            <legend>What color would you like the background to be? Please type red, blue or green only!</legend>
            <p><input type="text" name="bgcolor"></p>
        </fieldset>
        <input type="submit"><br><br>
        <p><a href="page2.php?class=warrior">Click here and it will pass a query string parameter of /page2.php?pic=warrior </a></p>
        <p><a href="page2.php?font_type=zhi">Click here and it will pass a query string parameter of /page2.php?font_type=zhi</a></p>
        <p><a href="page2.php?park=geese">Click here and it will pass a query string parameter of /page2.php?park=geese</a></p>

    </form>
    <?php require "inc/proj2_footer.inc.php"; ?>
    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>