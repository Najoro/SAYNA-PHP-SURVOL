<?php 
    include("../include.php");
    include("../app/Views/header.php");
?>
<?php
//controlleur

$controleurGet = '\\app\\Controlleurs\\'.$_GET['controleur'].'Controlleur';
$actionGet = $_GET['action'];

$cntr = new $controleurGet();
$view =$cntr->$actionGet();
$view->display();
?>

<?php include("../app/Views/footer.php");?>