<?php include 'controllers/db/dbConnection.php'; ?>
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
if(isset($_GET['id'])){
    $id = preg_replace('#[^0-9]#i','',$_GET['id']);
    $sql = mysqli_query($con,"SELECT * FROM cars WHERE id='$id' LIMIT 1");
    $productCount = mysqli_num_rows($sql);
    if($productCount>0){
        while($row = mysqli_fetch_array($sql)){
            $id = $row["id"];
            $motor = $row["motor"];
            $cai_putere = $row["cai_putere"];
            $culoare = $row["culoare"];
            $an = $row["an"];
            $stare = $row['stare'];
            $product_name = $row["marca"];
            $image = $row["imagine"];
        }
    }else{
        echo "That item does not exist!";
    }
}else{
    echo "No product in the system with that id";
    exit();
}

?>
<menu>
    <ul>
        <li><?php echo $id ?></li>
        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" alt="Avatar" class="image" />'?>
        <li><?php echo $product_name ?></li></br>
        <li><?php echo $motor ?></li></br>
        <li><?php echo $cai_putere ?></li></br>
        <li><?php echo $culoare ?></li></br>
        <li><?php echo $an ?></li></br>
        <li><?php echo $stare ?></li></br>
    </ul>
</menu>

