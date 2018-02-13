<?php include 'controllers/db/dbConnection.php' ?>
<?php include 'controllers/delete.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Magazin Masini</title>
    <link rel = "stylesheet" type = "text/css" href = "style/css/style.css" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="controllers/js/pagination.js"></script>
    <link href="style/css/pagination.css" rel="stylesheet">
    <link href="style/css/images.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="controllers/js/paging.js"></script>

</head>
<body>
<header>
    <nav>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="view/insert.php">Insert</a></li>
        <li><a href="#about">About</a></li>
    </nav>
</header>
<?php
            $query = "SELECT SQL_CALC_FOUND_ROWS * FROM CARS ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result))
                {
                    ?>
<a class="product" href="product.php?id=<?php echo $row['id']; ?>" title="<?php echo $row['marca']?>">
    <div class="container">
        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imagine']).'" alt="Avatar" class="image" />'?>
        <div class="overlay">
            <div class="text"><?php echo $row['marca'];?></div>
        </div>
    </div>
</a>
<?php
}
}
?>
</div>

</menu>
<footer>

</footer>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').paging({limit:10});
    });
</script>
<script type="text/javascript">
</body>
</html>