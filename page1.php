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
    <main>
        <?php require  "inc/proj2_header.inc.php"; ?>
        <div class="form-group">
            <form action="page2.php" method="GET">
                <fieldset>
                    <legend>Please type your name below and click submit. We will pass your name as a query string parameter to page2/name=</legend>
                    <p><input class="form-control" type="text" placeholder="Name" name="name"></p>
                </fieldset>

                <fieldset>
                    <legend>Below are 3 choices that will pass a query string perameter to page2.php called "pet"</legend>
                    <p><input type="radio" name="pet" value="dog" id="dog"> <label for="dog">Dog</label></p>
                    <p><input type="radio" name="pet" value="cat" id="cat"> <label for="cat">Cat</label></p>
                    <p><input type="radio" name="pet" value="deer" id="deer"> <label for="deer">Deer</label></p>
                </fieldset>

                <div class="form-group">
                    <fieldset>
                        <legend>What color would you like the background to be? Please type red, blue or green only!</legend>
                        <label for="bgcolor"></label>
                        <input class="form-control" type="text" name="bgcolor" id="bgcolor">
                    </fieldset>

                    <input type="submit" value="Submit Query Parameters" class="btn btn-primary"><br><br>
                </div>
            </form>
        </div>
        <H5>Choose your Class:</H5><a href="page2.php?class=warrior">
            <p>Click here and it will pass a query string parameter of /page2.php?pic=warrior</p>
        </a><br>
        <H5>Choose your Font:</H5><a href="page2.php?font_type=zhi">
            <p>Click here and it will pass a query string parameter of /page2.php?font_type=zhi</p>
        </a><br>
        <H5>Display Park:</H5><a href="page2.php?park=geese">
            <p>Click here and it will pass a query string parameter of /page2.php?park=geese</p>
        </a><br>
        <H5>Display Leedle Mill:</H5><a href="page2.php?building=mill">
            <p>Click here and it will pass a query string parameter of /page2.php?building=mill</p>
        </a>


    </main>
    <?php require "inc/proj2_footer.inc.php"; ?>
    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>