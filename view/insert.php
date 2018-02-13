<?php include '../controllers/db/dbConnection.php' ?>
<?php include '../controllers/insert.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scoala Generala Nr.2</title>
    <link rel = "stylesheet" type = "text/css" href = "../style/css/style.css" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header>
    <nav>
        <li><a class="active" href="../index.php">Home</a></li>
        <li><a href="insert.php">Insert</a></li>
        <li><a href="#about">About</a></li>
    </nav>
</header>
<menu>
    <form class="form-container" method="post" action="">
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca">
        </div>
        <div class="form-group">
            <label for="motor">Motor:</label>
            <input type="text" class="form-control" id="motor" name="motor">
        </div>
        <div class="form-group">
            <label for="cai_putere">Cai Putere:</label>
            <input type="text" class="form-control" id="cai_putere" name="cai_putere">
        </div>
        <div class="form-group">
            <label for="culoare">Culoare :</label>
            <input type="text" class="form-control" id="culoare" name="culoare">
        </div>
        <div class="form-group">
            <label for="an">An Fabricatie:</label>
            <input type="text" class="form-control" id="an" name="an">
        </div>
        <div class="form-group">
            <label for="stare">Stare:</label>
            <input type="text" class="form-control" id="stare" name="stare">
        </div>

            <button type="submit" name="submit" value="submit"  class="btn btn-primary btn-block">Submit</button>
    </form>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file_img"/>
        <input type="submit" name="btn_upload" value="Upload"/>
    </form>
</menu>
</body>
</html>