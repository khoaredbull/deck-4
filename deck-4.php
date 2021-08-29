<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>deck-4</title>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="main-content">
        <div class="main-content-left">
            <div class="section-product">
                <div class="container">
                    <div class="product-wrapper">
                        <?php include "main-content/product-left.php"; ?>
                        <?php include "main-content/product-right.php"; ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content-right">
           <?php include "main-content/list.php"; ?>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>