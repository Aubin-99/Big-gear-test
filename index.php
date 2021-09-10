<?php
include 'functions/main-functions.php';
$pages = scandir('pages/');

if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php',$pages)){
    $page = $_GET['page'];
}else{
    $page = 'home';
}
$pages_functions = scandir('functions/');

if (in_array($page.'.func.php',$pages_functions)){
        include 'functions/'.$page.'.func.php';
}
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Big Gear Test</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/produits.css">
    <link rel="stylesheet" href="css/confidentialité.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:500,700,400" type="text/css">
<body>
<?php
include 'body/topbar.php';
include 'body/register.php';
include 'body/signin.php';
?>
<div class="container">
    <?php
    include 'pages/'.$page.'.php';
    ?>
</div>
<footer>
    <?php
    include 'body/footer.php';
    ?>
</footer>
<script scr="js/jquery.js"></script>
<?php
$pages_js = scandir('js/');
if(in_array($page.'func.js',$pages_js)){
    ?>
    <script src="js/<?= $page ?>.func.js"></script>
    <?php
}
?>

</body>
</html>
