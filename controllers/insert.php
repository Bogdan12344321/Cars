<?php include 'db/dbConnection.php';
if(isset($_POST['submit'])) {
    $marca = $_POST['marca'];
    $motor = $_POST['motor'];
    $cai_putere = $_POST['cai_putere'];
    $culoare = $_POST['culoare'];
    $an = $_POST['an'];
    $stare = $_POST['stare'];
    $image = $_POST['myfile'];
    $sql = "INSERT INTO cars(marca,motor,cai_putere,culoare,an,stare,imagine) VALUES ('$marca','$motor','$cai_putere','$culoare','$an','$stare','$image')";
    mysqli_query($con, $sql);
    header("location: ../index.php");
}
if(isset($_POST['btn_upload'])){

}
?>